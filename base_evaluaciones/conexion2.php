<?php
$servidor = "localhost";
$usuario = "root";
$password = '';
$base = "phpavanzado";

$conexion = new mysqli($servidor, $usuario, $password, $base);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
