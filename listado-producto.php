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

    <?php switch ($products[0]['line_rs']) {
      case TUBOS:
          include('includes/secciones-listado/section-tubos.php'); 
        break;

      case CIELORRASO:
          include('includes/secciones-listado/section-cielorraso.php'); 
        break;

      case LISTEX:
          include('includes/secciones-listado/section-listex.php'); 
        break;

      case JUNTAS:
          include('includes/secciones-listado/section-juntas.php'); 
        break;

      case PALLETS:
          include('includes/secciones-listado/section-pallets.php'); 
        break;

      case ILUMINACION:
          include('includes/secciones-listado/section-iluminacion.php'); 
        break;
      
      default:
        include('includes/secciones-listado/section-comun.php');
        break;
    } ?>

  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/aos/dist/aos.js"></script>
  <script src="node_modules/slick-carousel/slick/slick.js"></script>
  <script src="js/formsNewsletter.js"></script>
  <script src="js/galeria.js"></script>
	<script src="js/app.js"></script>
</body>
</html>