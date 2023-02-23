<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$url="https://dominio.com/login";	
$correo="alanescudero014@gmail.com";
$pass="12345";
$nombre="Alan";
$body = "Hola $nombre, gracias por colaborar con está evaluación, la contraseña para ingresar es: $pass \n Ingresa la siguiente url para comenzar la evaluación: $url";

$body= str_replace("#URL#", $url, $body);
$body= str_replace("#USER#", $correo, $body);	
$body= str_replace("#PASS#", $pass, $body);	
$body= str_replace("#NAME#", $nombre, $body);	
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPSecure = "ssl";
$mail->SMTPAuth = true; 
$mail->Username = "2521180003ajescuderoa@gmail.com";
$mail->Password = "mpyhasgjvhhfoiom";
$mail->setFrom ('2521180003ajescuderoa@gmail.com', 'AIFA');
$mail->AddReplyTo ('2521180003ajescuderoa@gmail.com', 'AIFA');
$mail->Subject = utf8_decode('Acceso a Evaluación');
$mail->Body=$body;
$mail->AltBody=$body;
$mail->AddAddress($correo);
	if (!$mail->send()) {
			$envio="no";
		    echo "<li>Mailer Error: " . $mail->ErrorInfo;
		} else {
			$envio="si";
		echo "<li> Se envió correctamente";
		}
?>