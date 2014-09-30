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
            <li><a href="../MEating/index.html">Inicio</a></li>
            <li><a href="../MEating/que es.html">¿Que es Meating?</a></li>
            <li><a href="../MEating/Quienes Somos.html">¿Quienes somos?</a></li> 
            <li class="active"><a href="#contact">Contacto</a></li>             
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
			<li><a href="../MEating/login.php">Inicio de Sesion</a></li> 
            <li><a href="../MEating/registro.php">Registrarse</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container">
    	<div class="well">
        	<form class="form-horizontal" id="contacto">
  <fieldset>
    <legend>Consulta</legend>
    
    <div class="form-group">
      <label for="inputNombre" class="col-lg-4 control-label">Nombre</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">        
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="mail">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-4 control-label">Consulta</label>
      <div class="col-lg-4">
        <textarea class="form-control" rows="3" id="textArea" name="consulta" placeholder="Escribi tu consulta"></textarea>
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
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.js"></script>-->
    <script src="js/jquery2-0-0.min.js"></script>
    <script src="js/jquery.validate.js"></script>
	<script src="js/validaciones.js"></script>
</body>

<div id="footer">
		<!-- FOOTER -->
        <footer id="mainFooter">
            <div class="wrapped" align="center"> <!Anclamos un footer abajo del todo de la pagina>
                <p class="pull-right"><a id="goTop" href="#"><h3> ^ </h3></a></p> <!con ese icono nos lleva hacia arriba de la pagina>
                <p>© 2014 MEating   ·  <a href="ruta de privacidad y terminos">Privacidad y Términos</a> · Seguinos en <!no va a llevar a los links mencionados abajo a traves de los iconos-imagenes>
                	<a href="http://facebook.com"><img src="img/f2.png" height='30' width='70'></a> | 
					<a href="http://twitter.com"><img src="img/t1.png" height='30' width='70'></a> | 
					<a href="http://plus.google.com/share"><img src="img/g1.png" height='30' width='70'></a>
					
                </p>
            </div>
        </footer>
 </div>

</html>