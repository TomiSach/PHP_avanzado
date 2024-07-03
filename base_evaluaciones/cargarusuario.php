<?php

//$clave = password_hash($_POST['clave'],PASSWORD_DEFAULT, array('cost'=>4));

$clave = $_POST['clave'];

$email = $_POST['email'];

include ("conexion.php");
mysqli_query($datos_db, "INSERT INTO registro  values ('$email', '$clave')");



header("Location: unidad8.php?reg_ok");



?>