<?php
//session_start();

$clase = $_POST["clase"];

$fecha = $_POST["fecha"];

include ("conexion.php");
mysqli_query($datos_db, "INSERT INTO clases  values (default,'$clase', '$fecha')");

header('Location: unidad1.php?ok_load');


?>