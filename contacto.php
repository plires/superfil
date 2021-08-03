<?php

  include('includes/config.inc.php');
  include_once('includes/soporte.php');

  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['city'])) {
    $city = $_GET['city'];
  } else {
    $city = '';
  }

  if (isset($_GET['comments'])) {
    $comments = $_GET['comments'];
  } else {
    $comments = '';
  }

  if (isset($_GET['errors'])) {

    $errors = unserialize(urldecode($_GET['errors']));
  } else {
    $errors = '';
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
  <?php include_once("includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sección de Contacto - Molduras y perfiles plásticos. Perfiles plásticos - Perfiles por extrusión.">
	<title>Superfil - Molduras - Contacto</title>

	<!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="node_modules/aos/dist/aos.css">
	<link rel="stylesheet" href="css/app.css">

</head>

<body class="margin">
	<!-- Tag Manager Body -->
  <?php include_once("includes/tag_manager_body.php"); ?>

	<!-- Navegacion -->
  <?php include('includes/nav.php'); ?>

  <section class="listado contacto">

    <!-- Header -->
    <section class="header header_contacto container-fluid p-0">
      <div>
        <img class="img-fluid fondo" src="img/contacto/fondo-header.png" alt="fondo">
        <h1 data-aos="fade-right">CONTACTO</h1>
      </div>
      <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
    </section>
    <!-- Header end -->

    <!-- Texto -->
    <section class="container texto">
      <div class="row">
        <div class="col-md-6 m-auto">
          <p data-aos="zoom-out-up">
            Calle 56 N° 4575 - San Martín (CP 1560) <br><span>Buenos Aires - Argentina</span>
          </p>
        </div>
      </div>
    </section>
    <!-- Texto end -->

    <!-- Mapa -->
    <section data-aos="fade-right" class="container-fluid mapa">
      <div class="row">
        <div class="col-md-12 p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.9029562427368!2d-58.548010684355646!3d-34.58132198046534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb77909fe60c3%3A0xee07063621d0f2d!2sSuperfil!5e0!3m2!1ses-419!2sar!4v1627352479458!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
    <!-- Mapa end -->

    <!-- Formulario Header -->
    <section class="container formulario_header">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid" src="img/contacto/logo-superfil.gif" alt="logo superfil contactos">
        </div>
        <div class="col-md-6">
          <p>
            <span>Tel:</span> (+54) 11 4752 7297 <br>
            <span>Email:</span> info@superfil.com.ar <br>
            <span>Dirección:</span> Calle 56 N° 4575 - San Martín (CP 1560) <br>
            Buenos Aires, Argentina. <br>
            <span>Atención:</span> Lunes a Viernes de 9 a 18 hs.
          </p>
        </div>
      </div>
    </section>
    <!-- Formulario Header end -->

    <!-- Formulario -->
    <section class="container formulario">
      <div class="row">
        <div data-aos="fade-right" class="col-md-6">
          <img class="img-fluid" src="img/contacto/almacen.jpg" alt="almacen superfil">
        </div>
        <div data-aos="fade-left" class="col-md-6">

          <h3>¿DUDAS O CONSULTAS?</h3>

          <!-- Errores Formulario -->
          <?php if ($errors): ?>

            <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>¡Por favor verificá los datos!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <ul style="padding: 0;">
                <?php foreach ($errors as $error) { ?>
                  <li>- <?php echo $error; ?></li>
                <?php } ?>
              </ul>
            </div>

          <?php endif ?>
          <!-- Errores Formulario end -->

          <form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

            <input name="origin" type="hidden" value="Formulario de Contacto">
            
            <!-- Nombre -->
            <div class="mb-3">
              <label for="name" class="form-label">Nombre *</label>
              <input required type="text" class="form-control" value="<?= $name ?>" name="name">
              <div class="invalid-feedback">
                Ingresá tu nombre
              </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email *</label>
              <input required type="email" class="form-control" value="<?= $email ?>" name="email">
              <div class="invalid-feedback">
                Ingresá tu email
              </div>
            </div>

            <!-- Telefono -->
            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" value="<?= $phone ?>" name="phone">
            </div>

            <!-- Ciudad -->
            <div class="mb-3">
              <label for="city" class="form-label">Ciudad</label>
              <input type="text" class="form-control" value="<?= $city ?>" name="city">
            </div>

            <!-- Comentarios -->
            <div class="mb-3">
              <label for="comments" class="form-label">Comentarios *</label>
              <textarea required class="form-control" name="comments"><?= $comments ?></textarea>
              <div class="invalid-feedback">
                Ingresá tu comentario
              </div>
            </div>

            <button type="button" id="send" class="btn btn-primary">ENVIAR</button>

          </form>

        </div>
      </div>
    </section>
    <!-- Formulario Header end -->

    <!-- Newsletter -->
    <div class="newsletter_listado_productos">
      <?php include('includes/newsletter.php'); ?>
    </div>
    <!-- Newsletter End -->

    <?php include('./includes/iconos.php'); ?>

  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
  <script src="node_modules/aos/dist/aos.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>
</html>