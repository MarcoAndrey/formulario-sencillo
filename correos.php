<?php

$destinatario = 'millospuma08@gmail.com';
$nombre =_POST['nombre'];
$asunto =_POST['asunto'];
$mensaje =_POST['mensaje'];
$email =_POST['email'];

$header = "Enviado desde la pagina Marco Andrey";
$mensajecompleto = $mensaje . "\nAtentamente" . $nombre;

mail($destinatario, $asunto, $mensajecompleto, header);
echo "<script>alert('CORREO ENVIADO EXITOSAMENTE')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>