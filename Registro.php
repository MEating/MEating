<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Registrarse</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/StyleComun.css" rel="stylesheet">

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
          	<a class="navbar-brand">El Despilfarro</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Inicio</a></li>
            <li><a href="#about">¿Que es el Despilfarro?</a></li>
            <li><a href="#contact">¿Quienes somos?</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Inicio de Sesion</a></li>
            <li class="active"><a href="#">Registro</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
    <div class="container"> 
    	<div class="well">
        	<!--Formulario-->
			<form class="form-horizontal">
              <fieldset>
                  <legend>Registro</legend>
                  <!--Nombre-->
                  <div class="form-group">
                      <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                      <div class="col-lg-10">
                          <input class="form-control" id="inputNombre" placeholder="Nombre" type="text">
                      </div>
                  </div>
                  
                  <!--Mail-->
                  <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                          <input class="form-control" id="inputEmail" placeholder="Email" type="text">
                      </div>
                  </div>
                  
              	<!--Provincias-->
                  <div class="form-group">
                      <label for="select" class="col-lg-2 control-label">Provincia</label>
                      <div class="col-lg-10">
                          <select class="form-control" id="select">
            <option>Buenos Aires</option>
            <option>Catamarca</option>
            <option>Chaco</option>
            <option>Chubut</option>
            <option>Córdoba</option>
            <option>Corrientes</option>
            <option>Distrito Federal</option>
            <option>Entre Ríos</option>
            <option>Formosa</option>
            <option>Jujuy</option>
            <option>La Pampa</option>
            <option>La Rioja</option>
            <option>Mendoza</option>
            <option>Misiones</option>
            <option>Neuquén</option>
            <option>Río Negro</option>
            <option>Salta</option>
            <option>San Juan</option>
            <option>San Luis</option>
            <option>Santa Cruz</option>
            <option>Santa Fe</option>
            <option>Santiago del Estero</option>
            <option>Tierra del Fuego</option>
            <option>Tucumán</option>
          </select>
                      </div>     
                  </div>
                  
                  <!--Textarea-->
                  <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label"></label>
                      <div class="col-lg-10">
                          <textarea class="form-control" rows="5" id="textArea"></textarea>
                      </div>
                   </div>                   
                  <!--CheckBox-->                  
                  <div class="checkbox">
                      <input type="checkbox"> Acepto condiciones Legales
                  </div>
                  
                  
       			<!--Botones-->
                  <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                          <button class="btn btn-default">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Aceptar</button>
                      </div>
                  </div>
              </fieldset>
			</form>
        </div>
	</div>
</body>
</html>