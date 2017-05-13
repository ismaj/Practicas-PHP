<?php
	require('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="basededatos.php">
		<label>Nombre del libro :</label>
		<input type="text" name="nombrelibro" placeholder="Ex Odisea"></br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>
<?php

	if(isset($_POST['nombrelibro'])){
		$nombrelibro=$_POST['nombrelibro'];
	conexion_db();
	
	$sql="select * from autor where edad_autor='$_POST[nombrelibro]'";
	$resultado=mysql_query($sql);

		while ($row=mysql_fetch_assoc($resultado)) {
			echo "$row[nombre_autor] </br>";
		}
		mysql_close($conexion_db);
	}
		
	
?>