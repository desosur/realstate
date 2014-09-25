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
require_once("clases/conexionBD.php");
require_once("clases/sistema.php");

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
			echo $_POST["cboRaspberry"] . " " . $_POST["cboModelo"] . " " . $_POST["txtNumSerieArd"] . " " . $_POST["cboPuertoCOM"] . " ";
		$agregar = $sistema->agregar_ard($_POST["cboRaspberry"], $_POST["cboModelo"], $_POST["txtNumSerieArd"], $_POST["cboPuertoCOM"]);
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
			echo $_POST["cboArduino"] . " " . $_POST["cboPinArd"] . " " . $_POST["cboTipoComp"] . " " . $_POST["txtNombreComp"] . " ";
			$agregar = $sistema->agregar_comp($_POST["cboArduino"], $_POST["cboPinArd"], $_POST["cboTipoComp"], $_POST["txtNombreComp"]);
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


	/*if (isset($_POST["btnEliminar"]))
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
	}*/
	
	if (isset($_POST["btnLuz"])) 
	{
		if(isset($_POST['cboEstado']))
		{
		$estado_anterior = $_POST['estadoLuz'];
		$M = count($estado_anterior);
		
		$estado_actual = $_POST['cboEstado'];
		$N = count($estado_actual);
		
		$id_light = $_POST['idLuz'];
		$O = count($id_light);
		
		$nombre_comp = $_POST['nombreComp'];
		$P = count($nombre_comp);
		
		for($i=0; $i < $O; $i++)
		{
			$j = $i + 1;
			/*
			echo $M . " " . $i . " "  . $j . " ";			
			echo "ID Luz: " . $id_light[$i] . " ";
			echo "Estado anterior: " . $estado_anterior[$i] . " ";
			echo "Estado actual: " . $estado_actual[$i] . " ";*/
			if (($estado_anterior[$i] != $estado_actual[$i]) && ($estado_actual[$i] == 1))
			{
				//echo "Encendiendo " . $nombre_comp[$i] . " ";
				//echo "Ejecutando script led ON " . $j . " ";
				if ($j == 1) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_on1.py');
				}
				elseif ($j == 2) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_on2.py');
				}
				$output = shell_exec($command);
				echo $output;
				
				// SQL				
				$comentario = $nombre_comp[$i] . " Encendida.";
				
				/*
				$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = $id_light[$i];";
				$ejecutar_uso = mysql_query($str_buscar);			
				$arr = mysql_fetch_array($ejecutar_uso);
				$uso_obtenido = $arr["ULTIMO_USO"];*/
				
				/*
				$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = $id_light[$i];";
				$ejecutar_uso = mysql_query($str_buscar);			
				$arr = mysql_fetch_array($ejecutar_uso);
				$uso_obtenido = $arr["ULTIMO_USO"];				
				
				$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario', FECH_HOR_INI = CURRENT_TIMESTAMP, FECH_HOR_FIN = null where ID_USO = '$uso_obtenido';";*/
				$str = "insert into uso values (null, '$id_light[$i]', '$estado_actual[$i]', '$comentario', CURRENT_TIMESTAMP, null);";
				//$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario' where ID_COMP = $id_light[$i]; 
				$ejecutar =  mysql_query($str);
				echo $comentario;
			}

			elseif (($estado_anterior[$i] != $estado_actual[$i]) && ($estado_actual[$i] == 0))
			{
				//echo "Apagando " . $nombre_comp[$i] . " ";
				//echo "Ejecutando script led OFF " . $j . " ";
				if ($j == 1) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_off1.py');
				}
				elseif ($j == 2) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_off2.py');
				}
				$output = shell_exec($command);
				//echo $output;
				
				// SQL
				$comentario = $nombre_comp[$i] . " Apagada.";
				
				$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = $id_light[$i];";
				$ejecutar_uso = mysql_query($str_buscar);			
				$arr = mysql_fetch_array($ejecutar_uso);
				$uso_obtenido = $arr["ULTIMO_USO"];				
				
				$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario', FECH_HOR_FIN = CURRENT_TIMESTAMP where ID_USO = '$uso_obtenido';";
				//$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario' where ID_COMP = $id_light[$i]; ";
				$ejecutar =  mysql_query($str);
				echo $comentario;			
			}
			elseif (($estado_anterior[$i] == $estado_actual[$i]))
			{
				echo "La " . $nombre_comp[$i] . " no ha sido modificada en su estado.";
			}
			echo "<br><br>";
		}
		?>
        <br><br>
        <div class="progress progress-striped active" style="width: 100%">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <span class="sr-only"></span> Cargando sus modificaciones...
        </div>
        </div>
        <?php
		header('refresh:6; url=pcontrol.php');
		}
		echo "</div></div>";
	}
	
	if (isset($_POST["btnSensor"])) 
	{
		if(isset($_POST['cboEstado']))
		{
		$estado_anterior = $_POST['estadoSensor'];
		$M = count($estado_anterior);
		
		$estado_actual = $_POST['cboEstado'];
		$N = count($estado_actual);
		
		$id_sensor = $_POST['idSensor'];
		$O = count($id_sensor);
		
		$nombre_comp = $_POST['nombreComp'];
		$P = count($nombre_comp);
		
		for($i=0; $i < $O; $i++)
		{
			$j = $i + 1;
			/*
			echo $M . " " . $i . " "  . $j . " ";			
			echo "ID Sensor: " . $id_sensor[$i] . " ";
			echo "Estado anterior: " . $estado_anterior[$i] . " ";
			echo "Estado actual: " . $estado_actual[$i] . " ";*/
			if (($estado_anterior[$i] != $estado_actual[$i]) && ($estado_actual[$i] == 1))
			{
				//echo "Activando " . $nombre_comp[$i] . " ";
				//echo "Ejecutando script Pir ON " . $j . " ";
				if ($j == 1) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/pir_on.py');
				}
				/*elseif ($j == 2) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_on2.py');
				}*/
				$output = shell_exec($command);
				echo $output;
				
				// SQL
				$comentario = $nombre_comp[$i] . " Activado.";
				$str = "insert into uso values (null, '$id_sensor[$i]', '$estado_actual[$i]', '$comentario', CURRENT_TIMESTAMP, null);";
				//$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario' where ID_COMP = $id_sensor[$i]; ";
				$ejecutar =  mysql_query($str);
				echo $comentario;
			}

			elseif (($estado_anterior[$i] != $estado_actual[$i]) && ($estado_actual[$i] == 0))
			{
				//echo "Desactivando " . $nombre_comp[$i] . " ";
				//echo "Ejecutando script Pir OFF " . $j . " ";
				if ($j == 1) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/pir_off.py');
				}
				/*elseif ($j == 2) {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/led_off2.py');
				}*/
				$output = shell_exec($command);
				echo $output;
				
				// SQL
				$comentario = $nombre_comp[$i] . " Desactivado.";
				
				$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = $id_sensor[$i];";
				$ejecutar_uso = mysql_query($str_buscar);			
				$arr = mysql_fetch_array($ejecutar_uso);
				$uso_obtenido = $arr["ULTIMO_USO"];				
				
				$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario', FECH_HOR_FIN = CURRENT_TIMESTAMP where ID_USO = '$uso_obtenido';";				
				//$str = "update uso set ESTADO = $estado_actual[$i], COMENTARIO_USO = '$comentario' where ID_COMP = $id_sensor[$i]; ";
				$ejecutar =  mysql_query($str);
				echo $comentario;
			}
			elseif (($estado_anterior[$i] == $estado_actual[$i]))
			{
				echo "El " . $nombre_comp[$i] . " no ha sido modificado en su estado.";
			}
			echo "<br><br>";
		}
		?>
        <br><br>
        <div class="progress progress-striped active" style="width: 100%">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
        <span class="sr-only"></span> Cargando sus modificaciones...
        </div>
        </div>
        <?php
		header('refresh:6; url=pcontrol.php');
		}
		echo "</div></div>";
	}
	
	
	if (isset($_POST["btnEliminar"]))
	{
		
		$id	= $_POST['checkDel'];
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{			
			$result = mysql_query("delete from raspberry where ID_RASPBERRY = '$id[$i]';");
			if (!$result) 
				$indicador = 0;
			else
				$indicador = 1;		
		}
		if ($indicador == 0) 
		{
			echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible eliminar el(los) sistema(s).";
			echo "<br><br>";
			?>
			<div class="progress progress-striped active" style="width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only"></span> Volviendo a Panel de Control del Administrador...
			</div>
			</div>
			<?php
			header('refresh:3; url=pcontrol_admin.php');
		}
		else
		{
			echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Sistema(s) eliminado(s) con éxito.";
			echo "<br><br>";
			?>
			<div class="progress progress-striped active" style="width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only"></span> Cargando Eventos de Auditor&iacute;a de Sistema...
			</div>
			</div>
			<?php
			header('refresh:3; url=pcontrol_admin.php?op=eventosSist');			
		}
		echo "</div></div>";
	}
	
	
	
	/*
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
	}*/

	
?>
</div>
</body>
</html>