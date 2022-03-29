<?php
$destino= "miguellaguna51@gmail.com";
$Contacto="contact desde la web";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "nombre: " .$nombre . "\ncorreo: " . $correo . "\ntelefono:" .$telefono . "\nmensaje:" . $mensaje;
mail($destino,"Contacto", $contenido);
header('Location:/index.html');
?>
