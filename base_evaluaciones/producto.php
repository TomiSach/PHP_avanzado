<?php
class Producto {
    private $codigo;
    private $nombre;
    private $descripcion;
    private $precio;

    public function __construct($codigo, $nombre, $descripcion, $precio) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public static function listar_productos() {
        return [
            new Producto(1, "Silla gamer", "Si buscas confort y estilo esta silla es para vos", 10.00),
            new Producto(2, "Playstation 5 1Tb", "La mejor consola disponible en el mercado", 20.00),
            new Producto(3, "Notebool DELL G3", "Notebook potente", 30.00),
            // Agrega más productos según sea necesario
        ];
    }
}

?>



