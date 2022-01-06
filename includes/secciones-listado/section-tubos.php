<!-- Header -->
<?php include('./includes/header-productos.php'); ?>

<!-- Texto -->
<section class="container description">
  <div class="row">
    <div class="col-md-6 m-auto">
      <p data-aos="zoom-out-up">
        <?= $lines_extra['description'] ?>
      </p>
    </div>
  </div>
</section>
<!-- Texto end -->

<!-- Icono PDF -->
<section class="container">
	<div class="row icono_pdf icono_pdf_tubos">
    <div class="col-md-12">
      <a title="descargá el catalogo de esta línea" target="_blank" rel="noopener noreferrer" href="catalogos/<?= $lines_extra['catalogo'] ?>">
        <img class="img-fluid transition" src="./img/productos/icono-pdf.png" alt="icono pdf">
      </a>
    </div>
  </div>
</section>
<!-- Icono PDF end -->

<!-- Listado Productos -->
<section class="container productos_listado">
  <div class="row">

    <?php if (empty($products)): ?>

      <div class="col-md-12">
        <p>No hay productos para mostrar.</p>
      </div>

    <?php else: ?>

		<div class="col-sm-4 tubos_col_4">
			<img class="img-fluid" src="./img/productos/tubos/peso.png" alt="bajo peso tubos de pvc">
			<h3>Bajo Peso</h3>
			<p>Muy bajo peso para la misma o mayor resistencia que otros compuestos.</p>
		</div>

		<div class="col-sm-4 tubos_col_4">
			<img class="img-fluid" src="./img/productos/tubos/costo.png" alt="bajo costo tubos de pvc">
			<h3>Bajo Costo</h3>
			<p>Economía de la mano de obra en el manipuleo y en las uniones.</p>
		</div>

		<div class="col-sm-4 tubos_col_4">
			<img class="img-fluid" src="./img/productos/tubos/instalacion.png" alt="alta resistencias tubos de pvc">
			<h3>Alta Resistencia</h3>
			<p>Resistente a ácidos y bases, lo que implica una durabilidad ilimitada de las instalaciones.</p>
		</div>

		<div class="col-md-12 tubos_disponibles">
			<img class="img-fluid" src="./img/productos/tubos/fondo-tubos.jpg" alt="tubos de pvc">
			<p><span>Disponible en diámetros de: </span> <br>de 310 mm a 2200 mm</p>
		</div>

    <?php endif ?>

  </div>

</section>
<!-- Listado Productos end -->

<!-- Necesitas Presupuesto? -->
<?php include('./includes/necesitas-presupuesto.php'); ?>

<!-- Galeria -->
<?php include('./includes/galeria-imagenes.php'); ?>

<!-- Newsletter -->
<?php include('./includes/newsletter.php'); ?>

<!-- Iconos -->
<?php include('./includes/iconos.php'); ?>



	
