<!-- Header -->
<?php include('./includes/header-productos.php'); ?>

<!-- Texto -->
<?php include('./includes/texto-descripcion-lineas.php'); ?>

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

            <a href="<?= $product['line_rs'] .'/'. $product['url'] .'/'. $product['code'] . '.html'  ?>" class="btn btn-primary transition">VER</a>

          </div>
        </div>

      <?php endforeach ?>

    <?php endif ?>

  </div>

</section>
<!-- Listado Productos end -->

<!-- Section Consultar Otros Productos Iluminacion -->
<section class="otros_productos_iluminacion container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h5>Consultá por nuevos modelos</h5>
        <p>
          Nuestras líneas están en constante actualización para brindar soluciones a todos los requerimientos del mercado incorporando nuevos productos constantemente.
        </p>
        <a href="./contacto" class="btn btn-primary">CONSULTAR</a>
      </div>
    </div>
  </div>
</section>
<!-- Section Consultar Otros Productos Iluminacion end -->

<!-- Necesitas Presupuesto? -->
<?php include('./includes/necesitas-presupuesto.php'); ?>

<!-- Galeria -->
<?php include('./includes/galeria-imagenes.php'); ?>

<!-- Newsletter -->
<?php include('./includes/newsletter.php'); ?>

<!-- Iconos -->
<?php include('./includes/iconos.php'); ?>