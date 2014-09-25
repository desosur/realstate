<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Agregar Usuario</title>
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
<h2 align="center">Agregar Usuario</h2>
<br>
<br>
<br>
<br>
<table  width="400px" align="center" border="2px">
<form name="agregarusuario" method="post" action="agregaruser.php">
	<tr width="300px">
		<td align="center">
		<b>Nombre De Usuario:</b>
		</td>
		<td align="center">
		<input type="text" name="nombre">
		</td>
	</tr>	
	<tr width="300px">
		<td align="center">
		<b>Apellido Paterno:</b>
		</td>
		<td align="center">
		<input type="text" name="apellidoP">
		</td>
	</tr>	
	<tr width="300px">
		<td align="center">
		<b>Apellido Materno:</b>
		</td>
		<td align="center">
		<input type="text" name="apellidoM">
		</td>
	</tr>
	<tr width="300px">
		<td align="center">
		<b>Nick:</b>
		</td>
		<td align="center">
		<input type="text" name="nick">
		</td>
	</tr>		
	<tr>
		<td align="center">
		<b>Contraseña</b>
		</td>
		<td align="center">
		<input type="password" name="pass">
		</td>
	</tr>
	<tr>
		<td align="center">
		<input type="submit" name="btnadd" value="Agregar" >
		</td>
		<td align="center">
		<input type="reset" name="limpiar" value="Limpiar" >
		</td>
	</tr>
	</form>
</table>
    </div>
</div>

</body></html>
