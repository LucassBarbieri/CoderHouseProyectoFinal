<?php 
    $destinatario = 'administracion@finger.net.ar';
    $asunto = "Presupuesto: Fotografia/Imagen";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    $textarea = $_POST['textarea'];

    $header= "MENSAJE ENVIADO DESDE WWW.FINGER.NET.AR";
    $header.= "\n_________________________________________________";
    $mensajeCompleto = $textarea . "\n\n_________________________________________________" . "\nNombre: " . $nombre . "\nEmail: " . $email. "\nContacto: " . $contacto .  "\n_________________________________________________";

    mail ($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='./index.html'\",1000)</script>";
?>