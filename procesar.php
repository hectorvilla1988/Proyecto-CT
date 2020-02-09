<?php
$destino= "ceciliatirado@plenamente.com.pe"

$nombre = $_GET["nombre"]
$correo = $_GET["correo"]
$telefono = $_GET["telefono"]
$mensaje = $_GET["mensaje"]
$contenido = "Nombre: ".$nombre. "\nCorreo:" .$correo . "\nTelefono": " .$telefono . "\nMensaje:" .$mensaje;

mail($destino, "Contacto", $contenido);
header("Location:mensaje.html");

?>