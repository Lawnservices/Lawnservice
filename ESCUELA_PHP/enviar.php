<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST["mensaje"];

$destino = "LagunaLawnServices883@gmail.com";
$Contacto = "contact desde la web";

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono:" . $telefono . "\nMensaje:" . $mensaje;

mail($destino, $correo, $telefono, $mensaje);
 echo "<script>alert('correo enviado exitosamente')</scrip>";
 echo "<script>setTimeout(\"location.href=contacte.html'\",1000)</script>";
?>
 