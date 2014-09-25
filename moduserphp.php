<?php

$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "password1.";
$db = "bd_prueba";

//$conexion = @mysql_connect($dbhost, $dbuser, $dbpass)or die(mysql_error());
//{
$conexion=mysql_connect($dbhost, $dbuser, $dbpass);
//(mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error()));

//Selección de la base de datos.
mysql_select_db($db, $conexion);

$id = $_POST["id"];
//Seleecionar todo de tabla usuario

$query = mysql_query("SELECT * FROM usuario");

$data = mysql_fetch_array($query);

if($data["ID_USUARIO"] == $id){
header("location:insertar.php");
}
else{
header:("location:ErrorModificar.php");
}


?>
