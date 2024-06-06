<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $consulta = $_POST['consulta'];
    $codigo = $_POST['codigo'];
    include("conexion.php");

    if ($codigo === $_SESSION['captcha']) {
        header("Location: unidad5.php?ok");
        mysqli_query($datos_db, "INSERT INTO consulta  values ('$nombre', '$apellido', '$mail', '$consulta')");
    } else {
        header("Location: unidad5.php?error");
    }
}
