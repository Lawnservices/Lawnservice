<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST["mensaje"];

$destino = "mailto:LagunaLawnServices883@gmail.com?-subject=subject-text";
$Contacto = "contact desde la web";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;

mail($destino, $correo, $telefono, $mensaje);
header('Location:gracias.html');
?>
 