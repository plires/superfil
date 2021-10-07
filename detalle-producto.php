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


    <?php switch ($product['line_rs']) {
      case LISTEX:
        include('./includes/header-productos-listex.php');
        include('includes/detalles-producto/detalle-producto-listex.php');
        break;

      case JUNTAS:
        include('./includes/header-productos-juntas.php');
        include('includes/detalles-producto/detalle-producto-comun.php');
        break;

      default:
        include('./includes/header-productos.php');
        include('includes/detalles-producto/detalle-producto-comun.php');
        break;
    } ?>    

    <?php include('./includes/necesitas-presupuesto.php') ?>

    <!-- Iconos -->
    <?php include('./includes/iconos.php'); ?>

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