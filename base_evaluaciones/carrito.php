<?php
class Carrito {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function introducir_compra($codigo, $producto, $descripcion, $precio) {
        $query = "INSERT INTO compras (codigo, producto, descripcion, precio) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("issd", $codigo, $producto, $descripcion, $precio);
        $stmt->execute();
        $stmt->close();
    }

    public function eliminar_compra($id_compra) {
        $query = "DELETE FROM compras WHERE id_compra = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id_compra);
        $stmt->execute();
        $stmt->close();
    }

    public function listar_compra() {
        $query = "SELECT id_compra, codigo, producto, descripcion, precio FROM compras";
        $resultados = $this->conexion->query($query);

        if (!$resultados) {
            throw new mysqli_sql_exception($this->conexion->error);
        }

        $compras = [];
        while ($row = $resultados->fetch_assoc()) {
            $compras[] = $row;
        }

        return $compras;
    }
}

?>

