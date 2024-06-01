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
				<?php include ("botonera.php"); ?>
			</nav>
		</header>
		<section>
			<h2>Imágenes con PHP</h2>
	
			<img src="marca_de_agua.php" alt="Marca de agua">
		</section>

		<aside>
			<h3> Imagenes que soporta el sitio</h3>
			<?php

			if (imagetypes() & IMG_GIF) {
				echo "<p>El sitio soporta elementos GIF</p>";
			} else {
				echo "<p>El sitio no soporta elementos GIF</p>";
			}
			if (imagetypes() & IMG_PNG) {
				echo "<p>El sitio soporta elementos PNG</p>";
			} else {
				echo "<p>El sitio no soporta elementos PNG</p>";
			}


			?>

<img src="base_evaluaciones/marca_de_agua.php" alt="Marca de agua">

		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>