<!-- Galeria de imagenes start -->
<div class="container-fluid text-center mt-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="titulo_galeria">Galería de Imágenes</h2>
    </div>
  </div>
</div>

<section class="galeria slider-g">

  <?php if (!empty($galery_images)): ?>

    <?php foreach ($galery_images as $key => $galery_image): ?>
      
      <div>
        <img src="img/productos/<?= $galery_image['url']  ?>" alt="Galería - <?= $lines_extra['name'] ?> - <?= $galery_image['id']  ?>">
      </div>
      
    <?php endforeach ?>

  <?php endif ?>

</section>
<!-- Galeria de imagenes end -->