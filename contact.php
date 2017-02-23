<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "This message was sent by " . $name . " \r\n";
$mensaje .= "The E-mail is: " . $mail . " \r\n";
$mensaje .= "Message: " . $message . " \r\n";
$mensaje .= "Date: " . date('d/m/Y', time());

$$asunto = 'BENCOD - Cantact for Web Developer & Design';
para = 'benvalencia290@gmail.com';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>