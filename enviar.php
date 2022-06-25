<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['textarea'];

$mensaje .= "\r\n" . "\r\n" . "Este mensaje fue enviado por: " . $nombre . "\r\n";
$mensaje .= "Su email es: " . $email . "\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'lucas.barbieri.f@gmail.com';
$asunto = 'Pagina de contacto';

$header .= "Content-Type: text/plain";

mail($para, $asunto, utf8_decode($mensaje), $header);

header('location:mensaje-enviado.html');

?>