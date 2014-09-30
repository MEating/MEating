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
  <div class="container">
  <div class="well">
  <form class="form-horizontal">
    <fieldset>
        <legend>Invitar amigos</legend>
		<!--Mail-->
        <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-5">
                <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
        </div>
        <!--Nombre-->
        <div class="form-group">
           <label for="inputNombre" class="col-lg-2 control-label">Nombre</label>
           <div class="col-lg-5">
             <input class="form-control" id="inputNombre" placeholder="Nombre" type="text">
           </div>
         </div>
        <!--CheckBox-->
        <div class="checkbox-inline">
                  <label class="radio-inline checkbox ">  
                      <input type="checkbox" name="check" id="condiciones">Adultos
                  </label>
               </div>


       <!--Botones-->
        <div class="form-group">
            <div class="col-lg-5 col-lg-offset-2">
                <button class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </fieldset>
  </form>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
