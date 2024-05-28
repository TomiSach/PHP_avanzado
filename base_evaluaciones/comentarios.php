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


header("Location: unidad3.php?ficha_creada");

?>
