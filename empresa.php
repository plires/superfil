<?php
  require('includes/config.inc.php');
  include_once('includes/soporte.php');

  $galery_images = $db->getRepoProducts()->getGaleryImagesFromTheLines(15);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
  <?php include_once("includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sección de Empresa - Molduras y perfiles plásticos. Perfiles plásticos - Perfiles por extrusión.">
	<title>Superfil - Molduras - Empresa</title>

	<!-- Favicons -->
  <?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="node_modules/aos/dist/aos.css">
  <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="node_modules/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="css/app.css">
  
</head>
<body class="margin">
	<!-- Tag Manager Body -->
  <?php include_once("includes/tag_manager_body.php"); ?>

	<!-- Navegacion -->
  <?php include('includes/nav.php'); ?>

  <section class="listado contacto distribuidores empresa">

    <!-- Header -->
    <section class="header header_contacto container-fluid p-0">
      <div>
        <img class="img-fluid fondo" src="img/contacto/fondo-header.png" alt="fondo">
        <h1 data-aos="fade-right">EMPRESA</h1>
      </div>
      <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
    </section>
    <!-- Header end -->

    <!-- Texto -->
    <section class="container texto">
      <div class="row">
        <div class="col-md-12">
          <p data-aos="zoom-out-up">
            Fundada en el año 1982, Superfil S.A. se dedica a la elaboración de molduras y perfiles por extrusión.
            Se encuentra ubicada en el partido de San Martín, provincia de Buenos Aires, República Argentina. La planta industrial, administración y ventas ocupan aproximadamente 7000 m2 y un plantel de 50 personas.
          </p>

          <p data-aos="zoom-out-up">
            Cuenta con un departamento de ventas idóneo, que en conjunto con el departamento técnico, presta un completo asesoramiento al comprador.
            El área de Producción posee 16 líneas de extrusión, procesando aproximadamente 2400 toneladas al año.
          </p>
        </div>
      </div>
    </section>
    <!-- Texto end -->

    <!-- Counter -->
    <section class="container counter">
      <div class="row">

        <div class="col-md-4">
          <p class="number"><span id="numero_m2" class="numeros">0</span></p>
          <p class="description">metros <br>cuadrados</p>
        </div>

        <div class="col-md-4">
          <p class="number"><span id="lineas" class="numeros">0</span></p>
          <p class="description">líneas de <br>extrusión</p>
        </div>

        <div class="col-md-4">
          <p class="number"><span id="toneladas" class="numeros">0</span></p>
          <p class="description">toneladas<br>al año</p>
        </div>

      </div>
    </section>
    <!-- Counter end -->

    <!-- Info -->
    <section class="container info">
      <div class="row">

        <div class="col-md-6">
          <img class="img-fluid" src="img/empresa/maquina-extrusora.jpg" alt="maquina extrusora pvc">
        </div>

        <div class="col-md-6">
          <div class="gradient">
            <p>
              El Departamento técnico es el responsable del proyecto y diseño del producto, y la ejecución de planos para la producción y matricería.
            </p>

            <p>
              Superfil S.A. cubre las necesidades de confección de matrices y demás elementos o dispositivos necesarios para la fabricación de sus productos.
              Aseguramiento de la calidad se encarga de los controles necesarios para garantizar la calidad de sus productos.
            </p>  
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-6">
          <div class="gradient">
            <p>
              Los productos son comercializados en toda la República Argentina; y exportados mayoritariamente a todo el continente Americano.
            </p>

            <p>
              En Diciembre de 1995, Superfil S.A. fue seleccionada entre 700 empresas por la fundación AMIL Internacional, como una de las 20 empresas más emprendedoras en el ámbito del MERCOSUR.
            </p> 
          </div>
        </div>

        <div class="col-md-6">
           <img class="img-fluid" src="img/empresa/galpon-superfil.jpg" alt="galpon superfil">
        </div>

      </div>
    </section>
    <!-- Info end -->

    <!-- Lideres -->
    <section class="container lideres">
      <div class="row">

        <div class="col-md-12">
          <p>
            LÍDERES EN LA INDUSTRIA <br>DEL PLÁSTICO
          </p>
        </div>

      </div>
    </section>
    <!-- Lideres end -->

    <!-- Galeria -->
    <?php include('./includes/galeria-imagenes.php'); ?>

    <!-- Newsletter -->
    <div class="newsletter_listado_productos">
      <?php include('includes/newsletter.php'); ?>
    </div>

    <!-- Iconos End -->
    <?php include('./includes/iconos.php'); ?>

  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/formsNewsletter.js"></script>
  <script src="node_modules/aos/dist/aos.js"></script>
  <script src="node_modules/slick-carousel/slick/slick.js"></script>
  <script src="js/galeria.js"></script>
  <!-- CountUP (efecto JS para numeros) -->
  <script src="js/countUp.min.js"></script>
	<script src="js/app.js"></script>

  <!-- Script para los numeros variables de esta pagina -->
  <script type="text/javascript">
    var options = {
      useEasing: true, 
      useGrouping: true, 
      separator: '.', 
      decimal: ',', 
    };
    
    var marcas = new CountUp('numero_m2', 0, 7000, 0, 3, options);
    if (!marcas.error) {
      marcas.start();
    } else {
      console.error(marcas.error);
    }

    var productos = new CountUp('lineas', 0, 16, 0, 4, options);
    if (!productos.error) {
      productos.start();
    } else {
      console.error(productos.error);
    }

    var calidad = new CountUp('toneladas', 0, 2400, 0, 5, options);
    if (!calidad.error) {
      calidad.start();
    } else {
      console.error(calidad.error);
    }
  </script>
</body>
</html>