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

      <?php
      // Ordeno el array productos por el campo destacados
      array_multisort(array_column($products, 'destacado'), SORT_DESC, $products);
      ?>

      <?php foreach ($products as $key => $product): ?>

        <!-- Destacar codigos 9017 y 9030 de cielorrasos -->
        <?php if ($product['code'] == '9017' || $product['code'] == '9030'): ?>

          <div data-aos="zoom-in" class="col-12 col-md-6 m-auto contenido">
            <img class="img-fluid" src="img/productos/<?= $product['img'] ?>" alt="<?= $product['title'] ?> - <?= $product['code'] ?>">
            <div class="background">
              <h2>CÓDIGO <br><?= $product['code'] ?></h2>
              <a href="<?= $product['line_rs'] .'/'. $product['url'] .'/'. $product['code'] . '.html'  ?>" class="btn btn-primary btn_destacado transition">VER</a>
            </div>
          </div>

        <?php else: ?>

          <div data-aos="zoom-in" class="col-6 col-md-4 col-lg-3 m-auto contenido">
            <img class="img-fluid" src="img/productos/<?= $product['img'] ?>" alt="<?= $product['title'] ?> - <?= $product['code'] ?>">
            <div class="background">
              <h2>CÓDIGO <br><?= $product['code'] ?></h2>
              <a href="<?= $product['line_rs'] .'/'. $product['url'] .'/'. $product['code'] . '.html'  ?>" class="btn btn-primary transition">VER</a>
            </div>
          </div>

        <?php endif ?>

      <?php endforeach ?>

      <!-- Icono Consulta -->
      <?php include('./includes/icono-consulta-producto.php'); ?>

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