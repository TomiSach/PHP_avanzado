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
			<h2>Comentarios</h2>

			<form action="comentarios.php" method="POST">
				<label for="clase">Nombre y apellido :</label>
				<input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre y apellido" style="width:200px;"  required>
				<br><br>
				<label for="clase">Mail :</label>
				<input type="email" id="mail" name="mail" placeholder="Ingrese su mail"  required>
				<br><br>
				<label for="clase">Comentario :</label>
				<textarea type="text" name='comentario' placeholder="Ingrese su comentario" maxlength="200"  required></textarea>
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