<?php
include 'Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = ($_POST['email']);
    $clave = ($_POST['clave']);

    $usuario = new Usuario($datos_db);
    if ($usuario->verificar($email, $clave)) {
        header("Location: unidad8.php?acc_ok");
        exit();
    } else {
        header("Location: unidad8.php?acc_error");
        exit();
    }
}
?>



