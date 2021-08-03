<?php

	include_once('../includes/soporte.php');

	//grabamos en la base de datos
  $save = $db->getRepositorioContacts()->saveInBDD($_POST);
  exit;

  //Enviamos los mails al cliente y usuario
  $app = new App;

  // Registramos en Mailchimp el contacto
  $app->registerEmailInMailchimp(API_KEY_MAILCHIMP, LIST_ID, $_POST);

  $sendClient = $app->sendEmail('Cliente', 'Contacto Cliente', $_POST);
  $sendUser = $app->sendEmail('Usuario', 'Contacto Usuario', $_POST);

  if ($sendClient) {
    // Redirigimos a la pagina de gracias
    ?>
    <script type="text/javascript">
    window.location= 'gracias.php';
    </script>
    <?php
  } else {
    exit('Error al enviar la consulta, por favor intente nuevamente');
  }
	
	echo "<pre>";
	var_dump($_POST);

?>