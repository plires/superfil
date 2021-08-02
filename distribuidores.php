<?php

  include('includes/config.inc.php');
  include_once('includes/soporte.php');

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
  <?php include_once("includes/tag_manager_head.php"); ?>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sección de Contacto - Molduras y perfiles plásticos. Perfiles plásticos - Perfiles por extrusión.">
	<title>Superfil - Molduras - Distribuidores</title>

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

  <section class="listado contacto distribuidores">

    <!-- Header -->
    <section class="header header_contacto container-fluid p-0">
      <div>
        <img class="img-fluid fondo" src="img/contacto/fondo-header.png" alt="fondo">
        <h1 data-aos="fade-right">DISTRIBUIDORES</h1>
      </div>
      <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
    </section>
    <!-- Header end -->

    <!-- Texto -->
    <section class="container texto">
      <div class="row">
        <div class="col-md-6 m-auto">
          <p data-aos="zoom-out-up">
            Listado de representantes y distribuidores de Superfil S.A. en el mercado americano.
          </p>
        </div>
      </div>
    </section>
    <!-- Texto end -->

    <!-- Distribuidores -->
    <section class="container tabla">
      <div class="row">

        <div class="col-md-12">

          <div class="content">
            <div class="banderas">
              <img class="img-fluid" src="./img/distribuidores/eeuu.png" alt="bandera eeuu">
            </div>

            <div class="logos">
              <img class="img-fluid" src="./img/distribuidores/summit.jpg" alt="logo summit">
            </div>
          </div>

          <div class="info">
            <p>
              <span>
              SUMMIT-PLASTIC TM <br>
              </span>
              ESTADOS UNIDOS <br>
              Télefonos: (305) 888 6324 <br>
              info@summit-plastic.net <br>
              www.summit-plastic.net
            </p>
          </div>

        </div>

        <div class="col-md-12">

          <div class="content">
            <div class="banderas">
              <img class="img-fluid" src="./img/distribuidores/uruguay.png" alt="bandera uruguay">
            </div>

            <div class="logos">
              <img class="img-fluid" src="./img/distribuidores/todomax.jpg" alt="logo todomax">
            </div>
          </div>

          <div class="info">
            <p>
              <span>
              TODOMAX SA <br>
              </span>
              Gral. Flores 2271 . Montevideo . CP 11500
              URUGUAY <br>
              Télefonos: (+598) 2208-1200 . (+598) 2208-8307 <br>
              todomax@todomax.com.uy <br>
              www.todomax.com.uy
            </p>
          </div>

        </div>

        <div class="col-md-12">

          <div class="content">
            <div class="banderas">
              <img class="img-fluid" src="./img/distribuidores/paraguay.png" alt="bandera paraguay">
            </div>

            <div class="logos">
              <img class="img-fluid" src="./img/distribuidores/hl.jpg" alt="logo hl">
            </div>
          </div>

          <div class="info">
            <p>
              <span>
              HL Distribuidora SRL Importaciones y Exportaciones <br>
              </span>
              Fray Luis De Bolaños 1029 <br>
              ASUNCION PARAGUAY <br>
              Télefonos: (00595) 21558190 <br>
              hldistribuidora@gmail.com
            </p>
          </div>

        </div>

        <div class="col-md-12">

          <div class="content">
            <div class="banderas">
              <img class="img-fluid" src="./img/distribuidores/chile.png" alt="bandera chile">
            </div>

            <div class="logos">
              <img class="img-fluid" src="./img/distribuidores/aldea.jpg" alt="logo aldea">
            </div>
          </div>

          <div class="info">
            <p>
              <span>
              ALDEA IDEAS <br>
              </span>
              Manuel Thompson 4378 . Estación Central <br>
              CHILE <br>
              Télefonos: (56 2) 764 2721 . (56 2) 779 2853 <br>
              ideas@aldeaideas.cl <br>
              www.aldeaideas.cl
            </p>
          </div>

        </div>

      </div>
    </section>
    <!-- Distribuidores end -->

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

          <h3>¿QUERÉS SER DISTRIBUIDOR?</h3>
          <form class="needs-validation" method="post" novalidate>
            
            <!-- Nombre -->
            <div class="mb-3">
              <label for="name" class="form-label">Nombre *</label>
              <input required type="text" class="form-control" name="name">
              <div class="invalid-feedback">
                Ingresá tu nombre
              </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email *</label>
              <input required type="email" class="form-control" name="email">
              <div class="invalid-feedback">
                Ingresá tu email
              </div>
            </div>

            <!-- Telefono -->
            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" name="phone">
            </div>

            <!-- Ciudad -->
            <div class="mb-3">
              <label for="city" class="form-label">Ciudad</label>
              <input type="text" class="form-control" name="city">
            </div>

            <!-- Comentarios -->
            <div class="mb-3">
              <label for="comments" class="form-label">Comentarios</label>
              <textarea class="form-control" name="comments"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">ENVIAR</button>
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
  <script src="node_modules/aos/dist/aos.js"></script>
	<script src="js/app.js"></script>
</body>
</html>