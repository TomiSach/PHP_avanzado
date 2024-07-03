<?php

include ('conexion.php');

$clave = $_POST['clave'];

$email = $_POST['email'];


$consulta = mysqli_query($datos_db, "SELECT contrasenia FROM registro WHERE email = '$email'");

$codificado = mysqli_fetch_assoc($consulta);
$verificar = password_verify($clave, $codificado['clave']);

if ($verificar) {
    header("Location: unidad8.php?pass_ok");
} else {
    header("Location: unidad8.php?pass_error");
}
?>