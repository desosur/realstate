<?php
//if(isset( $_POST["btnadd"]))
$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "password1.";
$db = "bd_prueba";

$conexion = @mysql_connect($dbhost, $dbuser, $dbpass)or die(mysql_error());
//{

//Selección de la base de datos.
mysql_select_db($db, $conexion);
//Recibimos lo que ingresó por teclado el usuario y lo asignamos a un variable para un mejor manejo


?>