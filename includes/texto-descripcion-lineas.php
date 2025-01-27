<!-- Texto -->
<section class="container description">
  <div class="row">
    <div class="col-md-6 m-auto">
      <p data-aos="zoom-out-up">
        <?= $lines_extra['description'] ?>
      </p>
    </div>
  </div>

  <?php if ($lines_extra['catalogo'] != NULL) : ?>
  <div class="row icono_pdf">
    <div class="col-md-12">
      <a title="descargá el catalogo de esta línea" target="_blank" rel="noopener noreferrer"
        href="catalogos/<?= $lines_extra['catalogo'] ?>">
        <img class="img-fluid transition" src="./img/productos/icono-pdf.png" alt="icono pdf">
      </a>
    </div>
  </div>
  <?php endif ?>

</section>
<!-- Texto end -->