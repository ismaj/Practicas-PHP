<!DOCTYPE html>
<html>
<head>
	<title>Conceptos con ejemplos</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<style type="text/css">
		#titulos{

		}
	</style>

</head>
<body>
	<h1>Conceptos con ejemplo en php</h1>
	<?php
		//Referencia indirecta a variables
		echo'<h1>Haciendo uso de las <span class="badge badge-default"> Referencias indirecta a variables</span></h1>';
		$nombre='Ismael';
		$$nombre='Grijalva Alvardo';
		echo $Ismael.'</br>';
		//Referencia indirecta a variables->Fin

		#Isset()
		echo '<h1>Probando el funcionamiento del <span class="badge badge-default">Isset() </span></h1>';
		if (isset($nombre)){
			print(' Funciona el isset $nombre is set');
		}
		#Isset()->Fin

		





	?>








</body>
</html>






