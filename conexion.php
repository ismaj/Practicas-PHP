<?php
 class conexiondb(){
 	public $conexiondb;
 		function conectar(){
		$this->conexiondb=mysql_connect('localhost','usuariophp','0246810');
		mysql_select_db('biblioteca2',$conexiondb);
		
	}
}


?>