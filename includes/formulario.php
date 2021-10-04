<!-- Formulario -->
<section class="container-fluid formulario">
  <div class="row">
    <div data-aos="fade-right" class="col-lg-6">
      <img class="img-fluid" src="img/contacto/varios.jpg" alt="almacen superfil">
    </div>
    <div data-aos="fade-left" class="col-lg-4">

      <h3>¿QUERÉS SER DISTRIBUIDOR?</h3>

      <!-- Mensaje Exito -->
      <?php if (isset($msg_contacto)): ?>
        <div id="msg_contacto" class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>¡Datos recibidos!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <ul style="padding: 0;">
              <li>- <?php echo $msg_contacto; ?></li>
          </ul>
        </div>
      <?php endif ?>
      <!-- Mensaje Exito end -->

      <!-- Errores Formulario -->
      <?php if ($errors): ?>

        <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>¡Por favor verificá los datos!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          <ul style="padding: 0;">
            <?php foreach ($errors as $error) { ?>
              <li>- <?php echo $error; ?></li>
            <?php } ?>
          </ul>
        </div>

      <?php endif ?>
      <!-- Errores Formulario end -->

      <form id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

        <input name="origin" type="hidden" value="Formulario de Distribuidores">
        
        <!-- Nombre -->
        <div class="mb-3">
          <label for="name" class="form-label">Nombre *</label>
          <input required type="text" class="form-control" value="<?= $name ?>" name="name">
          <div class="invalid-feedback">
            Ingresá tu nombre
          </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email *</label>
          <input required type="email" class="form-control" value="<?= $email ?>" name="email">
          <div class="invalid-feedback">
            Ingresá tu email
          </div>
        </div>

        <!-- Telefono -->
        <div class="mb-3">
          <label for="phone" class="form-label">Teléfono</label>
          <input type="tel" class="form-control" value="<?= $phone ?>" name="phone">
        </div>

        <!-- Ciudad -->
        <div class="mb-3">
          <label for="city" class="form-label">Ciudad</label>
          <input type="text" class="form-control" value="<?= $city ?>" name="city">
        </div>

        <!-- Comentarios -->
        <div class="mb-3">
          <label for="comments" class="form-label">Comentarios *</label>
          <textarea required class="form-control" name="comments"><?= $comments ?></textarea>
          <div class="invalid-feedback">
            Ingresá tu comentario
          </div>
        </div>

        <button type="button" id="send" class="btn btn-primary">ENVIAR</button>

      </form>

    </div>
  </div>
</section>
<!-- Formulario Header end -->