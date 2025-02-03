<?php
require_once "../vendor/autoload.php";
require_once "E14_devuelve.php";
require_once "E14_encripta.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$config = require 'E14_devuelve.php';
$email_password = encriptar($config["EMAIL_PASSWORD"]);

$mail = new PHPMailer();
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.ionos.es';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = "";
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('', "Victor Corral");
    $mail->Subject = "Tu contraseña";
    $mail->Body = "Tu contraseña encriptada es: $email_password";
    $mail->addAddress("victorjosecorralguillot@gmail.com");

    if ($mail->send()) {
        echo "El correo se ha enviado correctamente";
    } else {
        echo "No se ha podido enviar el correo: " . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    echo "No se ha podido enviar el correo. Mailer Error: " . $mail->ErrorInfo;
}
?>
