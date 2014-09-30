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
          	<a class="navbar-brand">Meating</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../MEating/index.html">Inicio</a></li>
            <li><a href="#about">¿Que es Meating?</a></li>
            <li><a href="../MEating/Quienes Somos.html">¿Quienes somos?</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../MEating/login.php">Inicio de Sesion</a></li>
            <li class="active"><a href="../MEating/registro.php">Registro</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
    <div class="container" > 
    	<div class="well">
<<<<<<< HEAD
       	<!--Formulario-->
           <form class="form-horizontal" placeholder=".col-xs-3" id="contacto" action="" method="post" >
             <fieldset>
               <legend>Registro</legend>
                <!--Nombre-->
                <div class="form-group">
                  <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                  <div class="col-lg-5">
                    <input class="form-control" id="inputNombre" placeholder="Nombre de usuario" type="text" name="nombre">
=======
        	<!--Formulario-->
			<form class="form-horizontal" placeholder=".col-xs-3" id="contacto" action="MisEventos.php" method="post" >
              <fieldset>
                  <legend>Registro</legend>
                  <!--Nombre-->
                  <div class="form-group">
                      <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">
                           
                    </div>
                  </div>
                                   
                <!--Mail-->
                  <div class="form-group">
                      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="inputEmail" placeholder="Email" type="email" name="mail">
                      </div>
>>>>>>> f94e11f941c9f093f5a64626eaa839593c5d67cc
                  </div>
                </div>
               <!--Mail-->
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-5">
                       <input class="form-control" id="inputEmail" placeholder="Un Email válido" type="email" name="mail">
                    </div>
                </div>
                <!-- Contraseña -->
                <div class="form-group">
    				<label for="inputPassword" class="col-lg-2 control-label">Contraseña</label>
    				   <div class="col-lg-5">
      					 <input type="password" class="form-control" id="contraseña1" placeholder="Introducí una contraseña" name="contraseña1">
      				   </div>
  				</div>
  				<!--confirmacion password-->
  				<div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Confirmar Contraseña</label>
                    <div class="col-lg-5">
                      <input type="password" class="form-control" id="contraseña2" placeholder="Volve a ingresar la contraseña" name="contraseña2">
      				</div>
 			    </div>
                <!--Fecha de Nacimiento-->                  
<<<<<<< HEAD
				<div class="form-group">
                    <label for="inputFecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-lg-5">
                        <input class="form-control" id="dateFecha" type="date" name="nacimiento" >
                    </div>
                </div>
                <!--Sexo-->
=======
<div class="form-group">
                      <label for="inputFecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                      <div class="col-lg-5">
                          <input class="form-control" id="dateFecha" placeholder="Nombre" type="date" >
                      </div>
                  </div>
                  <!--Sexo-->
                  <div class="form-group">
            <label class="col-lg-2 control-label">Sexo:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                  <input type="radio" name="Sexo" value="male"> Masculino
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                  <input type="radio" name="Sexo" value="female"> Femenino
                </label>
            </div>
        </div>
                  <!--Provincias-->
                  <div class="form-group">
                      <label for="selectProvincia" class="col-lg-2 control-label">Provincia</label>
                      <div class="col-lg-5">
                          <select class="form-control" id="selectProvincia">
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
>>>>>>> f94e11f941c9f093f5a64626eaa839593c5d67cc
                <div class="form-group">
                    <label class="col-lg-2 control-label">Sexo:</label>
                    <div class="col-xs-2">
                        <label class="radio-inline">
                          <input type="radio" name="genderRadios" value="male" checked="checked"> Masculino
                        </label>
                    </div>
                    <div>
                        <label class="radio-inline">
                          <input type="radio" name="genderRadios" value="female"> Femenino
                        </label>
                    </div>
     			 </div>
                <!--Provincias-->
                <div class="form-group">
                    <label for="selectProvincia" class="col-lg-2 control-label">Provincia</label>
                    <div class="col-lg-5">
                        <select class="form-control" id="selectProvincia" name="provincias">
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
                    <label for="inputCiudad" class="col-lg-2 control-label">Ciudad</label>
                    <div class="col-lg-5">
                      <input class="form-control" id="inputCiudad" placeholder="Nombre de tu ciudad" type="text" name="ciudad">
                    </div>
                </div>
                <!--Textarea-->
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Terminos y Condiciones </br></label>
                    <div class="col-lg-5">
                      <textarea class="form-control " rows="5" id="textArea" disabled="disabled">TERMINOS Y CONDICIONES
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                          Terminos y Condiciones </br>
                      </textarea>             
                    </div>
               </div>
               <!--CheckBox-->
               <div class="checkbox-inline">
                  <label class="radio-inline checkbox ">  
                      <div>
                      <input type="checkbox" name="check" id="condiciones">Acepto Términos y Condiciones</div>
                  </label>
               </div>
               <!--Botones-->
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2 f">
                     <button type="submit" class="btn-primary" value="submit" id="btnAceptar" name="acepta">Aceptar</button>
                     <button class="btn-default" type="reset" value="reset" id="btnCancelar" name="cancelar">Cancelar</button>
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
</html>