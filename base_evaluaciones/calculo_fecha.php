<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$dia = $_POST["dia"];
$mes = $_POST["mes"];
$anio = $_POST["anio"];
$fecha_ingresada = ("$anio-$mes-$dia");
$fecha_hoy = date("y-m-d");


$calculo =  strtotime($fecha_ingresada) - strtotime($fecha_hoy);

$dias = intval($calculo/86400);

header("Location: unidad2.php?dias=$dias&fecha=$fecha_ingresada");





?>