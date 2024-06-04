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

			<strong><h3 style="text-align: center; color:blue;">Marca de agua</h3></strong>
	
			<img src="marca_de_agua.php" alt="Marca de agua" style="width: 250px;">


			

			
		</section>

		<aside>
			<strong><h3 style="text-align: center; color:red;">Thumbnail</h3></strong>

<?php include("thumbnail.php") ?>	

<img src="imagenes/auto_thumb.jpg" alt="Auto" style="display: block; margin: 0 auto">


		</aside>
		<footer>
			<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
		</footer>

	</div>
</body>

</html>