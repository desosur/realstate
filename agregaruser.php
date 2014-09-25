<?php
//if(isset( $_POST["btnadd"]))
$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "test";
$db = "bd_prueba";
$salt = "llave_AES";

$conexion = @mysql_connect($dbhost, $dbuser, $dbpass)or die(mysql_error());
//{

//Selección de la base de datos.
mysql_select_db($db, $conexion);

//Recibimos lo que ingresó por teclado el usuario y lo asignamos a un variable para un mejor manejo
$nom = $_POST["nombre"];
$paterno = $_POST["apellidoP"];
$materno = $_POST["apellidoM"];
$nick = $_POST["nick"];
$clave = $_POST["pass"];

//Una vez recibidos el valor de cada campo, lo ingresaremos en la base de datos
mysql_query("insert into usuario(NOMBRE,APE_PATERNO,APE_MATERNO,NOM_USER,PASS_USER) values('$nom','$paterno','$materno','$nick', AES_ENCRYPT('$clave', '$salt') )",$conexion) or die (mysql_error());
//Le mencionamos al usuario que se ha registrado correctamente.
echo 'Te has registrado con éxito.';
?>

