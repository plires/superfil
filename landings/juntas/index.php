<?php
  require_once( __DIR__ . '/includes/bootstrap.php' );
  require_once( __DIR__ . '/../clases/app.php' );
  require_once( __DIR__ . '/../clases/repositorioSQL.php' );

  $recaptchaSiteKey = $_ENV['RECAPTCHA_SITE_KEY_V3'] ?? '';
  $errors = [];
  $name = '';
  $email = '';
  $phone = '';
  $comments = '';
  $utm_medium = $_GET['utm_medium'] ?? 'google';

  // Envio del formulario de contacto
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Only accept scalar strings from the form (name[]=x would otherwise break trim())
    $field = function ($key, $default = '') {
      return isset($_POST[$key]) && is_string($_POST[$key]) ? trim($_POST[$key]) : $default;
    };

    $name = $field('name');
    $email = $field('email');
    $phone = $field('phone');
    $comments = $field('comments');
    $utm_medium = $field('utm_medium', is_string($utm_medium) ? $utm_medium : 'google');

    // Origin, rubro and path are fixed server side; only user input comes from the form
    $require = (object) [
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'comments' => $comments,
      'utm_medium' => $utm_medium,
      'origin' => LANDING_ORIGIN,
      'rubro' => LANDING_RUBRO,
      'path' => LANDING_PATH,
    ];

    if (isset($_POST['newsletter'])) {
      $require->newsletter = 'on';
    }

    $app = new App();

    $recaptcha = $app->verifyRecaptcha($_POST['recaptcha_token'] ?? ''); // obtiene resultado de la verificacion recaptcha
    $errors = $app->validateForm($recaptcha, $require); // obtiene errores de la validacion de formulario

    if (!$errors) {

      $emailTo = null;

      try {

        //grabamos en la base de datos y obtenemos el email destino de la consulta
        $db = new RepositorioSQL();
        $emailTo = $db->getRepositorioContacts()->saveInBDD($require);

        // Registramos en Perfit el contacto
        $app->registerEmailContactsInPerfit($_ENV['PERFIT_APY_KEY'], $_ENV['PERFIT_LIST'], LANDING_INTEREST, $require, $emailTo);

        // Enviamos los correos al usuario y al administrador del sitio
        $sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $require, $emailTo);
        $sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $require, $emailTo);

        if (!$sendUser) {
          error_log('[landing juntas] confirmation email to user could not be sent');
        }

        // The lead is saved and sales got the email: show success to avoid duplicate submissions
        if ($sendClient) {
          // gracias.php sends this lead to the Libre leads platform (portal.lead) once
          session_start();
          $_SESSION['portal_lead'] = [
            'name' => $name,
            'email' => $email,
            'phone' => (string) $phone,
            'message' => $comments,
          ];

          // Redirigimos a la pagina de gracias (Post/Redirect/Get)
          header('Location: gracias.php');
          exit;
        }

      } catch (\Throwable $th) {
        error_log('[landing juntas] ' . $th->getMessage());
      }

      $errors[] = 'Ocurrió un error al enviar la consulta, por favor intente nuevamente'
        . ($emailTo ? ' o si prefiere contacte a ' . $emailTo[0] : '') . '.';

    }

  }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Tag Manager Head -->
    <?php include_once(__DIR__ . "/includes/tag_manager_head.inc") ?>

<?php include(__DIR__ . '/includes/portal_head.inc.php'); ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    <?php include(__DIR__ . '/includes/favicon.inc.php'); ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./node_modules/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="./css/app.css">

    <title>juntas waterstop para hormigón y obras en cosntruccion</title>
  </head>
  <body>
    <!-- Tag Manager Head -->
    <?php include_once(__DIR__ . "/includes/tag_manager_body.inc") ?>
    
    <!-- Section Header -->
    <header>
      <div class="container">
        <div class="row">
          
          <!-- Col Izq -->
          <div class="col-md-6 text-center">
            <h1 class="wow fadeInUp">JUNTAS WATERSTOP</h1>
            <img class="img-fluid wow fadeInLeft" src="img/waterstop-principal.png" alt="juntas waterstop">
            <h2 class="wow fadeInUp">
              Bandas flexibles fabricadas en PVC para sellar juntas de construcción y de expansión.
            </h2>
          </div>
          <!-- Col Izq end -->

          <!-- Col Der -->
          <div class="col-md-6 wow fadeInRight">

            <!-- Errores Formulario -->
            <?php if ($errors): ?>
              <div id="error" class="alert alert-danger alert-dismissible fade show fadeInLeft" role="alert">
                <strong>¡Por favor verificá los datos!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <ul style="padding: 0;">
                  <?php foreach ($errors as $error) { ?>
                    <li>- <?= e($error) ?></li>
                  <?php } ?>
                </ul>
              </div>
            <?php endif ?>
            <!-- Errores Formulario end -->

            <img class="img-fluid logo_superfil" src="img/logo-superfil.png" alt="logo superfil">
            <h3>¡Presupuestá ahora!</h3>

            <!-- Form  -->
            <form method="post" action="" id="form_juntas" data-recaptcha-key="<?= e($recaptchaSiteKey) ?>" name="form_juntas" class="needs-validation" novalidate>

              <input type="hidden" name="utm_medium" value="<?= e($utm_medium) ?>">
              <input type="hidden" name="recaptcha_token" id="recaptcha_token" value="">

              <!-- Nombre -->
              <div class="form-group">
                <input required type="text" class="form-control" id="name" name="name" placeholder="Nombre *" value="<?= e($name) ?>">
                <div class="valid-feedback">
                  Bien Hecho!
                </div>
                <div class="invalid-feedback">
                  Agregá tu nombre por favor :(
                </div>
              </div>
              <!-- Nombre end -->

              <!-- Telefono -->
              <div class="form-group">
                <input required type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono *" value="<?= e($phone) ?>">
                <div class="valid-feedback">
                  Bien Hecho!
                </div>
                <div class="invalid-feedback">
                  Agregá un teléfono por favor :(
                </div>
              </div>
              <!-- Telefono end -->

              <!-- Email -->
              <div class="form-group">
                <input required type="email" class="form-control" id="email" name="email" placeholder="Email *" value="<?= e($email) ?>">
                <div class="valid-feedback">
                  Bien Hecho!
                </div>
                <div class="invalid-feedback">
                  Agregá tu email por favor :(
                </div>
              </div>
              <!-- Email end -->
              
              <!-- Comentarios -->
              <div class="form-group">
                <textarea required class="form-control" id="comments" name="comments" rows="3" placeholder="Comentarios *"><?= e($comments) ?></textarea>
                <div class="valid-feedback">
                  Bien Hecho!
                </div>
                <div class="invalid-feedback">
                  sumá tus comentarios por favor :(
                </div>
              </div>
              <!-- Comentarios end -->
              
              <!-- Verifica -->
              <div class="form-group form-check">
                <input checked type="checkbox" class="form-check-input" id="newsletter" name="newsletter">
                <label class="form-check-label" for="newsletter">Suscribe Newsletter</label>
              </div>
              <!-- Verifica end -->


              <input id="send" name="send" type="submit" value="ENVIAR" class="btn btn_presupuesto transition">

            </form>
            <!-- Form end -->

          </div>
          <!-- Col Der end -->

        </div>
      </div>
    </header>
    <!-- Section Header end -->

    <!-- Section Imagenes -->
    <section class="imagenes">
      <div class="container">
        <div class="row">
          
          <!-- Col Izq -->
          <div class="col-md-6 text-center">
            <img class="img-fluid wow fadeInUp" src="img/waterstop-a.jpg" alt="juntas para hormigon">
          </div>
          <!-- Col Izq end -->

          <!-- Col Der -->
          <div class="col-md-6 text-center">
            <img data-wow-delay="0.3s" class="img-fluid wow fadeInUp" src="img/waterstop-b.jpg" alt="juntas para hormigon b">
          </div>
          <!-- Col Der end -->

        </div>
      </div>
    </section>
    <!-- Section Imagenes end -->

    <!-- Section Carrousel V -->
    <section class="slides_v">
      <div class="container">

        <div class="row text-center">
          <div class="col-md-12">
            <h3>JUNTAS MODELO "V"</h3>
          </div>
        </div>

        <div class="row">
          
          <!-- Carrouseles -->
          <div class="col-md-12 text-center">
            
            <div class="bd-example">
              <div id="carouselJuntasV" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselJuntasV" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselJuntasV" data-slide-to="1"></li>
                  <li data-target="#carouselJuntasV" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner gallery-v">
                  <div class="carousel-item active">
                    <a title="Junta V10 - Medidas en mm" href="img/v-10.png">
                      <img src="img/v-10.png" class="d-block w-100" alt="juntas para hormigon waterstop v10">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>V10</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a title="Junta V15 - Medidas en mm" href="img/v-15.png">
                      <img src="img/v-15.png" class="d-block w-100" alt="juntas para hormigon waterstop v15">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>V15</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a title="Junta V20 - Medidas en mm" href="img/v-20.png">
                      <img src="img/v-20.png" class="d-block w-100" alt="juntas para hormigon waterstop v20">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>V20</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselJuntasV" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselJuntasV" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>
          <!-- Carrouseles end -->

        </div>
      </div>
    </section>
    <!-- Section Carrousel V end -->

    <!-- Section Carrousel O -->
    <section class="slides_o">
      <div class="container">

        <div class="row text-center">
          <div class="col-md-12">
            <h3>JUNTAS MODELO "O"</h3>
          </div>
        </div>

        <div class="row">
          
          <!-- Carrouseles -->
          <div class="col-md-12 text-center">
            
            <div class="bd-example">
              <div id="carouselJuntasO" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselJuntasO" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselJuntasO" data-slide-to="1"></li>
                  <li data-target="#carouselJuntasO" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner gallery-o">
                  <div class="carousel-item active">
                    <a title="Junta O15 - Medidas en mm" href="img/o-15.png">
                      <img src="img/o-15.png" class="d-block w-100" alt="juntas para hormigon waterstop o15">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>O15</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a title="Junta O22 - Medidas en mm" href="img/o-22.png">
                      <img src="img/o-22.png" class="d-block w-100" alt="juntas para hormigon waterstop o22">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>O22</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <a title="Junta O32 - Medidas en mm" href="img/o-32.png">
                      <img src="img/o-32.png" class="d-block w-100" alt="juntas para hormigon waterstop o32">
                    </a>
                    <div class="carousel-caption d-none d-md-block">
                      <h5>O32</h5>
                      <p>Medidas expresadas en mm.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselJuntasO" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselJuntasO" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>
          <!-- Carrouseles end -->

        </div>
      </div>
    </section>
    <!-- Section Carrousel O end -->

    <!-- Section Ventajas de las juntas -->
    <section class="ventajas">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center">
            <h3>VENTAJAS DE LAS JUNTAS WATERSTOP</h3>
          </div>

          <div class="col-md-6">
            <ul>
              <li>Construidas con PVC de alta calidad y durabilidad prolongada.</li>
              <li>Impermeables. Adecuadas para alta presión de agua.</li>
              <li>Tienen una gran resistencia a la tracción y adecuado coeficiente de alargamiento a la ruptura.</li>
            </ul>
          </div>

          <div class="col-md-6">
            <ul>
              <li>Resistentes al envejecimiento y a los agentes químicos agresivos.</li>
              <li>Sección con multinervadura que dificulta el paso de agua.</li>
              <li>Fácil de soldar “in situ” mediante termo-fusión.</li>
            </ul>
          </div>

        </div>
      </div>
    </section>
    <!-- Section Ventajas de las juntas end -->

    <!-- Section info extra -->
    <section class="info_extra mb-5">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="row h-100">
              <div class="col-8">
                <p>
                  Las juntas WATERSTOP, son elementos de gran resistencia y elasticidad, 
                  que incorporadas en las juntas de concreto aseguran una perfecta 
                  estanqueidad en las obras donde se quiere resistir la acción de 
                  fuertes presiones de agua, absorber la expansión y contracción,
                  movimientos laterales y transversales de la estructura.
                </p>  
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Section info extra end -->

    <!-- Solicita presupuesto -->
    <section class="solicita_presupuesto">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center wow fadeInUp">
            <a href="#form_juntas" class="btn btn_to_form btn_site transition">SOLICITÁ PRESUPUESTO</a>
          </div>

        </div>
      </div>
    </section>
    <!-- Solicita presupuesto end -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <a class="transition btn_to_form" href="#form_juntas">
              <img class="img-fluid" src="img/mail.png" alt="email icono">
              info@superfil.com.ar
            </a>
            <p>Copyright &copy; <?= date('Y') ?>, All Rights Reserved.</p>
          </div>

        </div>
      </div>
    </footer>
    <!-- Footer end -->

    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./node_modules/wow.js/dist/wow.min.js"></script>
    <script src="./node_modules/jquery.easing/jquery.easing.min.js"></script>
    <script src="./node_modules/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= e($recaptchaSiteKey) ?>"></script>
    <script src="./js/app.js" ></script>

  </body>
</html>
