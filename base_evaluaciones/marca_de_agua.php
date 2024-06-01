<?php
$image = 'base_evaluaciones/imagenes/f1.jpg';
$marca_agua = 'base_evaluaciones/imagenes/marca.png';
$img = imagecreatefrompng($marca_agua);
$ext = substr($image, -3);
$ext = mb_strtolower($ext);

switch ($ext) {
    case 'gif':
        $img2 = imagecreatefromgif($image);
        break;
    case 'jpg':
        $img2 = imagecreatefromjpeg($image);
        break;
    case 'JPG':
        $im2 = imagecreatefrompng($image);
        break;
}

imagecopy($img2, $img, (imagesx($img2) / 2), (imagesy($img2) / 2), (imagesx($img) / 2), (imagesy($img) / 2), (imagesx($img) / 2), imagesy($img) );
header('Content-type: image/jpeg');
imagejpeg($img2);
imagedestroy($img);
imagedestroy($im2);
?>