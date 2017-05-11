<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
</head>
<body>
	<h1>Tablas usando PHP</h1>
	<?php
		function mostrar($valor){
			if($valor % 2){
				$fondo="black";	
			}else
				$fondo="blue";
			if($valor<0.5){
				$color=" red";
			}else
				$color=" green";
				echo"<td bgcolor='$fondo'><font color='$color'>$valor$color</font></td>\n";
		}
	?>
<table border="1">

<?php
	for($x=0;$x<=2;$x+=0.01){
		echo "<tr>";
		mostrar($x);
		mostrar(sin($x));
		mostrar(cos($x));
		echo "</tr>";
	}

?>

</body>
</html>