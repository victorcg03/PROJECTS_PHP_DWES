<?php
  require_once "../vendor/autoload.php";
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  function enviarMail($destinatario, $asunto, $cuerpo){
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
      $mail->addAddress($destinatario);
      if ($mail->send()) {
        echo "El correo se ha enviado correctamente";
      }
    } catch (Exception $e) {
      echo "No se ha podido enviar el correo. Mailer Error: {$mail->ErrorInfo}";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    enviarMail($_POST["destinatario"], $_POST["asunto"], $_POST["mensaje"]);
  }
  
?>