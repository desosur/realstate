<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


</head>
<body>

<?php
   /*// incluímos la clase necesaria para la comunicación
   require("php_serial.class.php");

   $serial = new phpSerial;
   // indicamos que puerto serie queremos usar
   $serial->deviceSet("/dev/ttyACM0");
   // ahora la velocidad de transmisión de Arduino
   $serial->confBaudRate(115200);
   $serial->deviceOpen();

   // aquí el String que queremos enviar
   $serial->sendMessage("light");
   sleep (1);
   
   $serial->deviceClose();
   */
?>

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
    <ul class="art-hmenu"><li><a href="index.php" class="active">Home</a></li></ul> 
    </nav>

                    
</header>
<br>
<h3 class="art-postheader">Panel de control Living</h3>
<br>

<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                                
                <div class="art-postcontent art-postcontent-0 clearfix">
                
                <!--espacio para imagenes-->
                <table width="210" border="3">
                	<tr>
                    	<td width="90">
                        
                        ¿Encender o apagar luz?
                        <form action="on.php" method="post" action="" name="formLuzOn">
                        <input type="submit" value="Encender" />
                        </form>
                        <form action="off.php" method="post" action="" name="formLuzOff">
                        <input type="submit" value="Apagar" />
                        </form>                         
                        
                        </td>
                    </tr>
                    <tr>
                    	<td height="24">
                        ¿Habilitar o deshabilitar sensor de Temperatura?
                        <form action="OnOff.php" method="post" action="" name="">
                        <input type="submit" value="Habilitar" />
                        </form>
                        
                        </td>
                    </tr>
                    
                    <tr>
                    	<td height="24">
                        ¿Habilitar o deshabilitar sensor de Luz?
                        <form action="OnOff.php" method="post" action="" name="">
                        <input type="submit" value="Habilitar" />
                        </form>
                        
                        </td>
                    </tr>
                </table>
                
                
                
             </div>
</article></div>
                    </div>
                </div>
            </div>
	<footer class="art-footer clearfix">
</footer>
    </div>
</div>


</body></html>