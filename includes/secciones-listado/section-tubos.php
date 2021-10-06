<!-- Header -->
<section class="header container-fluid p-0">
  <div class="header_productos">
    <img data-aos="zoom-out-up" class="img-fluid" src="img/productos/<?= $lines_extra['img_header'] ?>" alt="header <?= $lines_extra['name'] ?>">
    <h1 data-aos="fade-right">LÍNEA <br><?= $lines_extra['h1'] ?></h1>
  </div>
  <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
</section>
<!-- Header end -->

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




	
