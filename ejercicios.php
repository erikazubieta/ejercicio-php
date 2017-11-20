<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicios</title>
</head>
<body>
	<h1>Ejercicio 1</h1>
	<form action="#" method="POST">
		<div>
			<label for="name"></label>
			<input type="text" name="nombre" id="name">
		</div>
		<div>
			<label for="apellido1"></label>
			<input type="text" name="apellido1" id="apellido1">
		</div>
		<div>
			<label for="apellido2"></label>
			<input type="text" name="apellido2" id="apellido2">
		</div>
		<div>
			<input type="submit" >
		</div>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
		/*if (isset($_POST["nombre"]))*/ {
			if (empty($_POST["nombre"])) {
				echo "<p>El nombre está vacio</p>";
			}

			if (empty($_POST["apellido1"])) {
				echo "<p>El 1º apellido está vacio</p>";
			}

			if (empty($_POST["apellido2"])) {
				echo "<p>El 2º apellido está vacio</p>";
			}

				if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"]))
					echo "<p><b>".$_POST["nombre"]. "</b>, " .$_POST["apellido1"]. " " .$_POST["apellido2"]. "</p>";
		}
	?>
	
</body>
</html>