<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Modificar Usuario</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


</head>
<div id="art-main">
<body>

<br>
<h2 align="center">Modificar Usuario</h2>
<br>
<br>
<br>
<br>
<?php
$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "password1.";
$db = "bd_prueba";

//$conexion = @mysql_connect($dbhost, $dbuser, $dbpass)or die(mysql_error());
//{
$conexion=mysql_connect($dbhost, $dbuser, $dbpass);
if(mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error()));
{
//Selección de la base de datos.
mysql_select_db($db, $conexion);
//Seleecionar todo de tabla usuario
$dat=mysql_query("SELECT * FROM usuario");

while($fila=mysql_fetch_array($dat))
	{
		echo "<table align="."center"." width="."500"." border="."0".">
  <tr>
    <td>Id Usuario:</td>
    <td>".$fila["ID_USUARIO"]."</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td>".$fila["NOMBRE"]."</td>
  </tr>
  <tr>
    <td>Apellido Paterno:</td>
    <td>".$fila["APE_PATERNO"]."</td>
  </tr>
  <tr>
    <td>Apellido Materno:</td>
    <td>".$fila["APE_MATERNO"]."</td>
  </tr>
  <tr>
    <td>Nick:</td>
    <td>".$fila["NOM_USER"]."</td>
  </tr>
  <tr>
    <td>Clave Usuario:</td>
    <td>".$fila["PASS_USER"]."</td>
  </tr>
 
</table>
</br>
";
	}
}

?>

    </div>
</div>

</body></html>
