<?php

$src_img = imagecreatefromjpeg("imagenes\auto.jpg"); //guardamos imagen a trasnformar

$alto = imagesy($src_img)/8;

$ancho = imagesx($src_img)/8;

$dst_img = imagecreatetruecolor($ancho, $alto);

$imagen = imagecreate($ancho, $alto);

imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));

imagejpeg($dst_img, "imagenes/auto_thumb.jpg");

imagedestroy($dst_img);



?>