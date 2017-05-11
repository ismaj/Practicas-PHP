<?php

		if(isset($_POST['nombre'])){

			echo "Bienvenido al sistema :{$_POST['nombre']}";
		}else{
			echo "Complete el campo nombre";
		}
		

	?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="formularios.php" method="post">
		<label>Nombre:</label>
		<input type="text" name="nombre" />
		<label>Apellido</label>	
		<input type="text" name="apellido" />
		<input type="submit" name="enviar"/>

	</form>

</body>
</html>