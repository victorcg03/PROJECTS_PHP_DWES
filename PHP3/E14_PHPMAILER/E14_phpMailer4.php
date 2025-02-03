<?php
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function enviarMail($destinatario, $asunto, $cuerpo)
{
  $msg = "";
  if (array_key_exists('archivos', $_FILES)) {
    $mail = new PHPMailer();
    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.ionos.es';
      $mail->SMTPAuth = true;
      $mail->Username = '';
      $mail->Password = '';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;
      $mail->setFrom('', "Victor Corral");
      $mail->Subject = $asunto;
      $mail->Body = $cuerpo;
      for ($i=0; $i < count($_FILES['archivos']['tmp_name']); $i++) { 
        $mail->addAttachment($_FILES['archivos']['tmp_name'][$i], $_FILES['archivos']['name'][$i]);
      }
      $mail->addAddress($destinatario);
      if ($mail->send()) {
        $msg .= "El correo se ha enviado correctamente";
      } else {
        $msg .= "No se ha podido enviar el correo. Mailer Error:" . $mail->ErrorInfo;
      }
    } catch (Exception $e) {
      $msg .= "No se ha podido enviar el correo. Mailer Error:" . $mail->ErrorInfo;
    }
  } else {
    $msg .= 'No se han subido archivos';
  }
  echo $msg;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  enviarMail($_POST["destinatario"], $_POST["asunto"], $_POST["mensaje"]);
}
