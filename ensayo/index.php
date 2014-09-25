<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imgs/favicon.ico">
	
    <title>Domosys - El control de su vivienda en sus manos</title>
	
    <script src="js/validacionesLogin.js"></script>
    
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

  <body role="document">

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
          <form class="navbar-form navbar-right" role="form" name="frmLogin" id="frmLogin" method="post" action="msjes_usuario.php" onSubmit="return validaLoginVacios();">
            <div class="form-group">
              <input type="text" name="txtUsuario" id="txtUsuario" placeholder="Usuario" class="form-control" >
            </div>
            <div class="form-group">
              <input type="password" name="txtPassword" id="txtPassword" placeholder="Contrase&ntilde;a" class="form-control">
            </div>
            <button type="submit" class="btn btn-success" name="btnLogin" id="btnLogin"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Iniciar Sesi&oacute;n</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Fin navbar-->
    
    <!-- Inicio Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="imgs/luces.jpg" alt="Control de Luces" class="img-responsive">          
<!--          <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">	-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Control de Luces</h1>
              <p>Controle las luces de su vivienda desde su cualquier dispositivo con acceso a Internet.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="imgs/sensor.jpg" alt="Sensor de Movimiento" class="img-responsive">
 <!--         <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide">	-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Sensor de Movimiento con Notificaciones V&iacute;a E-Mail</h1>
              <p>&iquest;Teme dejar su vivienda sola cuando sale de viaje? Despreoc&uacute;pese, Domosys le avisar&aacute; si alguien no autorizado ha entrado a su vivienda, para dar aviso oportuno a carabineros.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="imgs/stats.jpg" alt="Estadísticas" class="img-responsive">
<!--          <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide">	-->
          <div class="container">
            <div class="carousel-caption">
              <h1>Estad&iacute;sticas de Uso Energ&eacute;tico</h1>
              <p>Vea f&aacute;cilmente sus estad&iacute;sticas de uso de energ&iacute;a el&eacute;ctrica para maximizar la eficiencia energ&eacute;tica.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
   

    <div class="container">
         <div class="jumbotron">
          <div class="container">
            <h1 class="modal-title">Bienvenido a la era de la Dom&oacute;tica Accesible</h1>
            <br>
            <div class="row">
                <div class="col-md-6 panel-warning">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Control de Luces</h2>
                </div>
                <div class="panel-body">
                <p class="text-justify">Controle las luces de su hogar desde cualquier dispositivo m&oacute;vil con acceso a Internet.</p>
                </div>
                </div>
				<div class="col-md-6 panel-danger">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;Sensor de Movimiento con Notificaciones E-Mail</h2>
                </div>
                <div class="panel-body">  <!-- originalmente clase "panel-body" -->
                <p class="text-justify">En caso de detectar presencia no deseada en su hogar usted recibir&aacute; un correo de notificaci&oacute;n.</p>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 panel-success">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-step-forward"></span>&nbsp;&nbsp;Escalabilidad de Componentes</h2>
                </div>
                <div class="panel-body">
                <p class="text-justify">A&ntilde;ada componentes a su sistema Domosys cuando usted desee. S&oacute;lo p&oacute;ngase en contacto con nosostros.</p>
                </div>
                </div>
				<div class="col-md-6 panel-info">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Estad&iacute;sticas de Uso Energ&eacute;tico</h2>
                </div>
                <div class="panel-body">  <!-- originalmente clase "panel-body" -->
                <p class="text-justify">Examine el consumo energ&eacute;tico de su vivienda desde la comodidad de su dispositivo m&oacute;vil.</p>
                </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 panel-primary">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-lock"></span>&nbsp;&nbsp;Encriptaci&oacute;n de su contrase&ntilde;a</h2>
                </div>
                <div class="panel-body">
                <p class="text-justify">Olv&iacute;dese de hacks al sitio web, su contrase&ntilde;a siempre estar&aacute; a salvo gracias a la encriptaci&oacute;n AES de 256 bits.</p>
                </div>
                </div>
				<div class="col-md-6 panel-default">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-dashboard"></span>&nbsp;&nbsp;Panel de Control Adaptable a Cualquier Dipositivo M&oacute;vil</h2>
                </div>
                <div class="panel-body">
                <p class="text-justify">Acceda al panel de control desde cualquier dispositvo: smartphone, tablet o laptop. Siempre obtendr&aacute; una experiencia agradable.</p>
                </div>
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
    
  </body>
</html>
