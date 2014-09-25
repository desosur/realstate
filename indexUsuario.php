<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Casa Control</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
	
	<style type="text/css">
	.botton{
	color: #ff6600;
	}
	</style>
	
</head>
<body>
<div id="art-main">
    <div class="art-sheet clearfix">
<header class="art-header clearfix">

    <div class="art-shapes">
<h1 class="art-headline" data-left="1.09%">
    <a href="#">DomoSys</a>
</h1>
<h2 class="art-slogan" data-left="1.45%">Smart Home</h2>


            </div>

<nav class="art-nav clearfix">
	<ul class="art-hmenu"><li><a href="CerrarSesion.php" class="active">Cerrar Sesion</a></li></ul> 
	<!--<ul class="art-hmenu"><li><a href="Servicios.html" class="active">Home</a></li></ul> -->
    <ul class="art-hmenu"><li><a href="Servicios.php" class="active">Persianas</a></li></ul> 
	<ul class="art-hmenu"><li><a href="QuienesSomos.php" class="active">Luz</a></li></ul> 
	<ul class="art-hmenu"><li><a href="Servicios.php" class="active">Notificaciones</a></li></ul> 
    </nav>

                    
</header>
<br>
<br>
<h2 class="art-postheader">Panel de Control</h2>
<br>
<div align="center">
		<table  class="TablaFormulario" border="3">
			<tr>
				<td >
				<!--<img src="images\planos-70m2.jpg"></img>-->
				fdfs
				</td>
				<td>
				<?php 
				session_start();
				//echo("Bienvenido " .$_SESSION["nombre"]);
				echo("Bienvenido " .$_SESSION["username"]);
				?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<img src="images/plano.jpg" alt="Plano Casa" usemap="#Map" border="0" >
				</td>
			</tr>
		</table>
		<!-- #### SECTORES DE LA IMAGEN  ####-->
		<map name="Map">
  <area shape="poly" coords="190,387" href="#" alt="Living">
  <area shape="poly" coords="4,3,156,3,156,193,298,186,297,231,155,232,155,357,60,358,60,474,3,474" href="living.php" alt="living">
  <area shape="poly" coords="494,234,494,22,332,25,331,90,300,91,299,233" href="suite.php" alt="piezaPrincipal">
  <area shape="poly" coords="159,21,331,23,330,87,299,88,297,182,160,186" href="pieza2.php" alt="pieza2">
  <area shape="poly" coords="388,359,388,237,224,235,224,356" href="pieza3.php" alt="pieza3">
</map>
</div>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"></div>
</article></div>
                    </div>
                </div>
            </div><footer class="art-footer clearfix">
</footer>

    </div>
</div>


</body></html>