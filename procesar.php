<?php

$destino= "ceciliatirado@plenamente.com.pe";
$nombre = $_POST ["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " .$nombre. "\nCorreo:" .$correo. "\nTeléfono:" .$telefono. "\nMensaje:" .$mensaje;

mail($destino, "Contacto", $contenido);

header("Location:mensaje.html")

?>