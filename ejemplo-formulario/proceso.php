<?php
/* Set e-mail recipient */
$myemail  = "santiav@gmail.com";

$ip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

// Tomar datos del formulario, segun los campos, que deben coincidir con lo q tenemos en contacto.html
$subject .= "Asunto, por ej, contacto desde mi pagina web";

// Los campos
$nombre = $_REQUEST['nombre'] ;
$apellido = $_REQUEST['apellido'] ;
$email = $_REQUEST['email'] ;  
$comentario = $_REQUEST['comentario'] ; 

/* Poner que información aparecerá en el email, veran que toma las variables depende lo que configuramos mas arriba */
$message = "Contacto desde mi pagina web:

Nombre: $nombre
Apellido: $apellido
E-Mail: $email

Comentario:
 $comentario

";

// El resto dejarlo como está!
//direcci&oacute;n del remitente 
$headers = "From: $nombre <$email>\r\n"; 

//direcci&oacute;n de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: $email\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: $email\r\n"; 

/* Send the message using mail() function */
// mail($myemail, "Presupuesto solicitado desde SantiagoAV", $message, $headers);
mail($myemail, $subject, $message, $headers);

/* Acá podemos modificar que una vez enviado el mail, ir a otro html, por ej de gracias */
header('Location: gracias.html');
exit();