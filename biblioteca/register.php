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


//Guardar imagen 
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img
 
        # Escapa caracteres especiales
        $imagenEscapes=mysql_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));
 
      
        # Cogemos el identificador con que se ha guardado
       // $id=$mysqli->insert_id;
 
        # Mostramos la imagen agregada
        echo "<div><span  class='mensaje'>Imagen agregada con el id </span></div>";
    }else{
        echo "<div><span  class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</span></div>";
    }
}


			$password=hash('sha512', $password);
			$statement=$conexion->prepare('INSERT into user_accounts (id_user,nombre_user,apellido_user,password_user,email_user,picture_profile_user) VALUES (null,:name_user,:lastname_user,:password,:email,:imagen)');
			$statement->execute(array(':name_user'=>$name,':lastname_user'=>$lastname,':password'=>$password,':email'=>$mail,':imagen'=>$imagenEscapes));

			header('Location:login.php');
		
}
	}
	}


include 'views/register.view.php';




?>
