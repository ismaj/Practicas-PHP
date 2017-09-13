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
  <!-- Panel panel primary is the blue frame-->
    <div class="panel panel-primary">
    <div class="panel-heading"><h1 style="text-align: center;" >Login</h1></div>
    <div class="panel-body">
    <!--  Start the form register-->
		<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" autocomplete="on">
   
  <div class="form-group">
    <label class="control-label col-sm-4" for="email" >Email</label>
    <div class="col-sm-6">
      <div class="input-group">
        <div class="input-group-addon"><span class="icon-envelop"></span></div>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
      </div>
    </div>
  </div>
  <div class="form-group">
    
    <label class="control-label col-sm-4" for="pwd">Password</span></label>
    <div class="col-sm-6"> 
    <div class="input-group">
      <div class="input-group-addon"><span class="icon-key"></span></div>
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
      </div>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-primary btn-lg" id="submit" name="submit">Log in <span class="badge">  1</span></button>
    </div>
  </div>
  
</form>
</div>
</div>
<div class="row">
    <blockquote>
       <p>La vida es una oportunidad, benefíciate de ella. La vida es belleza, admírala. La vida es un sueño, alcánzalo. La vida es un desafío, enfréntalo, La vida es un juego, juégalo</p>
       <footer>Madre Teresa</footer>
     </blockquote>
</div>
</body>
</html>