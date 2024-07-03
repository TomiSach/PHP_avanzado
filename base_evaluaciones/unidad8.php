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
				<h2>Registro</h2>
				<form action="cargarusuario.php" method="POST">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required>
					<br><br>
					<label for="contrasenia">Contraseña:</label>
					<input type="text" id="clave" name="clave" required>
					<br><br>
					<input type="submit" value="Registrar">
				</form>
				<p>
					<?php

					if (isset($_GET['reg_ok'])) {
						echo '<p>Resgistrado exitosamente</p>';
					}
					?>
				</p>
				<h2>Ingresar</h2>
				<form action="ingreso.php" method="POST">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required>
					<br><br>
					<label for="clave">Contraseña:</label>
					<input type="text" id="clave" name="clave" required>
					<br><br>
					<input type="submit" value="Ingresar">
				</form>
			</section>
			<p>
				<?php

				if (isset($_GET['pass_ok'])) {
					echo '<p>Ingresado exitosamente</p>';
				}
				?>
				<?php

				if (isset($_GET['pass_error'])) {
					echo '<p>Error al ingesar</p>';
				}
				?>
			</p>
			<aside>

			</aside>
			<footer>
				<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
			</footer>

		</div>
	</body>

	</html>