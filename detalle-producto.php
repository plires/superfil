<?php

	if (!$_GET['codigo'] ) {
    header('Location: '.__DIR__.'404.php');
  } else {
		$code = urldecode($_GET['codigo']);
  }

  include('includes/config.inc.php');
  include_once('includes/soporte.php');

  $product = $db->getRepoProducts()->getProductByCode($code);
  $lines_extra = $db->getRepoProducts()->getExtraDataFromTheLines($product['line']);
  $galery_images = $db->getRepoProducts()->getGaleryImagesFromTheLines($product['line']);

  // echo "<pre>";
  // var_dump($product);exit;

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
  <?php include_once("includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Molduras y perfiles plásticos. Perfiles plásticos - Perfiles por extrusión. <?= $lines_extra['name'] ?>">
	<title>Superfil - Molduras - <?= $lines_extra['name'] ?></title>

	<base href="<?= BASE ?>">

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

  <section class="listado detalle_producto">

    <!-- Header Productos -->
    <?php include('includes/header-productos.php'); ?>

    <!-- Producto -->
    <section class="container-fluid producto_detalle">
      <div class="row">

        <div class="col-md-6 image">

          <div class="only_mobile">
            <h4>Productos / <?= $lines_extra['h1'] ?>  / Código <?= $product['code'] ?></h4>
            <h2>código <?= $product['code'] ?></h2>
            <hr>  
          </div>

          <img 
            class="img-fluid" 
            src="img/productos/<?= $product['img'] ?>" 
            alt="Producto linea - <?= $product['line_rs'] .'- Código: '. $product['code'] ?>"
          >
          <hr class="only_desktop">
          <img 
            class="img-fluid" 
            src="img/productos/<?= $product['img_t'] ?>" 
            alt="Producto linea - <?= $product['line_rs'] .'- Código: '. $product['code'] ?>"
          >
        </div>

        <div class="col-md-6 datos">

          <div class="only_desktop">
            <h4>Productos / <?= $lines_extra['h1'] ?>  / Código <?= $product['code'] ?></h4>
            <h2>código <?= $product['code'] ?></h2>
            <hr>  
          </div>

          <div>
            <h3>Especificaciones:</h3>

            <!-- Material -->
            <?php if ($product['material']): ?>
              <p><span>Material:</span> <br><?= $product['material'] ?></p>
            <?php endif ?>

            <!-- Medidas -->
            <?php if ($product['measures']): ?>
              <p><span>Medida:</span> <br><?= $product['measures'] ?></p>
            <?php endif ?>

            <!-- Descripcion -->
            <?php if ($product['description']): ?>
              <p><span>Descripción:</span> <br><?= $product['description'] ?></p>
            <?php endif ?>

            <!-- Largo Standard -->
            <?php if ($product['long']): ?>
              <p><span>Largo Standard:</span> <br><?= $product['long'] ?></p>
            <?php endif ?>

            <!-- Colores -->
            <?php if ($product['color']): ?>
              <p><span>Colores:</span> <br><?= $product['color'] ?></p>
            <?php endif ?>

            <!-- Usos y Aplicaciones -->
            <?php if ($product['applications']): ?>
              <p><span>Usos y aplicaciones:</span> <br><?= $product['applications'] ?></p>
            <?php endif ?>

            <hr>

            <!-- Usos y Aplicaciones -->
            <?php if ($product['observations']): ?>
              <h3>Observaciones:</h3>
              <p><?= $product['observations'] ?></p>
            <?php endif ?>
          </div>


        </div>

      </div>
    </section>
    <!-- Producto end -->

    <!-- Necesitas un Presupuesto -->
    <section class="content_presupuesto container">
      <div class="row">
        <div class="col-md-6">
          <div>
            <p class="dudas">¿Tenés dudas?</p>
            <p class="presupuesto">¿Necesitas <br>presupuesto?</p>
          </div>
        </div>
        <div class="col-md-6">
          <a href="contacto.php" class="transition btn btn-primary">CONTACTO</a>
        </div>
      </div>
    </section>
    <!-- Necesitas un Presupuesto end -->

    <!-- Newsletter -->
    <div class="newsletter_listado_productos">
      <?php include('includes/newsletter.php'); ?>
    </div>
    <!-- Newsletter End -->

    <!-- Iconos -->
    <section class="iconos container">
      <div data-aos="fade-left" class="row">
        <div class="col-4 col-md-4">
          <img class="img-fluid" src="img/home/calidad.png" alt="calidad">
          <h4 class="lato">Calidad <br><span>Garantizada</span></h4>
        </div>
        <div class="col-4 col-md-4">
          <img class="img-fluid" src="img/home/stock.png" alt="stock">
          <h4 class="lato">Stock<br><span>Permanente</span></h4>
        </div>
        <div class="col-4 col-md-4">
          <img class="img-fluid" src="img/home/atencion-personalizada.png" alt="atencion personalizada">
          <h4 class="lato">Atención<br><span>Personalizada</span></h4>
        </div>
      </div>
    </section>
    <!-- Iconos end -->

  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/aos/dist/aos.js"></script>
  <script src="node_modules/slick-carousel/slick/slick.js"></script>
  <script src="js/galeria.js"></script>
	<script src="js/app.js"></script>
</body>
</html>