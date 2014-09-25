<style type="text/css">
.color{
color:#ff8000;
}
</style>
<html>
<head>
</head>
<body>
<table>
<form method="post" action="moduserphp.php" >
	<tr>
		<td class="color">
		<b>Ingrese un ID_USUARIO:</b>
		<input type="text" name="id"/>
		<input type="submit" value="Enviar" name="enviar">
		</td>	
	</tr>
</form>	
</table>
</body>
</html>
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
		echo "<table class="."color"." align="."center"." width="."500"." border="."0".">
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
