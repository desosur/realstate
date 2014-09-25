<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imgs/favicon.ico">

    <title>Acerca de Desosur</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/extras css/jumbotron.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/extras css/carousel.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#">Desosur</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Inicio</a></li>
            <li><a href="acerca.php">Acerca de Domosys</a></li>
            <li><a href="contacto.php">Cont&aacute;ctenos</a></li>
        </ul>
          <form class="navbar-form navbar-right" role="form" name="frmLogin" id="frmLogin" method="post" action="msjes_usuario.php" onSubmit="return validaLoginVacios();">
            <div class="form-group">
              <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" class="form-control" onKeyPress="return soloNumerosYletras(event);">
            </div>
            <div class="form-group">
              <input type="password" name="txtPassword" id="txtPassword" placeholder="Contrase&ntilde;a" class="form-control" onKeyPress="return soloNumerosYletras(event);">
            </div>
            <button type="submit" class="btn btn-success" name="btnLogin" id="btnLogin"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Iniciar Sesi&oacute;n</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Fin navbar-->
       

    <div class="container">
    <div class="jumbotron">
      <div class="container">
        <h1>Acerca de Desosur</h1>
        <br>
        <div class="row">
            <div class="col-md-8">
              <p class="text-justify">Hola.</p>          
            </div>            
        </div>          
    </div>
    </div>

      <hr>

      <footer>
        <p>&copy; Domosys 2014</p>
      </footer>
  <!--  </div>  /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jQuery/jquery.min.js"></script>
    <script src="js/assets/docs.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/extras_js/bootbox.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/validacionesLogin.js"></script>
  </body>
</html>
