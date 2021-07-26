<?php

  class App 
  {

    public function sendEmail($destinatario, $template, $post)
    {

      switch ($destinatario) {
        case 'Cliente':
          $emailDestino = EMAIL_RECIPIENT;
          if (isset($post['name'])) {
            $nameShow = $post['name'];
            $emailAddReplyTo = $post['email'];
          } else {
            $nameShow = $post['email'];
            $emailAddReplyTo = $post['email'];
          }
          $emailShow = EMAIL_SENDER;  // Mi cuenta de correo
          break;
        
        case 'Usuario':
          $emailDestino = $post['email'];
          $nameShow = NAME_SENDER_SHOW;
          $emailShow = EMAIL_RECIPIENT;  // Mi cuenta de correo
          $emailAddReplyTo = EMAIL_SENDER_SHOW;
          break;

        case 'UsuarioEncuesta':
          $emailDestino = EMAIL_RECIPIENT;
          $nameShow = NAME_SENDER_SHOW;
          $emailShow = EMAIL_SENDER_SHOW;  // Mi cuenta de correo
          $emailAddReplyTo = EMAIL_SENDER_SHOW;
          break;
      }

      switch ($template) {
        case 'Contacto Cliente':
          include('includes/emails/contacts/template-envio-cliente.inc.php'); // Cargo el contenido del email a enviar al cliente.
          $subject = 'Nueva consulta web.';
          break;
        
        case 'Contacto Usuario':
          include('includes/emails/contacts/template-envio-usuario.inc.php'); // Cargo el contenido del email a enviar al usuario.
          $subject = 'Gracias por tu contacto.';
          break;

        case 'Newsletter Cliente':
          include('includes/emails/newsletter/template-newsletter-cliente.inc.php'); // Cargo el contenido del email a enviar al cliente.
          $subject = 'Nueva suscripción newsletter.';
          break;

        case 'Newsletter Usuario':
          include('includes/emails/newsletter/template-newsletter-usuario.inc.php'); // Cargo el contenido del email a enviar al cliente.
          $subject = 'Gracias por suscribirte.';
          break;
          
        case 'Encuesta Cliente':
          include('includes/emails/suggestions/template-suggestions-cliente.inc.php'); // Cargo el contenido del email a enviar al cliente.
          $subject = 'Nueva sugerencia o reclamo de usuario.';
          break;
      }

      // Datos de la cuenta de correo utilizada para enviar vía SMTP
      $smtpHost = SMTP;  // Dominio alternativo brindado en el email de alta 
      $user = EMAIL_SENDER;  // Mi usuario
      $pass = EMAIL_PASS;  // Mi contraseña

      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->Port = EMAIL_PORT; 
      $mail->IsHTML(true); 
      $mail->CharSet = EMAIL_CHARSET;

      $mail->Host = $smtpHost; 
      $mail->Username = $user; 
      $mail->Password = $pass;

      $mail->From = $emailShow; // Email desde donde envío el correo.
      $mail->FromName = $nameShow; // Nombre para mostrar en el envío del correo.
      $mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
      $mail->AddReplyTo($emailAddReplyTo); // Esto es para que al recibir el correo y poner Responder, lo haga a la cuenta del visitante. 
      $mail->Subject = $subject; // Este es el asunto del email.
      // $mensajeHtml = nl2br($body);
      $mail->Body = $body; // Texto del email en formato HTML
      // FIN - VALORES A MODIFICAR //

      $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      );
      
      // echo "<pre>";
      // $mail->SMTPDebug  = 2;

      $exito = $mail->Send(); 
      if($exito){
          return true;
      } else {
          return false;
      }

    }

  }

?>