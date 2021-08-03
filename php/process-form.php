<?php

  include('functions.php');
  include('../includes/config.inc.php');

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

	print_r($datos);

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
	  	include('./php/processForm.php');
	  } else {
	  	header("Location: ../contacto.php?name=$name&email=$email&comments=$comments&errors=" . urlencode(serialize($errors)) . "#error");
	  	exit;
	  }
	  
  } else {
  	//Robot
  	exit;
	} 