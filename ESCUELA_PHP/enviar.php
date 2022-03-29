<?php
 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST["mensaje"];

$destino = "miguellaguna51@gmail.com";
$Contacto = "contact desde la web";

$contenido = "Nombre: " .$nombre . "\nCorreo: " . $correo . "\nTelefono:" .$telefono . "\nMensaje:". $mensaje;

mail($destino,"Contacto", $contenido);
header('Location:gracias.html');
?>
