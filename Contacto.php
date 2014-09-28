<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom styles for this template -->
    <link href="css/StyleComun.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">
</head>

<body>
	<!--barra de menu-->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container"><img class="navbar-brand" src="img/images.jpg" ></img>
        <div class="navbar-header">
          	<a class="navbar-brand">Meating</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../programacion/index.html">Inicio</a></li>
            <li><a href="../programacion/que es.html">¿Que Meating?</a></li>
            <li><a href="../programacion/Quienes Somos.html">¿Quienes somos?</a></li> 
            <li class="active"><a href="#contact">Contacto</a></li>             
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
			<li><a href="../programacion/login.php">Inicio de Sesion</a></li> 
            <li><a href="../programacion/registro.php">Registrarse</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
    	<div class="well">
        	<form class="form-horizontal">
  <fieldset>
    <legend>Consulta</legend>
    
    <div class="form-group">
      <label for="inputNombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text">        
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-4 control-label">Consulta</label>
      <div class="col-lg-4">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-6 col-lg-offset-4" >
        <button type="submit" class="btn btn-primary" >Enviar</button>
      </div>
    </div>
  </fieldset>
</form>
        </div>
    </div>
</body>
</html>