<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imgs/favicon.ico"> 

	<title>Mensajes - Domosys</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
require_once("./clases/conexionBD.php");
require_once("./clases/sistema.php");

	$conexion = new conexion();
	$conexion->conectar();
	$sistema = new sistema();
	
	
	?>
    <br>
    <div class="container">
    <div class="panel panel-primary">
    	<div class="panel-heading">
        <h3 class="panel-title">Redireccionando...</h3>
        </div>
        <div class="panel-body">
		<?php
        if (isset($_POST["btnAgregarRasp"]))
        {
		$agregar = $sistema->agregar_rasp($_POST["cboClientes"], $_POST["txtNumSerieRasp"], $_POST["txtMACRasp"], $_POST["cboEth"], $_POST["cboWiFi"]);
			if (!$agregar)
			{
			echo "No es posible agregar la nueva placa Raspberry.";
			header('refresh:2; url=pcontrol_admin.php?op=agregarSist');
			}
			else
			{
			echo "Placa Raspberry agregada con &eacute;xito";
			header('refresh:2; url=pcontrol_admin.php?op=auditoriaAdmin');			
			}
			echo "</div></div>";
        }
		


		if (isset($_POST["btnAgregarArd"]))
        {
		$agregar = $sistema->agregar_ard($_POST["cboRaspberry"], $_POST["cboModelo"], $_POST["txtNumSerieArd"], $_POST["txtPuertoCOM"]);
			if (!$agregar)
			{
			echo "No es posible agregar la nueva placa Arduino.";
			header('refresh:2; url=pcontrol_admin.php?op=agregarSist');
			}
			else
			{
			echo "Placa Arduino agregada con &eacute;xito";
			header('refresh:2; url=pcontrol_admin.php?op=agregarSist');			
			}
			echo "</div></div>";
        }
		
		if (isset($_POST["btnAgregarComp"]))
        {
			$agregar = $sistema->agregar_comp($_POST["cboArduino"], $_POST["cboPinArd"], $_POST["txtNombreComp"]);
			if (!$agregar)
			{
			echo "No es posible asociar el componente a la placa Arduino.";
			header('refresh:2; url=pcontrol_admin.php?op=agregarSist');
			}
			else
			{
			echo "Componente asociado con &eacute;xito";
			header('refresh:2; url=pcontrol_admin.php?op=agregarSist');			
			}
			echo "</div></div>";
        }


	if (isset($_POST["btnEliminar"]))
	{
		$eliminar = $usuario->eliminar_usuario($_POST[""]);
		if (!$eliminar)
		{
		echo "No es posible eliminar el cliente.";
		header('refresh:6; url=pcontrol_admin.php?op=eliminarUser');
		}
		else
		{
		echo "Cliente eliminado  con éxito";
		header('refresh:6; url=pcontrol_admin.php?op=auditoriaAdmin');			
		}
		echo "</div></div>";
	}
	
	if (isset($_POST["btnLuz"])) 
	{
		$estado = $_POST["cboEstado"];
		//echo $estado;
		//$val_chek = $_POST['checkLuz'];
		//echo $val_chek;
		if ($estado == 1) {
		$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_on.py');
		$output = shell_exec($command);
		echo $output;
		echo "Luz Encendida.";
		header('refresh:2; url=pcontrol.php');
		}
		else {
		$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_off.py');
		$output = shell_exec($command);
		echo $output;
		echo "Luz Apagada.";
		header('refresh:2; url=pcontrol.php');
		}
		echo "</div></div>";
	}
	
	if (isset($_POST["btnSensor"])) 
	{
		$estado = $_POST["cboEstado"];
		//echo $estado;
		//$val_chek = $_POST['checkLuz'];
		//echo $val_chek;
		if ($estado == 1) {
		$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/pir_on.py');
		$output = shell_exec($command);
		echo $output;
		echo "Sensor de Movimiento Encendido.";
		header('refresh:2; url=pcontrol.php');
		}
		else {
		$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/pir_off.py');
		$output = shell_exec($command);
		echo $output;
		echo "Sensor de Movimiento Apagado.";
		header('refresh:2; url=pcontrol.php');
		}
		echo "</div></div>";
	}

	
?>
</div>
</body>
</html>