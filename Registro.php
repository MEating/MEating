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
          	<a class="navbar-brand">MEating</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Index.htm">Inicio</a></li>
            <li><a href="Que es.html">¿Que es MEating?</a></li>
            <li><a href="Quienes Somos.html">¿Quienes somos?</a></li> 
            <li><a href="Contacto.php">Contacto</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="Index.htm">Inicio de Sesion</a></li>
            <li class="active"><a href="Registro.php">Registro</a></li>
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
                          <input class="form-control" Name="Nombre" placeholder="Nombre" type="text">
                      </div>
                  </div>
                  
                  <!--Mail-->
                  <div class="form-group">
                      <label for="Email" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-10">
                          <input class="form-control" NAME="email" placeholder="Email" type="text">
                      </div>
                  </div>
                  
              	<!--Provincias-->
                  <div class="form-group">
                      <label for="select" class="col-lg-2 control-label">Provincia</label>
                      <div class="col-lg-10">
                          <select class="form-control" name="Provincia">
                            <option value="Buenos Aires">Buenos Aires</option>
                            <option value="Catamarca">Catamarca</option>
                            <option value="Chaco">Chaco</option>
                            <option value="Chubut">Chubut</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Corrientes">Corrientes</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Entre Ríos">Entre Ríos</option>
                            <option value="Formosa">Formosa</option>
                            <option value="Jujuy">Jujuy</option>
                            <option value="La Pampa">La Pampa</option>
                            <option value="La Rioja">La Rioja</option>
                            <option value="Mendoza">Mendoza</option>
                            <option value="Misiones">Misiones</option>
                            <option value="Neuquén">Neuquén</option>
                            <option value="Río Negro">Río Negro</option>
                            <option value="Salta">Salta</option>
                            <option value="San Juan">San Juan</option>
                            <option value="San Luis">San Luis</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Santa Fe">Santa Fe</option>
                            <option value="Santiago del Estero">Santiago del Estero</option>
                            <option value="Tierra del Fuego">Tierra del Fuego</option>
                            <option value="Tucumán">Tucumán</option>
         				 </select>
                      </div>     
                  </div>
                  
                  <!--Ciudad-->
                  <div class="form-group">
                      <label for="Ciudad" class="col-lg-2 control-label">Ciudad</label>
                      <div class="col-lg-10">
                          <input class="form-control" Name="Ciudad" placeholder="Ciudad" type="text">
                      </div>
                  </div>
                  
                  <!--Textarea-->
                  <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label"></label>
                      	<div class="col-lg-10">
                              <textarea class="form-control" rows="5" readonly="readonly">La utilización de nuestro sitio implica su aceptación plena y sinreservas a todas y cada una de las disposiciones incluidas en este Aviso Legal, por lo que si usted no está de acuerdo con cualquiera de las condiciones aquí establecidas, no deberá usar u/o acceder a este sitio.
 Reservamos el derecho a modificar esta Declaración de Privacidad en cualquier momento. Su uso continuo de cualquier porción de este sitio tras la notificación o anuncio de tales modificaciones constituirá su aceptación de tales cambios
    							</textarea>
                      </div>
                   </div>                   
                  <!--CheckBox-->                  
                  <div class="checkbox">
                      <input type="checkbox"> Acepto condiciones Legales
                  </div>
                  
                  
       			<!--Botones-->
                  <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                      </div>
                  </div>
              </fieldset>
			</form>
        </div>
	</div>
</body>
</html>