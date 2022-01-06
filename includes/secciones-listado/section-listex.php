<!-- Header Listex -->
<?php include('./includes/header-productos-listex.php'); ?>

<!-- Logo Listex -->
<section class="container logo_listex">
  <div class="row">
    <div class="col-md-12 text-center">
      <img class="img-fluid" src="./img/productos/listex/logo-listex.jpg" alt="logo listex">
    </div>
  </div>
</section>
<!-- Logo Listex end -->

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

      <!-- Icono no encontras tu producto -->
      <div data-aos="zoom-in" class="col-6 col-md-4 col-lg-3 m-auto contenido">
        <img class="img-fluid" src="img/productos/icono-consulta.png" alt="icono de consulta">
        <div class="background">
          <h2 class="no_encontras_producto">¿NO ENCONTRÁS EL PRODUCTO QUE BUSCABAS?</h2>
          <a href="./contacto.php" class="btn btn-primary transition">CONSULTAR</a>
        </div>
      </div>
      <!-- Icono no encontras tu producto end -->

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