<?php
session_start();
require_once 'conexion2.php'; // Incluir el archivo de conexión

require_once 'Producto.php'; // Incluir la clase Producto
require_once 'Carrito.php'; // Incluir la clase Carrito

$carrito = new Carrito($conexion); // Instanciar el carrito pasando la conexión

// Procesar la acción de comprar o eliminar
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['comprar'])) {
        $codigo = $_POST['codigo'];
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        
        $carrito->introducir_compra($codigo, $producto, $descripcion, $precio);
    } elseif (isset($_POST['eliminar'])) {
        $id_compra = $_POST['id_compra'];
        $carrito->eliminar_compra($id_compra);
    }
}

$productos = Producto::listar_productos(); // Obtener lista de productos estáticos
$compras = $carrito->listar_compra(); // Obtener contenido del carrito
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css">
    <title>Carrito de Compras</title>
</head>
<body>

<div class="container">
    <header>
        <h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
        <nav>
            <?php include("botonera.php"); ?>
        </nav>
    </header>
    <section style="width: 55%">
        <h1>Lista de Productos</h1>
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo $producto->getCodigo(); ?></td>
                <td><?php echo $producto->getNombre(); ?></td>
                <td><?php echo $producto->getDescripcion(); ?></td>
                <td><?php echo $producto->getPrecio(); ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="codigo" value="<?php echo $producto->getCodigo(); ?>">
                        <input type="hidden" name="producto" value="<?php echo $producto->getNombre(); ?>">
                        <input type="hidden" name="descripcion" value="<?php echo $producto->getDescripcion(); ?>">
                        <input type="hidden" name="precio" value="<?php echo $producto->getPrecio(); ?>">
                        <button type="submit" name="comprar">Comprar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <aside style="width:40%">
    <h1>Contenido del Carrito</h1>
        <table border="1">
            <tr>
                <th>ID Compra</th>
                <th>Código</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
            <?php foreach ($compras as $compra): ?>
            <tr>
                <td><?php echo $compra['id_compra']; ?></td>
                <td><?php echo $compra['codigo']; ?></td>
                <td><?php echo $compra['producto']; ?></td>
                <td><?php echo $compra['descripcion']; ?></td>
                <td><?php echo $compra['precio']; ?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id_compra" value="<?php echo $compra['id_compra']; ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </aside>
    <footer>
        <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
    </footer>
</div>

</body>
</html>

<?php
$conexion->close(); // Cerrar la conexión al finalizar
?>
