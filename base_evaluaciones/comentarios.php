<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre =$_POST['nombre'];
$mail =$_POST['mail'];
$comentario =$_POST['comentario'];
$fecha_comentario = date("y-m-d H:i:s");

$archivo = fopen("ejemplo1.txt","a");
$contenido = "<h2> Nombre:".$nombre.' Email: '.$mail.' Comentario: '.$comentario.' Fecha comentario: '.$fecha_comentario."</h2> <hr/>";
fputs($archivo,$contenido);
fclose($archivo);

$file_content = file_get_contents("ejemplo1.txt");

$encoded_content = urlencode($file_content);

header("Location: unidad3.php?file_content=$encoded_content&ficha_creada=true");

?>
