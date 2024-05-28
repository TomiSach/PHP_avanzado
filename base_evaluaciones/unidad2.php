<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Calcula cuanto falta</h2>
				<form action="calculo_fecha.php" method="POST">
					<label for="clase">Dia:</label>
					<input type="number" id="dia" name="dia" min="1" max="31" required>
					<br><br>
					<label for="clase">Mes:</label>
					<input type="number" id="mes" name="mes" min="1" max="12" required>
					<br><br>
					<label for="clase">Año:</label>
					<input type="number" id="anio" name="anio" min="0" max="2100" required>
					<input type="submit" value="Calcular">
				</form>
			</section>
	<aside>
	<?php
			 if (isset($_GET['ficha_creada'])){
        $file_path = 'ejemplo1.txt';
				 
            $file = fopen($file_path, "r");
            
                echo "<h1>Contenido del Archivo:</h1>";
                echo "<div style='white-space: pre-wrap;'>";
                
                // Usar fpassthru para mostrar el contenido del archivo
                fpassthru($file);
                
                echo "</div>";
                
                // Cerrar el archivo
                fclose($file);       

?>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>
