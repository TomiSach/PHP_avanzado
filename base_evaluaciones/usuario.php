<?php
include 'conexion.php';

class Usuario
{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function registrar($email, $clave)
    {
        $claveEncriptada = password_hash($clave, PASSWORD_BCRYPT);

        $stmt = $this->conexion->prepare("INSERT INTO registro (email, clave) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $claveEncriptada);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function verificar($email, $clave)
{
    $consulta = mysqli_query($this->conexion, "SELECT clave FROM registro WHERE email = '$email'");
    if (!$consulta) {
        die("Error en la consulta: " . mysqli_error($this->conexion));
    }

    $codificado = mysqli_fetch_assoc($consulta);

    // Depurar: Mostrar lo que devuelve la consulta
    var_dump($codificado); // Asegúrate de que $codificado tenga datos

    if ($codificado) {
        $verificar = password_verify($clave, $codificado['clave']);
        return $verificar;
    } else {
        return false; // Email no encontrado en la base de datos
    }
}


}
