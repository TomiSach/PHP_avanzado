<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include("conexion.php");
$consulta_clases = mysqli_query($datos_db,"SELECT * FROM clases ");



while($lista_clases = mysqli_fetch_assoc($consulta_clases)){

?>
<div id="lista_clases">
    <p><strong><?php echo $lista_clases["unidad"]?></strong></p>
    <p><?php echo $lista_clases["fecha"]?></p>
    <hr>
</div>


<?php
};
?>    
</body>
</html>