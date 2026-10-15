<?php
  require_once( __DIR__ . '/includes/bootstrap.php' );

  // Lead saved by index.php after a successful submit; sent to the leads platform only once
  session_start();
  $portalLead = $_SESSION['portal_lead'] ?? null;
  unset($_SESSION['portal_lead']);
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
    <link rel="stylesheet" href="./css/app.css">

    <title>Gracias - juntas waterstop para hormigón</title>
  </head>
  <body>
    <!-- Tag Manager Head -->
    <?php include_once(__DIR__ . "/includes/tag_manager_body.inc") ?>
    
    <!-- Section Header -->
    <header>
      <div class="container">
        <div class="row">
          
          <!-- Col central -->
          <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;" class="col-md-12 text-center">
            <h1>ENVIO EXITOSO!</h1>
            <p>Agradecemos tu contacto, nos comunicaremos a la brevedad.</p>
          </div>
          <!-- Col central end -->

        </div>
      </div>
    </header>
    <!-- Section Header end -->

    <!-- Section Imagenes -->
    <section class="imagenes">
      <div class="container">

        <div class="row text-center mb-3">
          <div class="col-md-12">
            <h3>Conocé otros productos</h3>  
          </div>
        </div>

        <div class="row">
          
          <div class="col-md-4 mb-5">
            <a href="https://vialplast.com.ar/landings/conos-postes" target="_blank">
              <img class="img-fluid wow fadeInUp" src="img/acceso-conos-postes-viales.jpg" alt="conos y postes viales">
            </a>
          </div>

          <div class="col-md-4 mb-5">
            <a href="https://vialplast.com.ar/landings/topes-estacionamiento" target="_blank">
              <img data-wow-delay="0.3s" class="img-fluid wow fadeInUp" src="img/acceso-topes-estacionamiento.jpg" alt="topes de estacionamiento">
            </a>
          </div>

          <div class="col-md-4 mb-5">
            <a href="https://vialplast.com.ar/landings/reductores-velocidad" target="_blank">
              <img data-wow-delay="0.6s" class="img-fluid wow fadeInUp" src="img/acceso-reductores-viales.jpg" alt="reductores viales">
            </a>
          </div>

        </div>
      </div>
    </section>
    <!-- Section Imagenes end -->

    <!-- Seguir navegando -->
    <section class="solicita_presupuesto">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center wow fadeInUp">
            <a href="http://superfil.com.ar/" target="_blank" class="btn btn_to_form btn_site transition wow fadeInUp">SEGUIR NAVEGANDO</a>
          </div>

        </div>
      </div>
    </section>
    <!-- Seguir navegando end -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <a class="transition btn_to_form" href="mailto:info@superfil.com.ar">
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
    <script src="./js/app.js" ></script>

    <?php if ($portalKey !== '' && is_array($portalLead)): ?>
    <!-- Lead Plataforma de Leads Libre -->
    <script>
      window.portal
        ?.lead(<?= json_encode($portalLead, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE) ?>)
        .catch(() => {})
    </script>
    <?php endif ?>

  </body>
</html>