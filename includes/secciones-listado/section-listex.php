<!-- Header -->
<section class="header header_listex container-fluid p-0">
  <div class="header_productos">
    <img data-aos="zoom-out-up" class="img-fluid" src="img/productos/<?= $lines_extra['img_header'] ?>" alt="header <?= $lines_extra['name'] ?>">
    <h1 data-aos="fade-right">LÍNEA <br><?= $lines_extra['h1'] ?></h1>
  </div>
  <img data-aos="zoom-out-up" class="img-fluid flecha" src="img/header/flecha.png" alt="flecha blanca">
</section>
<!-- Header end -->

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

      <!-- Icono Consulta -->
      <?php include('./includes/icono-consulta-producto.php'); ?>

    <?php endif ?>

  </div>
</section>
<!-- Listado Productos end -->

<!-- Faja Productos Ecológicos -->
<section class="container-fluid faja_ecologica">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div>
          <img class="img-fluid" src="img/productos/listex/icono-producto-ecologico.png" alt="icono producto ecologico">
          <h3>Producto <br>Ecológico</h3>
        </div>
        <p>
          Tenemos como premisa fabricar productos de calidad y que respeten el medioambiente por eso utilizamos materiales reciclados.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Faja Productos Ecológicos end -->

<!-- Necesitas Presupuesto? -->
<?php include('./includes/necesitas-presupuesto.php'); ?>

<!-- Galeria -->
<?php include('./includes/galeria-imagenes.php'); ?>

<!-- Newsletter -->
<?php include('./includes/newsletter.php'); ?>

<!-- Iconos -->
<?php include('./includes/iconos.php'); ?>