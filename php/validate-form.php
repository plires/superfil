<?php

  include('functions.php');
  include('../includes/config.inc.php');
  include('../clases/app.php');
  
  require_once("../clases/repositorioSQL.php");

  $db = new RepositorioSQL();

	$token = $_POST['token'];
	$action = $_POST['action'];

	$cu = curl_init();
	curl_setopt($cu, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($cu, CURLOPT_POST, 1);
	curl_setopt($cu, CURLOPT_POSTFIELDS, http_build_query(array('secret' => RECAPTCHA_KEY_SECRET, 'response' => $token)));
	curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($cu);
	curl_close($cu);

	$datos = json_decode($response, true);

	if($datos['success'] == 1 && $datos['score'] >= 0.5){

		// Verificamos si hay errores en el formulario
	  if (emptyInput($_POST['name'])){
	    $errors['error_name']='Ingresa tu nombre';
	  } else {
	    $name = $_POST['name'];
	  }

	  if (!emailCheck($_POST['email'])){
	    $errors['error_email']='Ingresa el mail :(';
	  } else {
	    $email = $_POST['email'];
	  }

	  if (emptyInput($_POST['comments'])){
	    $errors['error_comments']='Ingresa tu comentario';
	  } else {
	    $comments = $_POST['comments'];
	  }

	  if (!isset($errors)) {
	  	
	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveInBDD($_POST);

		  //Enviamos los mails al cliente y usuario
		  $app = new App;

		  // Registramos en Mailchimp el contacto
		  // $app->registerEmailInMailchimp(API_KEY_MAILCHIMP, LIST_ID, $_POST);

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

	  } else {
	  	header("Location: ../contacto.php?name=$name&email=$email&comments=$comments&errors=" . urlencode(serialize($errors)) . "#error");
	  	exit;
	  }
	  
  } else {
  	//Robot
  	exit;
	} 