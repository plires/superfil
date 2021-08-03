<?php

  if (isset($_GET['email_newsletter'])) {
    $email_newsletter = $_GET['email_newsletter'];
  } else {
    $email_newsletter = '';
  }

  if (isset($_GET['errors_newsletter'])) {
    $errors_newsletter = $_GET['errors_newsletter'];
  }

  if (isset($_GET['msg_newsletter'])) {
    $msg_newsletter = $_GET['msg_newsletter'];
  }  

?>

<!-- Newsletter -->
<section class="newsletter container-fluid">
	<div  data-aos="fade-right" class="container">
  	<div class="row">

  		<div class="col-md-6">
  			<p class="pt">Enterate de todas las novedades.</p>
  		</div>

  		<div class="col-md-6">
  			<form id="form-newsletter" action="./php/validate-form-newsletter.php" method="post" class="needs-validation formcito" novalidate>

          <!-- Msg Exito Newsletter -->
          <?php if (isset($msg_newsletter)): ?>

            <div id="msg_newsletter" class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>¡Recibido!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <ul style="padding: 0;">
                <li>- <?php echo $msg_newsletter; ?></li>
              </ul>
            </div>

          <?php endif ?>
          <!-- Msg. Exito Newsletter end -->

          <!-- Errores Formulario -->
          <?php if (isset($errors_newsletter)): ?>

            <div id="error_newsletter" class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>¡Por favor verificá los datos!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <ul style="padding: 0;">
                <li>- <?php echo $errors_newsletter; ?></li>
              </ul>
            </div>

          <?php endif ?>
          <!-- Errores Formulario end -->

  				<div class="content_inputs">
            <input 
              required
              type="email" 
              placeholder="Email" 
              aria-label="Email" 
              class="form-control" 
              value="<?= $email_newsletter ?>" 
              name="email_newsletter"
            >
            <button id="send_newsletter" type="button" class="btn btn-primary">ENVIAR</button>
            <div class="invalid-feedback">
              Ingresá tu email
            </div>
  				</div>

  			</form>
  		</div>

  	</div>
	</div>
</section>
<!-- Newsletter end -->