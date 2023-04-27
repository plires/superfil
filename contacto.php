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

  if (isset($_GET['msg_contacto'])) {
    $msg_contacto = urldecode($_GET['msg_contacto']);
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

  <!-- WhatsApp -->
  <?php include_once("includes/wapp.php") ?>

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
        <div data-aos="zoom-out-up" class="col-md-6 m-auto">
          <a 
            class="transition" 
            href="tel:541147527297" 
            target="_blank"
            rel="noopener">
            Tel: <span>(+54) 11 4752 7297</span><br>
          </a>
          <a 
            class="transition" 
            href="https://api.whatsapp.com/send?phone=+5491157972255&text=Hola%20Superfil,%20Necesito%20hacer%20una%20consulta...%20" 
            target="_blank"
            rel="noopener">
            Whatsapp: <span>+54 9 11 4752 7297</span><br>
          </a>
          <a 
            class="transition" 
            href="mailto:info@superfil.com.ar" 
            target="_blank"
            rel="noopener">
            Email: <span>info@superfil.com.ar</span><br>
          </a>
          <a 
            class="transition" 
            href="https://g.page/superfil-san-martin?share" 
            target="_blank"
            rel="noopener">
            Dirección: <span>Calle 56 N° 4575 - San Martín (CP 1560)</span><br>
            Buenos Aires, Argentina.
          </a>
          <p>Atención: <span>Lunes a Viernes de 9 a 18 hs.</span></p>
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

    <!-- Formularios Contactos -->
    <?php include('./includes/formulario-contactos.php'); ?>

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
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/formsNewsletter.js"></script>
  <script src="node_modules/aos/dist/aos.js"></script>
  <script src="js/app.js"></script>
  <script src="js/formsContact.js"></script>

</body>
</html>