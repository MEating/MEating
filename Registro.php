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
    <script src="../js/jquery2-0-0.min.js"></script>
     <script type="text/javascript" language="javascript" src="../js/validaForm.js"></script>
     
   <style type="text/css">
   .errores{
            -webkit-boxshadow: 0 0 10px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            -o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            background: red;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            color: #fff;
            display: none;
            font-size: 14px;
            margin-top: -50px;
            margin-left: 180px;
            padding: 10px;
            position: absolute;
        }
   </style>
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
			<li><a href="../programacion/contacto.php">Contacto</a></li>     
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../programacion/login.php">Inicio de Sesion</a></li> 
            <li class="active"><a href="#">Registrarse</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
    <div class="container"> 
    	<div class="well">
        	<!--Formulario-->
			<form class="form-horizontal" placeholder=".col-xs-3" onsubmit="return valida();" name="contacto" >
              <fieldset>
                  <legend>Registro</legend>
                  <!--Nombre-->
                  <div class="form-group">
                      <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">
                           <div id="mensaje1" class="errores"> Dame tu nombre</div>
                      </div>
                  </div>
                  
                  <!-- Apellido -->
                  <div class="form-group">
                      <label for="inputApellido" class="col-lg-2 control-label">Apellido</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputApellido" placeholder="Apellido" type="text">
                      </div>
                  </div>

                 <!--Mail-->
                  <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputEmail" placeholder="Email" type="text">
                      </div>
                  </div>
                  <!--Fecha de Nacimiento-->                  
<div class="form-group">
                      <label for="inputNombre" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputNombre" placeholder="Nombre" type="date" >
                      </div>
                  </div>
                  <!--Sexo-->  
                 <div class="form-group">
      <label class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
           Femenino
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Masculino
          </label>
        </div>
      </div>
    </div>
              	<!--Provincias-->
                  <div class="form-group">
                      <label for="select" class="col-lg-2 control-label">Provincia</label>
                      <div class="col-lg-5">
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
               <!--Ciudad--> 
                <div class="form-group">
                      <label for="inputNombre" class="col-lg-2 control-label">Ciudad</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputNombre" placeholder="Nombre" type="text">
                      </div>
                  </div>

                  <!--Textarea-->
                  <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">Terminos y Condiciones </br>
                      
                      </label>
                      
                      <div class="col-lg-5">
                      <textarea class="form-control " rows="5" id="textArea" disabled="disabled">TERMINOS Y CONDICIONES
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br>
                      Terminos y Condiciones </br></textarea>             
                  	  </div>
                </div>
                  
                  <!--CheckBox-->
                  <div class="checkbox">
                      <input type="checkbox" name="check">
                      <label for="check" class="label">Acepto condiciones Legales</label>
                      
                  </div>
                  
       			<!--Botones-->
                  <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                     
                          <button type="submit" class="btn-primary" >Aceptar</button>
                          <button class="btn-default" type="reset" id="btnCancelar">Cancelar</button>
                      </div>
                  </div>
              </fieldset>
			</form>
        </div>
	</div>
</body>
</html>