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
				<h2>Registro de Usuario</h2>
				<form action="cargarusuario.php" method="post">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" required>
					<br>
					<label for="clave">Contraseña:</label>
					<input type="password" name="clave" id="clave" required>
					<br>
					<button type="submit">Registrar</button>
				</form>
				<?php
				if (isset($_GET['reg_ok'])) {
					echo "<p>Registro exitoso!</p>";
				}

				?>

				<h2>Ingreso de Usuario</h2>
				<form action="verificarusuario.php" method="post">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" required>
					<br>
					<label for="clave">Contraseña:</label>
					<input type="password" name="clave" id="clave" required>
					<br>
					<button type="submit">Ingresar</button>
				</form>
				<?php
				if (isset($_GET['acc_ok'])) {
					echo "<p>Ingreso exitoso!</p>";
				} elseif (isset($_GET['acc_error'])) {
					echo "<p>Ingreso fallido</p>";
				}
				?>

			</section>
			<aside>

			</aside>
			<footer>
				<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
			</footer>

		</div>
	</body>

	</html>