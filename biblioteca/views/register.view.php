<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../icomoon/style.css">
  <style type="text/css">
  label{
    font-size: 20px;
    padding: 0px !important;
  }

  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<header>
	
</header>
	<div class="container">
    <div class="panel panel-primary">
    <div class="panel-heading"><h1 style="text-align: center;" >Registro de usuarios</h1></div>
    <div class="panel-body">
    <!--  Start the form register-->
		<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="on">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Nombres</label>
      <div class="col-sm-6">
        <div class="input-group">
        <div class="input-group-addon"><span class="icon-user-tie"></span></div>
          <input class="form-control" type="text" name="name" id="name" placeholder="Ingrese 2 nombres">
        </div>
      </div>
    </div>
      <div class="form-group">
        <label class=" control-label col-sm-2">Apellidos</label>
        <div class="col-sm-6">
        <div class="input-group">
          <div class="input-group-addon" ><span class="icon-user-tie"></span></div>
          <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ingrese 2 apellidos">
        </div>
        </div>
      </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email" >Email</label>
    <div class="col-sm-6">
      <div class="input-group">
        <div class="input-group-addon"><span class="icon-envelop"></span></div>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
    </div>
  </div>
  <div class="form-group">
    
    <label class="control-label col-sm-2" for="pwd">Password</span></label>
    <div class="col-sm-6"> 
    <div class="input-group">
      <div class="input-group-addon"><span class="icon-key"></span></div>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <label class="control-label col-sm-2">Repeat Password</label>
    <div class="col-sm-6">
    <div class="input-group">
      <div class="input-group-addon"><span class="icon-key"></span></div>
        <input class="form-control" type="password" name="repeatpassword" id="repeatpassword" placeholder="Repeat Password">
    </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 ">
      <div class="checkbox ">
        <label style="font-size: 14px !important;"><input type="checkbox" > Remember me</label>
      </div>
    </div>
  </div>
  <div class="row">
    <?php if (!empty($errores)): echo '<p class="text-center text-danger">'.$errores.'</p>'; endif;?>
      
   </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-6">
      <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit">Submit <span class="badge">1</span></button>
    </div>
  </div>
  
</form>
</div>
</div>
<div class="row">
   <blockquote>
      <p><span class="badge">2</span>    Apunta hacia la luna .Incluso si fallas aterrizaras en las estrellas  </p>
      <footer>Lee Brown</footer>
    </blockquote>
  </div>
</body>
</html>
