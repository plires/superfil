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

	  if (!emailCheck($_POST['email_newsletter'])){
	    $errors_newsletter = 'Ingresa el mail :(';
	  } else {
	    $email_newsletter = $_POST['email_newsletter'];
	  }

	  if (!isset($errors_newsletter)) {
	  	
	  	//grabamos en la base de datos
		  $save = $db->getRepoContacts()->saveNewsletterInBDD($_POST);

		  //Enviamos los mails al cliente y usuario
		  $app = new App;

		  // Registramos en Mailchimp el contacto
		  $app->registerNewsletterInMailchimp(API_KEY_MAILCHIMP, LIST_ID, $_POST);

		  $sendClient = $app->sendEmail('Cliente', 'Newsletter Cliente', $_POST);
		  $sendUser = $app->sendEmail('Usuario', 'Newsletter Usuario', $_POST);

		  if ($sendClient) {
		    $msg_newsletter = 'Gracias por tu suscripción';
		    $url = explode("?",$_SERVER['HTTP_REFERER']);

		    header("Location: " . $url[0] ."?msg_newsletter=". urlencode($msg_newsletter) . "#msg_newsletter" );
		  } else {
		    exit('Error al enviar la consulta, por favor intente nuevamente');
		  }

	  } else {
	  	$url = explode("?",$_SERVER['HTTP_REFERER']);

	  	header("Location: " . $url[0] . "?email_newsletter=$email_newsletter&errors_newsletter=$errors_newsletter#error_newsletter");
	  	exit;
	  }
	  
  } else {
  	//Robot
  	exit;
	} 