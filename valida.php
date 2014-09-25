<?php
$dbhost = "localhost";
$dbuser = "admin";
$dbpass = "test";
$db = "bd_prueba";
$salt = "llave_AES";

$nombre ="";

session_start();

$conexion = @mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($db) or die('no se puede conectar a la bd'.mysql_error());

if($_POST["btnenviar"]){
$username = $_POST["user"];
$password = $_POST["pass"];

//$query = mysql_query("SELECT NOM_USER,PASS_USER FROM usuario WHERE  NOM_USER = '$username' and PASS_USER = '$password'");
//$data = mysql_fetch_array($query);

/*PARA VER SI ES EL ADMINISTRADOR*/
//IN DEL IF DE ADMIN
if(($username == "admin") &&( $password == "test")){
	header("location:Administrador.php");
//header("location:Administrador.php");
}
/*
if($password==NULL){
//echo"la  password no fue ingresada";
header("location:ErrorUsuario.php");
}*/

// AES_DECRYPT(PASS_USER,'cadena') AS PASS_USER  ->  Desencripta y obtiene el campo con otro nombre
else{
$query = mysql_query("SELECT NOM_USER, AES_DECRYPT(PASS_USER,'$salt') AS PASS_USER FROM usuario WHERE NOM_USER = '$username'");
$data = mysql_fetch_array($query);
if($data['PASS_USER'] != $password){
//echo"Login incorrecto";
//echo($data['PASS_USER']);
header("location:ErrorUsuario.php");
}
else{
$query = mysql_query("SELECT NOM_USER, AES_DECRYPT(PASS_USER,'$salt') AS PASS_USER FROM usuario WHERE NOM_USER = '$username'");
$row =  mysql_fetch_array($query);
if ($_SESSION["username"] = $row["NOM_USER"])
{
}
$nombre = $row["NOMBRE"];
//echo("BIENVENIDO " .$_SESSION["username"]);
header("location:indexUsuario.php");
}
mysql_close($conexion);
}
}
?>