<php? session_start(); ?>
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
		<h2>Agenda de clases</h2>
		<form action="insertar_clases.php" method="POST">
        <label for="clase">Clase:</label>
        <input type="text" id="clase" name="clase" required>
        <br><br>
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
		<input type="submit" value="Enviar">
    </form>
	</section>




	
	<aside>
	




  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>