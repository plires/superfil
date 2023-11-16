<?php
//incluimos la clase PHPMailer
require_once '../vendor/autoload.php';
require '../clases/mailchimp.php';

use \DrewM\MailChimp\MailChimp;
use \DrewM\MailChimp\Batch;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

  class App 
    {

      public function registerNewsletterInMailchimp($api, $listId, $data)
      {

        $date = date("d-M-y H:i");

        if (isset($data['name']) != '') {
          $name = $data['name'];
        } else {
          $name = 'Suscriptor web';
        }

        $MailChimp = new MailChimpClient($api);

        // Alta
        $result = $MailChimp->subscribe([
          'listId'                => $listId, 
          'email'                 => $data['email_newsletter'], 
          'status'                => 'subscribed',
          'first_name'            => $name,
          'observations'          => 'Inscripto desde newsletter web ' . $date,
          'interests'             => 'Todos',
          'reference'             => 'Superfil'
        ], GRUPO_TODOS_SUPERFIL);

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

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = $smtpHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $user;
        $mail->Password   = $pass;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = EMAIL_PORT;
        $mail->isHTML(true);
        $mail->CharSet = EMAIL_CHARSET;
        
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

        // $mail->SMTPOptions = array(
        //     'ssl' => array(
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     )
        // );


        $exito = $mail->Send(); 
        
        if($exito){
            return true;
        } else {
            return false;
        }

      }

  }

?>