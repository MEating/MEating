<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>
  <body>
  	<!--barra de menu-->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container"><img class="navbar-brand" src="img/images.jpg" ></img>
        <div class="navbar-header">
          	<p class="navbar-brand">El Despilfarro</p>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Index.htm">Inicio</a></li>
            <li><a href="Que es.html">¿Que es el Despilfarro?</a></li>
            <li><a href="Quienes Somos.html">¿Quienes somos?</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="Login.php">Inicio de Sesion</a></li>
            <li><a href="Registro.php">Registro</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container"> <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
    <div class="page-header">
<div class="jumbotron">
  	<form class="form-horizontal">
      <fieldset>
        <legend>Inicio de Sesion</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputEmail" placeholder="Email" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputPassword" placeholder="Password" type="password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </fieldset>
	</form>
</div>

<div> <button type="button" class="btn btn-default">Olvide mi contraseña</button>
 <button type="button" class="btn btn-default">Registrarme</button></div>
</div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
