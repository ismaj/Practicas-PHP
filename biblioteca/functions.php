<?php

function conexion($bd_config){
	try{
		$conexion =new PDO('mysql:host=localhost;dbname=editorial_santillana';'root';'');
		return $conexion;
	}catch(PDOException $ex){
		return false;
		echo 'Error en la conexion'.$ex;
	}



}





?>