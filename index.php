<?php
	require('includes/config.inc.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
  <?php include_once("includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Molduras y perfiles plásticos.">
	<title>Superfil - Molduras - Perfiles plásticos - Perfiles por extrusión</title>

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

  <section class="home">
  	<!-- Header -->
	  <section class="header container-fluid p-0">
	  	<h1>LÍDERES <br>EN LA INDÚSTRIA <br>DEL PLÁSTICO</h1> 
      <img data-aos="zoom-out-up" class="img-fluid" src="img/header/flecha.png" alt="flecha blanca">
	  </section>
  	<!-- Header end -->

	  <!-- Lineas -->
	  <section class="lineas container">

	  	<div class="row">
	  		<div class="col-md-6">
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/cielorraso-home.jpg" alt="linea cielorrasos">
	  		</div>
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA CIELORRASOS <br>DE PVC</h2>
	  			<p>
	  				La línea de cielorraso de pvc machimbrado se presenta como una solución práctica, estética y económica para la renovación e instalación de techos. Cuenta con los beneficios otorgados por el PVC y su estética es moderna y limpia.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= CIELORRASO . '/' . CIELORRASO_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">1</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div class="col-md-6">
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/tubos-home.jpg" alt="linea tubos">
	  		</div>
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA TUBERÍAS <br>DE PVC</h2>
	  			<p>
	  				Los tubos helicoidales de pvc, están constituidos por una cinta cuya estructura de exterior está compuesta por nervios en forma de T. Esto le confiere rigidez anular y en su interior lisa. Fabricados a base de PVC rígido no plastificado.
					</p>
	  			<div class="content_button">
	  				<a href="<?= TUBOS . '/' . TUBOS_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">2</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div class="col-md-6">
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/camaras-home.jpg" alt="linea camaras">
	  		</div>
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA CÁMARAS <br>FRIGORÍFICAS</h2>
	  			<p>
	  				La línea de perfiles plásticos para cámaras frigoríficas, abarca desde zócalos sanitarios, perfiles U para paneles, ángulos de terminacion y otros, que constituyen una solución intergral al diseño y dinámica de las salas de congelados y cámaras frigoríficas en general.
					</p>
	  			<div class="content_button">
	  				<a href="<?= CAMARAS . '/' . CAMARAS_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">3</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div class="col-md-6">
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/juntas-home.jpg" alt="linea juntas">
	  		</div>
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA JUNTAS <br>WATERSTOP</h2>
	  			<p>
	  				Nuestras juntas Waterstop están elaboradas en PVC plastificado siendo un material sumamente flexible, con alta resistencia mecánica y química, debido a la excelente elasticidad de su composición.
					</p>
	  			<div class="content_button">
	  				<a href="<?= JUNTAS . '/' . JUNTAS_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">4</div>
	  		</div>
	  	</div>

	  </section>
	  <!-- Lineas end -->

	  <!-- Lineas Sin Imagen -->
	  <section class="lineas_sin_imagen container">

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA FURGONES <br>TÉRMICOS</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/furgones-home.jpg" alt="linea furgones">
	  			<p>
	  				Los perfiles marcos de furgones térmicos están desarrollados y diseñados, para soportar bajas temperaturas exigidas por las cargas congeladas.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= FURGONES . '/' . FURGONES_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">5</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA REVESTIMIENTO <br>EXTERIOR</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/revestimientos-home.jpg" alt="linea revestimientos">
	  			<p>
	  				Parasol plástico tipo "z", presentado en diversas tonalidades, pigmentado en la masa. Se ofrece en dos alternativas de materiales, de acuerdo a las características climáticas a las cuales será sometido.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= REVESTIMIENTO . '/' . REVESTIMIENTO_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">6</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA PUBLICIDAD</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/publicidad-home.jpg" alt="linea publicidad">
	  			<p>
	  				Portaprecios en diferentes formatos. Largos standard en stock permanente. Producto ideal para supermercados, shoppings y retails. Consulte por medidas especiales.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= PUBLICIDAD . '/' . PUBLICIDAD_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">7</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA CONECTORES <br>DE POLICARBONATO</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/policarbonato-home.jpg" alt="linea policarbonato">
	  			<p>
	  				Conectores de Policarbonato para la unión y terminación de planchas alveolares de Policarbonato alveolar. Desarrollados con materiales con filtro UV para asegurar una vida útil prolongada del producto, y de libre mantenimiento.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= POLICARBONATO . '/' . POLICARBONATO_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">8</div>
	  		</div>

	  	</div>

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA ILUMINACIÓN</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/iluminacion-home.jpg" alt="linea iluminacion">
	  			<p>
	  				Desarrollamos todo tipo de perfiles cobertores de policarbonato con UV para artefactos de iluminación bajo requerimientos específicos de clientes.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= ILUMINACION . '/' . ILUMINACION_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">9</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA LISTEX</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/listex-home.jpg" alt="linea listex">
	  			<p>
	  				Molduras de madera sintética desarrolladas bajo procesos y acabados patentados, se fabrican con materiales sintéticos diseñados especialmente para obtener características similares a la madera natural.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= LISTEX . '/' . LISTEX_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">10</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA TERMINACIONES</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/terminaciones-home.jpg" alt="linea terminaciones">
	  			<p>
	  				Guardacantos de cerámicos, zócalos de PVC, naríz de escalón, juntas de dilatación entre otros productos para dar una excelente terminación, fáciles de colocar y libres de mantenimiento.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= TERMINACIONES . '/' . TERMINACIONES_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">11</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA NÁUTICA</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/nautica-home.jpg" alt="linea nautica">
	  			<p>
	  				Botazos náuticos fabricados en PVC de alto impacto proporcionan una alta tolerancia a los golpes protegiendo tanto la integridad del muelle como de los barcos. Fáciles de instalar y de gran durabilidad.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= NAUTICA . '/' . NAUTICA_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">12</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA GUARDACAMILLAS</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/guardacamillas-home.jpg" alt="linea guardacamillas">
	  			<p>
	  				Guardacamillas hospitalario de PVC rígido, utilizado para la protección de paredes expuestas a agresiones y golpes causados por el tráfico de camillas en clínicas, hospitales, etc.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= GUARDACAMILLAS . '/' . GUARDACAMILLAS_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">13</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LÍNEA PALET PLÁSTICO</h2>
	  			<img data-aos="flip-left" class="img-fluid" src="img/home/pallet-home.jpg" alt="linea pallet">
	  			<p>
	  				Fabricados a través de la conformación de dos perfiles plásticos, los cuales se unen en una cuadrícula que provee al producto una estructura muy fuerte, que le permite soportar cargas pesasdas.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= PALLETS . '/' . PALLETS_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">14</div>
	  		</div>

	  	</div>

	  </section>
	  <!-- Lineas Sin Imagen end -->

	  <!-- Vialplast -->
	  <section class="vialplast container">
	  	<div class="row">
	  		<div data-aos="fade-left" class="col-md-12 degrade">

	  			<div class="row">
	  				<div class="col-md-7">
	  					<h4>
	  						Conocé nuestra división <br>de productos viales.
	  					</h4>
	  				</div>
	  				<div class="col-md-5">
	  					<div>
	  						<img class="img-fluid" src="img/home/logo-vialplast-bl.png" alt="logo vialplast">
	  					</div>
	  				</div>
	  			</div>
  				
  				<a href="https://issuu.com/superfil/docs/catalogo_vialplast_2021_-_issuu" target="_blank" rel="noopener noreferrer" class="transition btn btn-outline-primary">VER</a>
	  			
	  		</div>
	  	</div>
	  </section>
	  <!-- Vialplast end -->

	  <!-- Newsletter -->
  	<?php include('includes/newsletter.php'); ?>

	  <!-- Leyenda -->
	  <section class="leyenda container">
	  	<div data-aos="fade-in" class="row">
	  		<div class="col-md-8 m-auto">
	  			<h3>
	  				Desde 1982 enfocados en crear productos innovadores y de primera calidad.
	  			</h3>
	  			<a href="empresa" class="transition btn btn-outline-primary">CONOCÉ MÁS</a>
	  		</div>
	  	</div>
	  </section>
	  <!-- Leyenda end -->

	  <!-- Confian en Nosotros -->
	  <section class="confian container-fluid">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<h3>Nuestras Marcas</h3>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col-6 col-lg-2 offset-lg-1">
		  			<a target="_blank" rel="noopener" href="https://depisos.com/">
		  				<img class="img-fluid" src="img/home/logo-depisos.png" alt="logo depisos">
		  			</a>
		  		</div>
		  		<div class="col-6 col-lg-2">
		  			<a target="_blank" rel="noopener" href="https://issuu.com/superfil/docs/catalogo_vialplast_2021_-_issuu">
		  				<img class="img-fluid" src="img/home/logo-vialplast-2.png" alt="logo vialplast">
		  			</a>
		  		</div>
		  		<div class="col-6 col-lg-2">
		  			<a target="_blank" rel="noopener" href="http://summit-plastic.net/">
		  				<img class="img-fluid" src="img/home/logo-summit.png" alt="logo summit">
		  			</a>
		  		</div>
		  		<div class="col-6 col-lg-2">
		  			<a target="_blank" rel="noopener" href="http://cantofil.com.ar/">
		  				<img class="img-fluid" src="img/home/logo-cantofil.png" alt="logo cantofil">
		  			</a>
		  		</div>
		  		<div class="col-12 col-lg-2">
		  			<a target="_blank" rel="noopener" href="http://nordeco.com.ar/">
		  				<img class="img-fluid" src="img/home/logo-nordeco.png" alt="logo nordeco">
		  			</a>
		  		</div>
		  	</div>
	  </section>
	  <!-- Confian en Nosotros end -->

	  <!-- Iconos -->
	  <?php include('./includes/iconos.php'); ?>

	  <!-- Leyenda Final -->
	  <section class="leyenda_final container">
	  	<div class="row">
	  		<div data-aos="fade-right" class="col-md-8 m-auto">
	  			<p class="pt">
	  				Exportamos nuestros productos a toda América.
	  			</p>
	  		</div>
	  	</div>
	  </section>
	  <!-- Leyenda Final end -->

  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>  

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/formsNewsletter.js"></script>
	<script src="node_modules/aos/dist/aos.js"></script>
	<script src="js/app.js"></script>
</body>
</html>