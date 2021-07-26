<?php

	if (!$_GET['linea_rs']) {
    header('Location: '.__DIR__.'404.php');
  } else {
		$line = urldecode($_GET['linea_rs']);
  }

  include('includes/config.inc.php');
  include_once('includes/soporte.php');

  $products = $db->getRepoProducts()->getProductsByLine($line);
  $lines_extra = $db->getRepoProducts()->getExtraDataFromTheLines($products[0]['line']);
  $galery_images = $db->getRepoProducts()->getGaleryImagesFromTheLines($products[0]['line']);

  // echo "<pre>";
  // var_dump($products);exit;

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

  <section class="listado">

    <!-- Header -->
    <section class="header container-fluid p-0">
      <div class="header_productos">
        <img data-aos="zoom-out-up" class="img-fluid" src="img/productos/<?= $lines_extra['img_header'] ?>" alt="header <?= $lines_extra['name'] ?>">
        <h1 data-aos="fade-right"><?= $lines_extra['h1'] ?></h1>
      </div>
      <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
    </section>
    <!-- Header end -->

    <!-- Texto -->
    <section class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
          <p data-aos="zoom-out-up">
            <?= $lines_extra['description'] ?>
          </p>
        </div>
      </div>
    </section>
    <!-- Texto end -->

    <!-- Listado Productos -->
    <section class="container productos_listado">
      <div class="row">

        <?php if (empty($products)): ?>

          <div class="col-md-12">
            <p>No hay productos para mostrar.</p>
          </div>

        <?php else: ?>

          <?php foreach ($products as $key => $product): ?>
            
            <div data-aos="zoom-in" class="col-6 col-md-4 col-lg-3 m-auto contenido">
              <img class="img-fluid" src="img/productos/<?= $product['img'] ?>" alt="<?= $product['title'] ?> - <?= $product['code'] ?>">
              <div class="background">
                <h2>CÓDIGO <br><?= $product['code'] ?></h2>
                <a href="#" class="btn btn-primary transition">VER</a>
              </div>
            </div>

          <?php endforeach ?>

        <?php endif ?>

      </div>
    </section>
    <!-- Listado Productos end -->

    <!-- Galeria de imagenes start -->
    <section class="galeria slider-g">

      <?php if (empty($products)): ?>

        <div class="col-md-12">
          <p>No hay productos para mostrar.</p>
        </div>

      <?php else: ?>

        <?php foreach ($galery_images as $key => $galery_image): ?>
          
          <div>
            <img src="img/productos/<?= $galery_image['url']  ?>" alt="Galería - <?= $lines_extra['name'] ?> - <?= $galery_image['id']  ?>">
          </div>
          
        <?php endforeach ?>

      <?php endif ?>

    </section>
    <!-- Galeria de imagenes end -->

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