<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
	<title>Consultas</title>
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
			<h2>Consultas</h2>

			<?php
			function contenido_captcha()
			{
				$pattern = "1234567890abcdefghijklmnopqrstuvwxz!#$%=";
				$clave = "";
				for ($i = 0; $i < 8; $i++) {
					$clave .= $pattern[rand(0, 38)];
				}
				return $clave;
			}
			$_SESSION['captcha'] = contenido_captcha();
			?>

			<form action="cargar.php" method="POST">
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" name="nombre" required>
				<br><br>
				<label for="apellido">Apellido:</label>
				<input type="text" id="apellido" name="apellido" required>
				<br><br>
				<label for="mail">Mail:</label>
				<input type="email" id="mail" name="mail" required>
				<br><br>
				<label for="consulta">Consulta:</label>
				<input type="text" id="consulta" name="consulta" required>
				<br><br>
				<img src="imagen_captcha.php" alt="CAPTCHA">
				<br><br>
				<label for="codigo">Código CAPTCHA:</label>
				<input type="text" id="codigo" name="codigo" required>
				<br><br>
				<input type="submit" value="Enviar">
			</form>

			<?php
			if (isset($_GET['error'])) {
				echo "<p>Codigo CAPTCHA ingresado incorrectamente<p>";
			}else{
				echo "<p>Formulario enviado correctamente</p>";
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