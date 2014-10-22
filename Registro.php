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
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#about">¿Que es Meating?</a></li>
            <li><a href="MEating/Quienes Somos.html">¿Quienes somos?</a></li>            
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

				<div class="form-group">
                    <label for="inputFecha" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                    <div class="col-lg-5">
                        <input class="form-control" id="dateFecha" type="date" name="nacimiento" >
                    </div>
                </div>
               
                  <!--Sexo-->
                <div class="form-group">
            <label class="col-lg-2 control-label">Sexo:</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                  <input type="radio" name="Sexo" value="male" checked="checked"> Masculino
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
                        <select class="form-control" id="selectProvincia" name="provincias">
                            <option value="Buenos Aires">Buenos Aires</option>
                            <option value="Capital Federa">Capital Federal</option>
                            <option value="Catamarca">Catamarca</option>
                            <option value="Chaco">Chaco</option>
                            <option value="Chubut">Chubut</option>
                            <option value="Córdoba">Córdoba</option>
                            <option value="Corrientes">Corrientes</option>                            
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
La utilización de nuestro sitio implica su aceptación plena y sinreservas a todas y cada una de las disposiciones incluidas en este Aviso Legal, por lo que si usted no está de acuerdo con cualquiera de las condiciones aquí establecidas, no deberá usar u/o acceder a este sitio.
 Reservamos el derecho a modificar esta Declaración de Privacidad en cualquier momento. Su uso continuo de cualquier porción de este sitio tras la notificación o anuncio de tales modificaciones constituirá su aceptación de tales cambios
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
               <!--Boton-->
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2 f">
                     <button type="submit" class="btn-primary" value="submit" id="btnAceptar" name="acepta">Aceptar</button>
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