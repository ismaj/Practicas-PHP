<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo while</title>
</head>
<body>
	<form action="ciclo_while.php" method="get">
		<label>Ingrese la tabla de multiplicar</label>
		<input type="text" name="numero"></br>
		<input type="submit" name="enviar" value="Enviar">
	</form>

<?php
	if(isset($_GET['numero'])){
		$numero=$_GET['numero'];
		$contador=0;
	while($contador<12){
		$contador++;
		echo "<p>$numero * $contador = ".$numero*$contador.'</p>';
		
	}	
	$contador=0;
	for($x=0;$x<12;$x++){
$contador++;
		echo "<p>$numero * $contador = ".$numero*$contador.'</p>';
	}
	}
?>


</body>
</html>