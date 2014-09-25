<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imgs/favicon.ico">

    <title>Inicio de Sesi&oacute;n - Domosys&reg;</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/extras css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<!-- Inicio navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Domosys</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Inicio</a></li>
            <li><a href="acerca.php">Acerca de Domosys</a></li>
            <li><a href="contacto.php">Cont&aacute;ctenos</a></li>
        </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Fin navbar-->
	<br><br>
    
    <div class="container">
    <?php
    if(isset($_GET["error"])) 
	{
		$error = $_GET["error"];
		if ($error == 1)
		{
		?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Aviso:</strong>&nbsp;&nbsp;Debe iniciar sesi&oacute;n para acceder al contenido del sitio web.
		</div>
    <?php
    	} 
	
		elseif ($error == 2)
		{
		?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Aviso:</strong>&nbsp;&nbsp;Usted no tiene los permisos para acceder a este contenido. Por favor inicie sesi&oacute;n con su cuenta personal.
		</div>
    <?php
    	}
		
		elseif ($error == 3)
		{
		?>
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Aviso:</strong>&nbsp;&nbsp;Usuario o contrase&ntilde;a no corresponden, por favor intente nuevamente.
		</div>
    <?php
    	}
		
		elseif ($error == 4)
		{
		?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Aviso:</strong>&nbsp;&nbsp;Por razones de seguridad, su sesi&oacute;n ha sido cerrada tras 5 minutos de haber iniciado sesi&oacute;n. Por favor ingrese nuevamente.
		</div>
    <?php
    	}
		
		
	}
	
	?>

      <form class="form-signin" role="form" name="frmLogin" id="frmLogin" method="post" action="msjes_usuario.php" onSubmit="return validaLoginVacios();">
        <h2 class="form-signin-heading">Por favor inicie sesi&oacute;n</h2>
        <div class="form-group">
        <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" class="form-control" >
        </div>
        <div class="form-group">
        <input type="password" name="txtPassword" id="txtPassword" placeholder="Contrase&ntilde;a" class="form-control">
        </div>
       <!-- <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
        <button type="submit" class="btn btn-lg btn-primary btn-block" name="btnLogin" id="btnLogin"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Iniciar Sesi&oacute;n</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jQuery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/extras_js/bootbox.min.js"></script>
    <script src="js/validacionesLogin.js"></script>
  </body>
</html>
