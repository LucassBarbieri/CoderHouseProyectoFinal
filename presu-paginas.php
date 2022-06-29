<?php 
    $destinatario = 'administracion@finger.net.ar';
    $asunto = "Presupuesto: Pagina web";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contacto = $_POST['contacto'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $textarea = $_POST['textarea'];

    $header= "MENSAJE ENVIADO DESDE WWW.FINGER.NET.AR";
    $header.= "\n_________________________________________________";
    $mensajeCompleto = $textarea . "\n\n_________________________________________________" . "\nNombre: " . $nombre . "\nEmail: " . $email. "\nContacto: " . $contacto . "\nUsuario: " . $usuario . "\nContraseña: " . $contraseña .  "\n_________________________________________________";

    mail ($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='./index.html'\",1000)</script>";
?>