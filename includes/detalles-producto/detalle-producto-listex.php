<!-- Producto -->
<section class="container-fluid producto_detalle producto_detalle_listex">
  <div class="row">

    <div class="col-md-6 image">

      <div class="only_mobile">
        <h4>Productos / <?= $lines_extra['h1'] ?> / Código <?= $product['code'] ?></h4>
        <h2>código <?= $product['code'] ?></h2>
        <hr>
      </div>

      <?php /*
      <img 
        class="img-fluid" 
        src="img/productos/<?= $product['img'] ?>"
      alt="Producto linea - <?= $product['line_rs'] .'- Código: '. $product['code'] ?>"
      >
      */ ?>

      <!-- <hr class="only_desktop"> -->

      <img class="img-fluid" src="img/productos/<?= $product['img_t'] ?>"
        alt="Producto linea - <?= $product['line_rs'] .'- Código: '. $product['code'] ?>">
    </div>

    <div class="col-md-6 datos datos_listex">

      <div class="only_desktop">
        <h4>Productos / <?= $lines_extra['h1'] ?> / Código <?= $product['code'] ?></h4>
        <h2>código <?= $product['code'] ?></h2>
        <hr>
      </div>

      <div>
        <h3>Especificaciones:</h3>

        <!-- Material -->
        <?php if ($product['material']): ?>
        <p><span>Material:</span> <br><?= $product['material'] ?></p>
        <?php endif ?>

        <!-- Medidas -->
        <?php if ($product['measures']): ?>
        <p><span>Medida:</span> <br><?= $product['measures'] ?></p>
        <?php endif ?>

        <!-- Descripcion -->
        <?php if ($product['description']): ?>
        <p><span>Descripción:</span> <br><?= $product['description'] ?></p>
        <?php endif ?>

        <!-- Largo Standard -->
        <?php if ($product['longs']): ?>
        <p><span>Largo Standard:</span> <br><?= $product['longs'] ?></p>
        <?php endif ?>

        <!-- Colores -->
        <?php if ($product['color']): ?>
        <p><span>Colores:</span> <br><?= $product['color'] ?></p>
        <?php endif ?>

        <!-- Usos y Aplicaciones -->
        <?php if ($product['applications']): ?>
        <p><span>Usos y aplicaciones:</span> <br><?= $product['applications'] ?></p>
        <?php endif ?>

        <!-- Usos y Aplicaciones -->
        <?php if ($product['observations']): ?>
        <hr>
        <h3>Observaciones:</h3>
        <p><?= $product['observations'] ?></p>
        <?php endif ?>
      </div>

      <hr>
      <a class="volver transition" href="javascript:history.back()"><i class="fas fa-backward mr-5"></i>Volver</a>

    </div>

  </div>
</section>
<!-- Producto end -->