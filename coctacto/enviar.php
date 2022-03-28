<?php
$destino= "miguellaguna51@gmail.com";
$name= $_POST["name"];
$phone= $_POST["phone"];
$message= $_POST["message"];

$contenido = "name:". $name . "\nphone:".$phone .  "\nmessage:" .$message;
mail($destino,"contacto", $contenido);
header("location:/index.html");
?>
