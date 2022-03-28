<?php
$destino= "miguellaguna51@gmail.com";
$nombre= $_POST["nombre"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido = "nombre:". $nombre ."\ntelefono:".$telefono . "\nmensaje:" .$mensaje;
mail($destino,"contacto", $contenido);
header("location:index.html");
