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
            <li><a href="Index.html">Inicio</a></li>
            <li><a href="Que es.html">¿Que es MEating?</a></li>
            <li><a href="Quienes Somos.html">¿Quienes somos?</a></li> 
            <li><a href="Contacto.php">Contacto</a></li>            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Finalizar Sesion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--le da el cuerpo al body (valga la redundancia)--> <!--modificado en el css box-shadow-->
<?php
	@$Nombre=$_REQUEST['Nombre'];
	@$Email=$_REQUEST['Email'];
	@$FechaNacimiento="1990-05-21";
	@$Sexo="Masculino";
	@$Provincia=$_REQUEST['Provincia'];
	@$Ciudad=$_REQUEST['Ciudad'];
	@$Password="12345";
	
?>
    <div class="container"> 
    	<div class="well"> 
	        <div><h1 id="type"> Mis Eventos</h1></div>
            <div align="right"><a href="Evento.php" class="btn btn-primary" >Agregar Evento +</a></div><br>		

<?php	
		$conexion= mysql_connect("localhost","root","") or die ("no se puede conectar con la base de datos");
	
		//Selecciono la base de datos
		mysql_select_db("meating") or die("no se puede conectar con usuarios");
		
		if ($Nombre!="" and $Email!="" and $FechaNacimiento!="" and $Sexo!="" and $Provincia!="" and $Ciudad!="" and $Password!="")
	{
		//enviar consulta
		$instruccion = "insert into usuarios(Nombre, Email,FechaNacimiento, Sexo, Provincia, Ciudad, Password ) values ('$Nombre','$Email','$FechaNacimiento','$Sexo','$Provincia','$Ciudad','$Password')";
		$consulta = mysql_query ($instruccion, $conexion) or die("falló consulta");
	}
	
	//pidiendo datos para mis eventos
	$instruccion= "select * from evento";
	$consulta = mysql_query ($instruccion, $conexion) or die("falló consulta");
	
	
	$nfilas = mysql_num_rows($consulta);
      if ($nfilas > 0)
      {
         print ("<table class='table table-striped table-hover'>\n");
         print ("<thead>\n");
		 print ("<TR>\n");
         print ("<TH>Nombre</TH>\n");
         print ("<TH>Lugar</TH>\n");
         print ("<TH>Fecha</TH>\n");
         print ("<TH>Organizador</TH>\n");
         print ("<TH>invitados/Confirmados</TH>\n");
         print ("</TR>\n");
		 print ("</thead>\n");
		 print ("<tbody>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
			if (($i%2)==0)
			{
				$resultado = mysql_fetch_array ($consulta);
				print ("<TR class='info'>\n");
				print ("<TD>" . $resultado['NombreEvento'] . "</TD>\n");
				print ("<TD>" . $resultado['Lugar'] . "</TD>\n");
				print ("<TD>" . $resultado['FechaYHora'] . "</TD>\n");
				print ("<TD>" . $resultado['Organizador'] . "</TD>\n");
				print ("<TD>12/12</TD>\n"); //invitados confirmados falta la cuenta 
				print ("</TR>\n");
			}
			else
			{
				$resultado = mysql_fetch_array ($consulta);
				print ("<TR class='active'>\n");
				print ("<TD>" . $resultado['NombreEvento'] . "</TD>\n");
				print ("<TD>" . $resultado['Lugar'] . "</TD>\n");
				print ("<TD>" . $resultado['FechaYHora'] . "</TD>\n");
				print ("<TD>" . $resultado['Organizador'] . "</TD>\n");
				print ("<TD>12/12</TD>\n"); //invitados confirmados falta la cuenta 
				print ("</TR>\n");
			}
         }
		 print ("<tbody>\n");
         print ("</TABLE>\n");
      }
      else
         print ("No hay eventos disponibles");
		 
		 
	// Cerrar conexión
   	mysql_close ($conexion);
 
?>    
        </div>
	</div>
</body>
<div id="footer">
		<!-- FOOTER -->
        <footer id="mainFooter">
            <div class="wrapped" align="center"> <!Anclamos un footer abajo del todo de la pagina>
                <p class="pull-right"><a id="goTop" href="#"><h3> ^ </h3></a></p> <!con ese icono nos lleva hacia arriba de la pagina>
                <p>© 2014 MEating   ·  <a href="ruta de privacidad y terminos">Privacidad y Términos</a> · Seguinos en <!no va a llevar a los links mencionados abajo a traves de los iconos-imagenes>
                	<a href="http://facebook.com"><img src="img/f2.png" height='30' width='70'></a>, 
					<a href="http://twitter.com"><img src="img/t1.png" height='30' width='70'></a> y 
					<a href="http://plus.google.com/share"><img src="img/g1.png" height='30' width='70'></a>.
					
                </p>
            </div>
        </footer>
 </div>
</html>