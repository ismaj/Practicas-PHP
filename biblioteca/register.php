<?php


	session_start();
	$errores='';

	if(isset($_SESSION['user'])){
		header('Location : index.php');
	}	
	//si el metodo de envio es igual a Post
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name =$_POST['name'];
		$lastname=$_POST['lastname'];
		$mail=$_POST['email'];
		$password=$_POST['password'];

	//echo " $name . $lastname . $mail . $password ";
	if(empty($name) or empty($lastname) or empty($password) or empty($mail)){
		$errores='Falta llenar datos no podemos continuar';
	}else {
		try{
			$conexion=new PDO('mysql:host=localhost;dbname=editorial_santillana','root','');
		}catch(PDOExeption $ex){
			echo 'Error'.$ex->getMessage();	
		}

		$statement=$conexion->prepare('SELECT * from user_accounts where email_user= :email LIMIT 1');
		$statement->execute(array(':email'=>$mail));
		$result=$statement->fetch();

		if ($result!=false) {
			$errores='Usuario ya existe';
		}else{
			$password=hash('sha512', $password);
			$statement=$conexion->prepare('INSERT into user_accounts VALUES (null,:name_user,:lastname_user,:password,:email)');
			$statement->execute(array(':name_user'=>$name,':lastname_user'=>$lastname,':password'=>$password,':email'=>$mail));

			header('Location:login.php');
		}

		



	}	







	}


include 'views/register.view.php';




?>