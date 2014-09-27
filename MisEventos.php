<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Mis Eventos</title>

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
            <li><a href="Registro.php">Registro</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
<?php
	$Nombre=$_REQUEST['Nombre'];
	$Email=$_REQUEST['Email'];
	$FechaNacimiento="12-12-1299";
	$Sexo="Femenino";
	$Provincia=$_REQUEST['Provincia'];
	$Ciudad=$_REQUEST['Ciudad'];
	
?>
    <div class="container"> 
    	<div class="well"> 
<?php	
	$conexion= mysql_connect("localhost","root","") or die ("no se puede conectar con la base de datos");

	//Selecciono la base de datos
	mysql_select_db("meating") or die("no se puede conectar con usuarios");
	
	//enviar consulta
	$instruccion = "insert into usuarios(Nombre, Email,FechaNacimiento, Sexo, Provincia, Ciudad ) values ('$Nombre','$Email','$FechaNacimiento','$Sexo','$Provincia','$Ciudad')";
	$consulta = mysql_query ($instruccion, $conexion) or die("falló consulta");
	
	// Cerrar conexión
   mysql_close ($conexion);  
?>     	
        </div>
	</div>
</body>
</html>