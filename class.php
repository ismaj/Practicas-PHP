<?php
	class automovil{
		public $nombre;
		public $codigo;
		public $descripcion;
			public function calcularcodigo($nombre){
				$num = strlen($nombre);
				$this->codigo =$num.$nombre;
				return $this->codigo;	
			}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class</title>
</head>
<body>

<form action="class.php" method="get">
	<label>Nombre :</label>
	<input type="text" name="nombre"/>
	<input type="submit" name="enviar" value="Send"/>
</form>
	<?php
		
			if(isset($_GET['nombre'])){
				$parametro=$_GET['nombre'];
				$x= new automovil();
				echo $x->calcularcodigo($parametro);	
			}
	?>
</body>
</html>