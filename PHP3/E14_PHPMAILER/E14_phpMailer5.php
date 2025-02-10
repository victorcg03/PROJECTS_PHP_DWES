<?php
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  $usuarios = ["victorjosecorralguillot@gmail.com", "victor.cor.gui@gmail.com", "victor.corral.guillot@gmail.com"];
  $asunto = "Prueba de envío de correo con PHPMailer";
  $cuerpo = "Este es un mensaje de prueba de envío de correo con PHPMailer y archivos adjuntos";
  $archivos = [["nombre" => "E14_phpMailer5.php", "ruta" =>"./E14_phpMailer5.php"], ["nombre" => "E14_phpMailer4.php", "ruta" => "./E14_phpMailer4.php"], ["nombre" => "E14_phpMailer3.php", "ruta" => "./E14_phpMailer3.php"]];
  foreach ($usuarios as $usuario) {
    $mail = new PHPMailer();
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
      foreach ($archivos as $archivo) {
        $mail->addAttachment($archivo["ruta"], $archivo["nombre"]);
      }
      $mail->addAddress($usuario);
      if ($mail->send()) {
        echo "El correo se ha enviado correctamente a " . $usuario . "<br>";
      } else {
        echo "No se ha podido enviar el correo a $usuario. Mailer Error:" . $mail->ErrorInfo . "<br>";
      }
  }
?>