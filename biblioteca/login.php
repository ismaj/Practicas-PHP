<?php


session_start();

if (isset($_SESSION['user'])) {
	header('Location:index.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	$email=$_POST['email'];
	$password=$_POST['password'];

	try{
	$conexion=new PDO('mysql:host=localhost;dbname=editorial_santillana','root','');
}catch(PDOException $ex){
	echo "Something went wrong".$ex;
}
$statement=$conexion->prepare('SELECT email_user FROM users_accounts where email_user=:mail_user  or apellido_user="Grijalva"');
	$statement->execute(array(':mail_user'=>$email));
	$result=$statement->fetch(PDO::FETCH_ASSOC);

/*if ($result()!=false) {
	$mensaje='Contraseña valida';
}*/

//print_r($result);
//  Link estudio =>            http://php.net/manual/es/pdostatement.fetch.php
//PDOStatement::fetch  PDOStatement::fetch — Obtiene la siguiente fila de un conjunto de resultados
//
while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
	
	echo '<strong>'.$row['email_user'].'</strong><br/>';

}

}

include 'views/login.view.php';


?>