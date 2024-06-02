<?php
$image = 'imagenes/hoja_blanca.jpg';
$marca_agua = 'imagenes/marca.png';
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

$img2_width = imagesx($img2);
$img2_height = imagesy($img2);
$img_width = imagesx($img);
$img_height = imagesy($img);
imagecopy
imagecopy($img2, $img, ($img2_width / 2) - ($img_width / 2), ($img2_height / 2) - ($img_height / 2), 0, 0, $img_width, $img_height);
header('Content-type: image/jpeg');
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>