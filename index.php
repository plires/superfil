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

	<!-- Navegacion -->
  <?php include('includes/nav.php'); ?>

  <section class="home">
  	<!-- Tag Manager Body -->
    <?php include_once("includes/tag_manager_body.php"); ?>
  	
  	<!-- Header -->
	  <section class="header container-fluid p-0">
	  	<h1>LÍDERES <br>EN LA INDUSTRIA <br>DEL PVC</h1> 
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
	  			<h2>CIELORRASOS <br>DE PVC</h2>
	  			<p>El Cielorraso Superfil, es un sistema de perfiles de encastre tipo machimbre obtenidos a partir de las más altas tecnologías en la extrusión de compuestos de PVC.</p>
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
	  			<h2>TUBERÍAS <br>DE PVC</h2>
	  			<p>
	  				El tubo de PVC SUPERFIL&copy; presenta aspectos revolucionarios en cuanto a su concepción y proceso de fabricación. El mismo esta 
						formado por un tubo de pared exterior perfilado e interior liso, fabricado a base de PVC rígido no plastificado como materia prima.
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
	  			<h2>CÁMARAS <br>FRIGORÍFICAS</h2>
	  			<p>
	  				Los zócalos sanitarios de Superfil SA están fabricados en PVC con mejorador de impacto, lo que permite una alta resistencia 
	  				ante golpes en circunstancias de temperaturas bajo cero.
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
	  			<h2>JUNTAS <br>WATERSTOP</h2>
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
	  			<h2>FURGONES <br>TÉRMICOS</h2>
	  			<p>
	  				Los perfiles marcos de furgones térmicos están desarrollados y diseñados, para soportar bajas temperaturas exigidas por las cargas congeladas.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= FURGONES . '/' . FURGONES_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">5</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>REVESTIMIENTO <br>EXTERIOR</h2>
	  			<p>
	  				Quiebravista plástico tipo "z", presentado en diversas tonalidades, pigmentado en la masa. Se ofrece en dos alternativas de materiales, de acuerdo a las características climáticas a las cuales será sometido.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= REVESTIMIENTO . '/' . REVESTIMIENTO_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">6</div>
	  		</div>
	  	</div>

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>PUBLICIDAD</h2>
	  			<p>
	  				Portaprecios en diferentes formatos. Largos standard en stock permanente. Producto ideal para supermercados, shoppings y retails. Consulte por medidas especiales.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= PUBLICIDAD . '/' . PUBLICIDAD_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">7</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>POLICARBONATO</h2>
	  			<p>
	  				Perfiles para unión y sellado en policarbonato, simple y práctico. Es una opción ideal para aplicaciones en donde se requiere unir "H", o sellar "U" en instalaciones de placas alveolares de policarbonato.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= POLICARBONATO . '/' . POLICARBONATO_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">8</div>
	  		</div>

	  	</div>

	  	<div class="row">
	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>ILUMINACIÓN</h2>
	  			<p>
	  				Desarrollamos todo tipo de perfiles cobertores de policarbonato con UV para artefactos de iluminación bajo requerimientos específicos de clientes.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= ILUMINACION . '/' . ILUMINACION_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">9</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>LISTEX</h2>
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
	  			<h2>TERMINACIONES</h2>
	  			<p>
	  				Guardacantos de cerámicos, zócalos de PVC, naríz de escalón, juntas de dilatación entre otros productos para dar una excelente terminación, fáciles de colocar y libres de mantenimiento.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= TERMINACIONES . '/' . TERMINACIONES_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">11</div>
	  		</div>

	  		<div data-aos="zoom-in" class="col-md-6">
	  			<h2>NÁUTICA</h2>
	  			<p>
	  				Botazos náuticos fabricados en PVC de alto impacto proporcionan una alta tolerancia a los golpes protegiendo tanto la integridad del muelle como de los barcos. Fáciles de instalar y de gran durabilidad.
	  			</p>
	  			<div class="content_button">
	  				<a href="<?= NAUTICA . '/' . NAUTICA_URL . '.html' ?>" class="transition btn btn-outline-primary">VER</a>
	  			</div>
	  			<div class="numero">12</div>
	  		</div>
	  	</div>

	  </section>
	  <!-- Lineas Sin Imagen end -->

	  <!-- Vialplast -->
	  <section class="vialplast container">
	  	<div class="row">
	  		<div data-aos="fade-left" class="col-md-12 degrade">

	  			<div class="row">
	  				<div class="col-md-6">
	  					<h4>
	  						Conocé nuestra división de productos viales.
	  					</h4>
	  				</div>
	  				<div class="col-md-6">
	  					<div>
	  						<img class="img-fluid" src="img/home/logo-vialplast.png" alt="logo vialplast">
	  					</div>
	  				</div>
	  			</div>
  				
  				<a href="#" class="transition btn btn-outline-primary">VER</a>
	  			
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
	  			<a href="#" class="transition btn btn-outline-primary">CONOCÉ MÁS</a>
	  		</div>
	  	</div>
	  </section>
	  <!-- Leyenda end -->

	  <!-- Confian en Nosotros -->
	  <section class="confian container-fluid">
	  	<div class="container">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<h3>Confían en nosotros</h3>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col-6 col-md-2 offset-md-1">
		  			<img class="img-fluid" src="img/home/logo-summit.jpg" alt="logo summit">
		  		</div>
		  		<div class="col-6 col-md-2">
		  			<img class="img-fluid" src="img/home/logo-todomax.jpg" alt="logo todomax">
		  		</div>
		  		<div class="col-6 col-md-2">
		  			<img class="img-fluid" src="img/home/logo-distribuidora.jpg" alt="logo distribuidora">
		  		</div>
		  		<div class="col-6 col-md-2">
		  			<img class="img-fluid" src="img/home/logo-aldeas.jpg" alt="logo aldeas">
		  		</div>
		  		<div class="col-12 col-md-2">
		  			<img class="img-fluid" src="img/home/logo-ba.jpg" alt="logo ba">
		  		</div>
		  	</div>
	  	</div>
	  </section>
	  <!-- Confian en Nosotros end -->

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