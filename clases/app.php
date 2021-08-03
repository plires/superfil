<?php
//incluimos la clase PHPMailer
require_once '../vendor/autoload.php';

use \DrewM\MailChimp\MailChimp;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  class App 
    {

      public function registerEmailInMailchimp($api, $listId, $data)
      {

        if (isset($data['newsletter']) != 'on') {
          return false;
        }

        if (isset($data['phone']) != '') {
          $phone = $data['phone'];
        } else {
          $phone = '-';
        }

        $MailChimp = new MailChimp($api);

        $result = $MailChimp->post("lists/$listId/members", [
          'email_address' => $data['email'],
          'status'        => 'subscribed',
          'merge_fields'    => [
              'FNAME'           => $data['name'],
              'MMERGE2'         => $data['origin'],
              'MMERGE3'         => $phone
          ]
        ]);

        return $result;
      }

      public function sendEmail($destinatario, $template, $post)
      {

        switch ($destinatario) {
          case 'Cliente':
            $emailDestino = EMAIL_RECIPIENT;
            if (isset($post['name'])) {
              $nameShow = $post['name'];
              $emailAddReplyTo = $post['email'];
              $emailBCC = EMAIL_BCC;
            } else {
              $nameShow = $post['email_newsletter'];
              $emailAddReplyTo = $post['email_newsletter'];
              $emailBCC = EMAIL_BCC;
            }
            $emailShow = EMAIL_SENDER;  // Mi cuenta de correo
            break;
          
          case 'Usuario':

            if (isset($post['email'])) {
              $emailDestino = $post['email'];
            } else {
              $emailDestino = $post['email_newsletter'];
            }

            $nameShow = NAME_SENDER_SHOW;
            $emailShow = EMAIL_RECIPIENT;  // Mi cuenta de correo
            $emailAddReplyTo = EMAIL_SENDER_SHOW;
            $emailBCC = '';
            break;
        }

        switch ($template) {
          case 'Contacto Cliente':
            include('../includes/emails/contacts/template-envio-cliente.inc.php'); // Cargo el contenido del email a enviar al cliente.
            $subject = 'Nueva consulta web.';
            break;
          
          case 'Contacto Usuario':
            include('../includes/emails/contacts/template-envio-usuario.inc.php'); // Cargo el contenido del email a enviar al usuario.
            $subject = 'Gracias por tu contacto.';
            break;

          case 'Newsletter Usuario':
            include('../includes/emails/newsletter/template-envio-usuario.inc.php'); // Cargo el contenido del email a enviar al usuario.
            $subject = 'Gracias por tu suscripción.';
            break;

          case 'Newsletter Cliente':
            include('../includes/emails/newsletter/template-envio-cliente.inc.php'); // Cargo el contenido del email a enviar al usuario.
            $subject = 'Nueva Suscripción al Newsletter.';
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
        
        if ($emailBCC != '') { // si no esta vacio el campo BCC
            $mail->addBCC($emailBCC, $subject); // Copia del email
          }

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );


        $exito = $mail->Send(); 
        
        if($exito){
            return true;
        } else {
            return false;
        }

      }

  }

?>