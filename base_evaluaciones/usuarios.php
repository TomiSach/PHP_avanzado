<?php
class Usuario {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    public function __construct($nombre, $apellido, $fecha_nacimiento) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    private function calcular_edad() {
        $fecha_nacimiento = new DateTime($this->fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento)->y;
        return $edad;
    }

    public function imprime_caracteristicas() {
        $edad = $this->calcular_edad();
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Edad: " . $edad . " años<br>";
    }
}
?>
