<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$comentario = $_POST['comentario'];
$fecha_comentario = date("y-m-d ");
$hora_comentario = date("H:i:s");

$archivo = fopen("ejemplo1.txt", "a");

// Concatenar cadenas con saltos de línea
$contenido = "Nombre: " . $nombre . "\n" .
             "Email: " . $mail . "\n" .
             "Comentario: " . $comentario . "\n" .
             "Fecha comentario: " . $fecha_comentario . "\n".
             "Hora: " . $hora_comentario . "\n".
             "<hr />" ."\n";
        
fputs($archivo, $contenido);
fclose($archivo);

header("Location: unidad3.php?ficha_creada=true");
exit();
?>
