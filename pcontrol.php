<?php
	require_once("clases/conexionBD.php");
	require_once("clases/usuario.php");
	require_once("clases/sistema.php");

	$conexion = new conexion();
	$conexion->conectar();
	$usuario = new usuario();
	$sistema = new sistema();
	
		//session_start();
	$tiempo_ahora = time();		// Se obtiene la hora actual 

	session_start();
	if(!isset($_SESSION["Login"]))	{
		header("location: login.php?error=1");
	}
	
	elseif ($tiempo_ahora > $_SESSION["Expire"]) {
			$tiempo_limite = $_SESSION["Expire"];
			$tiempo_transcurrido = ($tiempo_ahora - $tiempo_limite) / 60;		// arreglar calculo de minutos de inactividad para registro correcto en la tabla de auditoria
			//$calcular = $usuario->sesion_expirada($tiempo_transcurrido);
            header("location: login.php?error=4");
		}    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="imgs/favicon.ico">    	
    
    <title>Panel de Control del Usuario - RealState</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/extras css/dashboard.css" rel="stylesheet">
    
    <!-- Agregando el estilo para el switch bootstrap -->
    <link href="css/extras css/bootstrap-switch.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
	
  ?>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Panel de Control</a>
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men&uacute;<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="?op=luces"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Gestión Inmobiliaria</a></li>
                <li><a href="?op=sensores"><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;Sensores de Movimiento</a></li>
                <li class="divider"></li>
                <li><a href="?op=stats"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Estad&iacute;sticas de Uso Energ&eacute;tico</a></li>
                <li class="divider"></li>
                <li><a href="?op=datosPersonales"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Actualice sus Datos</a></li>
                <li class="divider"></li>
                <li><a href="?op=buzon"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Buz&oacute;n de Sugerencias</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="msjes_usuario.php">
          <button type="submit" class="btn btn-primary" name="btnLogout" id="btnLogout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Cerrar Sesi&oacute;n</button>
          </form>
        </div> <!-- fin navbar collapse-->
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="?op=gestion"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Gestión Inmobiliaria</a></li>
<!--            <li id="opAddUsr" name="opAddUsr" class="active" onClick="<?php //echo "Su nombre es " , get_class($bar) , "\n"; ?>"><a href="?op=main"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Mantenedor de Usuarios</a></li>		-->
          </ul>
          <ul class="nav nav-sidebar">      
            <li><a href="?op=sensores"><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;Sensores de Movimiento</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="?op=stats"><span class="glyphicon glyphicon-tasks"></span>&nbsp;&nbsp;Estad&iacute;sticas de Uso Energ&eacute;tico</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="?op=datosPersonales"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Actualice sus Datos</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="?op=buzon"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Buz&oacute;n de Sugerencias</a></li>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
        <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><span class="glyphicon glyphicon-saved"></span>&nbsp;&nbsp;Bienvenido a su panel de control:</strong>&nbsp;&nbsp;Elija una opci&oacute;n.
        </div>
       <!-- 	OCUPAR PARA PANELES INDIVIDUALES
        <div class="row">
                <div class="col-md-6 panel-warning">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Control de Luces</h2>
                </div>
                <div class="panel-body">
                <p class="text-justify">Controle las luces de su hogar desde cualquier dispositivo m&oacute;vil con acceso a Internet.</p>
                </div>
                </div>
				<div class="col-md-6 panel-danger">
                <div class="panel-heading">
                <h2><span class="glyphicon glyphicon-random"></span>&nbsp;&nbsp;Sensor de Movimiento con Notificaciones E-Mail</h2>
                </div>
                <div class="panel-body">  
                <p class="text-justify">En caso de detectar presencia no deseada en su hogar usted recibir&aacute; un correo de notificaci&oacute;n.</p>
                </div>
                </div>
         </div>
        -->
   		<?php 
		
		$id_user = $_SESSION["ID_User"];  // Se obtiene una sola vez el ID del usuario con sesion activa, para ocuparlo en variados métodos
		
		if(isset($_GET["reset"]))	{					
                $reset = $_GET["reset"];
                if ($reset == "1")
                {
					$command = escapeshellcmd('sudo /usr/bin/python /var/www/py/r.py');
					$output = shell_exec($command);
					echo $output;
				}
		}
		
		if(isset($_GET["error"])) 
		{
			$error = $_GET["error"];
			if ($error == 1)
			{	?>
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Usted no tiene los permisos para acceder a este contenido.
                </div> <?php
			}
		}
		
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "gestion")
			{
				?>
                <div class="row">
            	<div class="col-md-8 panel-success">
                    <div class="panel-heading">
                <h2>Gestión Inmobiliaria</h2>
				</div>
            	<div class="panel-body">
				<?php
				//$id_user = $_SESSION["ID_User"];			
				if (!$resultado = $usuario->listar_componentes_user($id_user))
				{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Ud. no posee componentes de luces asociados a su sistema de Dom&oacute;tica. Para mayor informaci&oacute;n p&oacute;ngase en contacto con nosotros.
                </div>
                <?php
				}
				
				else {
				?>
				<form role="form" name="frmControlLuces" id="frmControlLuces" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
				<?php
                for ($i=0; $i<count($resultado); $i++)
                    {
                        if ($resultado[$i]["TIPO_COMP"] == 1) 
                        {
							$id_componente = $resultado[$i]["ID_COMPONENTE"];
							$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = '$id_componente'";
							$ejecutar_uso = mysql_query($str_buscar);			
							$array_busqueda = mysql_fetch_array($ejecutar_uso);
							$uso_obtenido = $array_busqueda["ULTIMO_USO"];
							
							$str_select = "select * from uso where ID_USO = '$uso_obtenido'";
							$ejecutar_uso = mysql_query($str_select);			
							$array_select = mysql_fetch_array($ejecutar_uso);
							$id_uso = $array_select["ID_USO"];
							$id_comp = $array_select["ID_COMP"];
							$estado = $array_select["ESTADO"];
							$comentario_uso = $array_select["COMENTARIO_USO"];
                            //$resultado2 = $usuario->listar_uso_user($id_componente);
							//$estado = $resultado2[$i]["ESTADO"];                
                ?>
                <fieldset>
                <legend> Componente: <?php echo $resultado[$i]["NOMBRE_COMP"]; ?> </legend>
                <div class="form-group">
                <label for="cboEstado"> Estado: </label>
                <input type="hidden" name="nombreComp[]" id="nombreComp[]" value="<?php echo $resultado[$i]["NOMBRE_COMP"]; ?> " />
                <input type="hidden" name="estadoLuz[]" id="estadoLuz[]" value="<?php echo $estado; ?>" />
                <input type="hidden" name="idLuz[]" id="idLuz[]" value="<?php echo $resultado[$i]["ID_COMPONENTE"]; ?>" />
                <select class="form-control" name="cboEstado[]" id="cboEstado[]">
                    <option value="<?php if ($estado == 1) { echo "1"; } else { echo "0"; }?>" selected="selected"><?php if ($estado == 1) { echo "Luz Encendida"; } else { echo "Luz Apagada"; }?></option>
                    <option value="<?php if ($estado == 1) { echo "0"; } else { echo "1"; }?>"><?php if ($estado == 1) { echo "Luz Apagada"; } else { echo "Luz Encendida"; }?></option>
                </select>
                </div>
                </fieldset>
                <?php
						}	
					}
				
				?>
                
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnLuz" id="btnLuz" value="Guardar Cambios" />
                </div>
			</form>
            <br>
			<?php		}
				echo "</div></div></div>";
				}
			}
			
			
		
       if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "sensores")
                {
                ?>
                <div class="row">
            	<div class="col-md-8 panel-danger">
                    <div class="panel-heading">
                <h2>Sensores de Movimiento</h2>
				</div>
            	<div class="panel-body">
               
                <?php
				//$id_user = $_SESSION["ID_User"];			
				if (!$resultado = $usuario->listar_componentes_user($id_user))
				{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Ud. no posee componentes sensores de movimiento asociados a su sistema de Dom&oacute;tica. Para mayor informaci&oacute;n p&oacute;ngase en contacto con nosotros.
                </div>
                <?php
				}
				
				else {
					?>
					<form role="form" name="frmSensorMov<?php echo $j = $i+1;?>" id="frmSensorMov<?php echo $j = $i+1;?>" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
                	<?php
					for ($i=0; $i<count($resultado); $i++)
					{
						if ($resultado[$i]["TIPO_COMP"] == 0) {
							$id_componente = $resultado[$i]["ID_COMPONENTE"];
							$str_buscar = "select max(ID_USO) as ULTIMO_USO from uso where ID_COMP = '$id_componente'";
							$ejecutar_uso = mysql_query($str_buscar);			
							$array_busqueda = mysql_fetch_array($ejecutar_uso);
							$uso_obtenido = $array_busqueda["ULTIMO_USO"];
							
							$str_select = "select * from uso where ID_USO = '$uso_obtenido'";
							$ejecutar_uso = mysql_query($str_select);			
							$array_select = mysql_fetch_array($ejecutar_uso);
							$id_uso = $array_select["ID_USO"];
							$id_comp = $array_select["ID_COMP"];
							$estado = $array_select["ESTADO"];
							$comentario_uso = $array_select["COMENTARIO_USO"];
							//$resultado2 = $usuario->listar_uso_user($id_user);
							//echo $resultado2[$i]["ESTADO"];
					?>
					<fieldset>
					<legend> Componente: <?php echo $resultado[$i]["NOMBRE_COMP"]; ?> </legend>
					<div class="form-group">
					<label for="cboEstado"> Estado: </label>
                    <input type="hidden" name="nombreComp[]" id="nombreComp[]" value="<?php echo $resultado[$i]["NOMBRE_COMP"]; ?>" />
                    <input type="hidden" name="estadoSensor[]" id="estadoSensor[]" value="<?php echo $estado; ?>" />
                    <input type="hidden" name="idSensor[]" id="idSensor[]" value="<?php echo $resultado[$i]["ID_COMPONENTE"]; ?>" />
                    <select class="form-control" name="cboEstado[]" id="cboEstado[]">
                        <option value="<?php if ($estado == 1) { echo "1"; } else { echo "0"; }?>" selected="selected"><?php if ($estado == 1) { echo "Sensor Activado"; } else { echo "Sensor Desactivado"; }?></option>
                        <option value="<?php if ($estado == 1) { echo "0"; } else { echo "1"; }?>"><?php if ($estado == 1) { echo "Sensor Desactivado"; } else { echo "Sensor Activado"; }?></option>
                    </select>
					</div>
					</fieldset>
                    <?php
							}
						}
					?>
					<div class="form-group">
					<input type="submit" class="btn btn-danger" name="btnSensor" id="btnSensor" value="Guardar Cambios" />
					</div>       
				</form>
				<br>
				<?php		}
  					echo "</div></div></div>";
                   }
                }
		
		if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "stats")
                {
                ?>
        <h1 class="page-header">Estad&iacute;sticas de Uso Energ&eacute;tico</h1> 
        
        <?php
			if (!$resultado = $usuario->listar_uso_user($id_user))
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;A&uacute;n no se registra actividad del sistema de dom&oacute;tica.
                </div>
                <?php
			}
			else
			{
$totalEne = $totalFeb = $totalMar =  $totalAbr =  $totalMayo = $totalJun = $totalJul = $totalAgo = $totalSept = $totalOct = $totalNov = $totalDic = $subtotal = 0;
$dineroEne = $dineroFeb = $dineroMar = $dineroAbr = $dineroMayo = $dineroJun = $dineroJul = $dineroAgo = $dineroSept = $dineroOct = $dineroNov = $dineroDic = 0;
$horasEne = $horasFeb = $horasMar = $horasAbr = $horasMayo = $horasJun = $horasJul = $horasAgo = $horasSept = $horasOct = $horasNov = $horasDic = 0;
$kWhEne = $kWhFeb = $kWhMar = $kWhAbr = $kWhMayo = $kWhJun = $kWhJul = $kWhAgo = $kWhSept = $kWhOct = $kWhNov = $kWhDic = 0;
$potencia = 60;

				for ($i=0; $i<count($resultado); $i++)
				{
					// Completar para obtener el consumo por mes y graficarlo como corresponde
					$fecha = strtotime($resultado[$i]["FECH_HOR_INI"]);
					$var_mes = date('m', $fecha);
					//echo $var_mes;
					switch($var_mes) {
						case 01:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalEne += $subtotal;
							$horasEne = ($totalEne/60)/60;
							$kWhEne = ceil(($potencia * $horasEne)/1000);
							$dineroEne = ceil($kWhEne * 88.1);
							$subtotal = 0;
							break;
						case 02:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalFeb += $subtotal;
							$horasFeb = ($totalFeb/60)/60;
							$kWhFeb = ceil(($potencia * $horasFeb)/1000);
							$dineroFeb = ceil($kWhFeb * 88.1);
							$subtotal = 0;
							break;
						case 03:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalMar += $subtotal;
							$horasMar = ($totalMar/60)/60;
							$kWhMar = ceil(($potencia * $horasMar)/1000);
							$dineroMar = ceil($kWhMar * 88.1);
							$subtotal = 0;
							break;
						case 04:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalAbr += $subtotal;
							$horasAbr = ($totalAbr/60)/60;
							$kWhAbr = ceil(($potencia * $horasAbr)/1000);
							$dineroAbr = ceil($kWhAbr * 88.1);
							$subtotal = 0;
							break;
						case 05:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalMayo += $subtotal;
							$horasMayo = ($totalMayo/60)/60;
							$kWhMayo = ceil(($potencia * $horasMayo)/1000);
							$dineroMayo = ceil($kWhMayo * 88.1);
							$subtotal = 0;
							break;
						case 06:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalJun += $subtotal;
							$horasJun = ($totalJun/60)/60;
							$kWhJun = ceil(($potencia * $horasJun)/1000);
							//SEGUIR LLENANDO PARA LOS DEMAS MESES
							$dineroJun = ceil($kWhJun * 88.1);
							//$dineroJun = number_format(($kWhJun * 88.1), 0, ",", ".");
							//number_format($dineroJun, 2, ",", ".");
							$subtotal = 0;
							break;
						case 07:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalJul += $subtotal;
							$horasJul = ($totalJul/60)/60;
							$kWhJul = ceil(($potencia * $horasJul)/1000);
							$dineroJul = ceil($kWhJul * 88.1);
							$subtotal = 0;
							break;
						case 08:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalAgo += $subtotal;
							$horasAgo = ($totalAgo/60)/60;
							$kWhAgo = ceil(($potencia * $horasAgo)/1000);
							$dineroAgo = ceil($kWhAgo * 88.1);
							$subtotal = 0;
							break;
						case 09:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalSept += $subtotal;
							$horasSept = ($totalSept/60)/60;
							$kWhSept = ceil(($potencia * $horasSept)/1000);
							$dineroSept = ceil($kWhSept * 88.1);
							$subtotal = 0;
							break;
						case 10:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalOct += $subtotal;
							$horasOct = ($totalOct/60)/60;
							$kWhOct = ceil(($potencia * $horasOct)/1000);
							$dineroOct = ceil($kWhOct * 88.1);
							$subtotal = 0;
							break;
						case 11:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalNov += $subtotal;
							$horasNov = ($totalNov/60)/60;
							$kWhNov = ceil(($potencia * $horasNov)/1000);
							$dineroNov = ceil($kWhNov * 88.1);
							$subtotal = 0;
							break;
						case 12:
							$fecha_ini = strtotime($resultado[$i]["FECH_HOR_INI"]);
							$fecha_fin = strtotime($resultado[$i]["FECH_HOR_FIN"]);
							$subtotal = $fecha_fin - $fecha_ini;
							$totalDic += $subtotal;
							$horasDic = ($totalDic/60)/60;
							$kWhDic = ceil(($potencia * $horasDic)/1000);
							$dineroDic = ceil($kWhDic * 88.1);
							$subtotal = 0;
							break;
						default:
							//echo '$variable no es igual a 1, 2 o 3.';
					}
				}
				
				//echo "Ene: " . $totalEne . " segundos.<br>Feb: " . $totalFeb . " segundos.<br>Junio: " . $kWhJun . " kWh. $$: " . $dineroJun . "<br>Julio: " . $kWhJul . " kWh. $$: " . $dineroJul . "<br>";				
				?>
                <img class="img-responsive" src="graficos/pChart2.1.4/graficos.php?graf=3&ene=<?php echo $dineroEne; ?>&feb=<?php echo $dineroFeb;?>&mar=<?php echo $dineroMar;?>&abr=<?php echo $dineroAbr;?>&may=<?php echo $dineroMayo;?>&jun=<?php echo $dineroJun;?>&jul=<?php echo $dineroJul;?>&ago=<?php echo $dineroAgo;?>&sept=<?php echo $dineroSept;?>&oct=<?php echo $dineroOct;?>&nov=<?php echo $dineroNov;?>&dic=<?php echo $dineroDic;?>" />
                
                <br><br>
                <div class="form-group">

                <table class="table table-bordered table-striped">
                <tr>
                    <th class="col-md-1 info">Mes</th>
                    <th class="col-md-1 info">Consumo el&eacute;ctrico mensual (kWh)</th>
                    <th class="col-md-2 info">Monto mensual ($)</th>
                </tr>
                <tr>
                    <td>Enero</td>
                    <td><?php echo $kWhEne; ?> kWh</td>
                    <td>$ <?php $dineroEne = number_format(ceil($kWhEne * 88.1), 0, ",", "."); echo $dineroEne; ?></td>
                </tr>
                <tr>
                    <td>Febrero</td>
                    <td><?php echo $kWhFeb; ?> kWh</td>
                    <td>$ <?php $dineroFeb = number_format(ceil($kWhFeb * 88.1), 0, ",", "."); echo $dineroFeb; ?></td>
                </tr>
                <tr>
                    <td>Marzo</td>
                    <td><?php echo $kWhMar; ?> kWh</td>
                    <td>$ <?php $dineroMar = number_format(ceil($kWhMar * 88.1), 0, ",", "."); echo $dineroMar; ?></td>
                </tr>
                <tr>
                    <td>Abril</td>
                    <td><?php echo $kWhAbr; ?> kWh</td>
                    <td>$ <?php $dineroAbr = number_format(ceil($kWhAbr * 88.1), 0, ",", "."); echo $dineroAbr; ?></td>
                </tr>
                <tr>
                    <td>Mayo</td>
                    <td><?php echo $kWhMayo; ?> kWh</td>
                    <td>$ <?php $dineroMayo = number_format(ceil($kWhMayo * 88.1), 0, ",", "."); echo $dineroMayo; ?></td>
                </tr>
                <tr>
                    <td>Junio</td>
                    <td><?php echo $kWhJun; ?> kWh</td>
                    <td>$ <?php $dineroJun = number_format(ceil($kWhJun * 88.1), 0, ",", "."); echo $dineroJun; ?></td>
                </tr>
                <tr>
                    <td>Julio</td>
                    <td><?php echo $kWhJul; ?> kWh</td>
                    <td>$ <?php $dineroJul = number_format(ceil($kWhJul * 88.1), 0, ",", "."); echo $dineroJul; ?></td>
                </tr>
                <tr>
                    <td>Agosto</td>
                    <td><?php echo $kWhAgo; ?> kWh</td>
                    <td>$ <?php $dineroAgo = number_format(ceil($kWhAgo * 88.1), 0, ",", "."); echo $dineroAgo; ?></td>
                </tr>
                <tr>
                    <td>Septiembre</td>
                    <td><?php echo $kWhSept; ?> kWh</td>
                    <td>$ <?php $dineroSept = number_format(ceil($kWhSept * 88.1), 0, ",", "."); echo $dineroSept; ?></td>
                </tr>
                <tr>
                    <td>Octubre</td>
                    <td><?php echo $kWhOct; ?> kWh</td>
                    <td>$ <?php $dineroOct = number_format(ceil($kWhOct * 88.1), 0, ",", "."); echo $dineroOct; ?></td>
                </tr>
                <tr>
                    <td>Noviembre</td>
                    <td><?php echo $kWhNov; ?> kWh</td>
                    <td>$ <?php $dineroNov = number_format(ceil($kWhNov * 88.1), 0, ",", "."); echo $dineroNov; ?></td>
                </tr>
                <tr>
                    <td>Diciembre</td>
                    <td><?php echo $kWhDic; ?> kWh</td>
                    <td>$ <?php $dineroDic = number_format(ceil($kWhDic * 88.1), 0, ",", "."); echo $dineroDic; ?></td>
                </tr>
                </table>
				</div>
                <?php
				}
				//Tabla de datos mensuales
				?>
				            <?php
			}
        }
		
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "datosPersonales")
			{
			?>
            <div class="row">
            	<div class="col-md-8 panel-warning">
                    <div class="panel-heading">
            <h2>Actualice sus Datos</h2>
            </div>
            	<div class="panel-body">
            
            <?php
				//$id_user = $_SESSION["ID_User"];			
				if (!$resultado = $usuario->buscar_usuario($id_user))
				{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Ha ocurrido un problema la cargar sus datos. Por favor intente nuevamente en unos minutos m&aacute;s o p&oacute;ngase en contacto con nosotros.
                </div>
                <?php
				}
				
				else {
				for ($i=0; $i<count($resultado); $i++)
				{
			?>
            <form role="form" name="frmUpdateDatos" id="frmUpdateDatos" method="post" action="msjes_usuario.php" onSubmit="return algunaFuncion();">
                <fieldset>
        <form role="form" name="frmModificarUsuario" id="frmModificarUsuario" method="post" action="msjes_usuario.php" onSubmit="return validaVacios();">      
            <fieldset>
                <legend> Datos Personales </legend>
                <div class="form-group">
                <textarea class="form-control" rows="6" disabled>RUT: <?php echo $resultado[$i]["RUT"] . "\n"; ?>Nombres: <?php echo $resultado[$i]["NOMBRES"] . "\n"; ?>Apellido Paterno: <?php echo $resultado[$i]["APE_PATERNO"] . "\n"; ?>Apellido Materno: <?php echo $resultado[$i]["APE_MATERNO"] . "\n"; ?>Fecha de Nacimiento: <?php echo $resultado[$i]["FECHA_NAC"] . "\n"; ?>G&eacute;nero: <?php $sex = $resultado[$i]["GENERO"]; if ($sex=="M") { echo " Masculino" . "";  } elseif ($sex=="F") { echo " Femenino" . ""; } ?></textarea>
                </div>                                
                <div class="form-group">
                <label for="cboComuna"> Comuna: </label>
                <select class="form-control" name="cboComuna" id="cboComuna">
                    <option value="<?php echo $resultado[$i]["COMUNA"]; ?>" selected="selected"><?php echo $resultado[$i]["COMUNA"]; ?></option>
                    <option value="Cerrillos">Cerrillos</option>
                    <option value="Cerro Navia">Cerro Navia</option>
                    <option value="Conchali">Conchal&iacute;</option>
                    <option value="El Bosque">El Bosque</option>
                    <option value="Estacion Central">Estaci&oacute;n Central</option>
                    <option value="Huechuraba">Huechuraba</option>
                    <option value="Independencia">Independencia</option>
                    <option value="La Cisterna">La Cisterna</option>
                    <option value="La Florida">La Florida</option>
                    <option value="La Granja">La Granja</option>
                    <option value="La Pintana">La Pintana</option>
                    <option value="La Reina">La Reina</option>
                    <option value="Las Condes">Las Condes</option>
                    <option value="Lo Barnechea">Lo Barnechea</option>
                    <option value="Lo Espejo">Lo Espejo</option>
                    <option value="Lo Prado">Lo Prado</option>
                    <option value="Macul">Macul</option>
                    <option value="Maipu">Maip&uacute;</option>
                    <option value="Nunoa">&Ntilde;u&ntilde;oa</option>
                    <option value="Padre Hurtado">Padre Hurtado</option>
                    <option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>
                    <option value="Penalolen">Pe&ntilde;alol&eacute;n</option>
                    <option value="Pirque">Pirque</option>
                    <option value="Providencia">Providencia </option>
                    <option value="Pudahuel">Pudahuel</option>
                    <option value="Puente Alto">Puente Alto</option>
                    <option value="Quilicura">Quilicura</option>
                    <option value="Quinta Normal">Quinta Normal</option>
                    <option value="Recoleta">Recoleta</option>
                    <option value="Renca">Renca</option>
                    <option value="San Bernardo">San Bernardo</option>
                    <option value="San Joaquin">San Joaqu&iacute;n</option>
                    <option value="San Jose de Maipo">San Jos&eacute; de Maipo</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="San Ramon">San Ram&oacute;n</option>
                    <option value="Santiago">Santiago</option>
                    <option value="Vitacura">Vitacura</option>
                </select>
                </div>
                <div class="form-group">
                <label for="txtCalle"> Calle: </label>
                <input type="text" class="form-control" name="txtCalle" id="txtCalle" onKeyPress="return soloNumerosLetrasyGato(event);" placeholder="Ejemplo: Almirante Barroso #123" value="<?php echo $resultado[$i]["CALLE"]; ?>" />
                </div>                        
                <div class="form-group">
                <label for="txtTelMovil"> Tel&eacute;fono M&oacute;vil: </label>
                <input type="text" class="form-control" name="txtTelMovil" id="txtTelMovil" maxlength="8" placeholder="Ingresar solo n&uacute;meros. Ejemplo: 90123456" onKeyPress="return soloNumeros(event);" value="<?php echo $resultado[$i]["FONO_MOVIL"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtTelFijo"> Tel&eacute;fono Fijo: </label>
                <input type="text" class="form-control" name="txtTelFijo" id="txtTelFijo" maxlength="8" placeholder="Ingresar solo n&uacute;meros. Ejemplo: 23456789" value="<?php echo $resultado[$i]["FONO_FIJO"]; ?>" />
                </div>
                </fieldset>
                
                <br>
                <fieldset>
                <legend> Datos de Usuario </legend>
                <div class="form-group">
                <label for="txtEmail"> E-Mail: </label>
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" onBlur="return validaEmail();" maxlength="200" placeholder="algo@mail.com" value="<?php echo $resultado[$i]["EMAIL"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtUser"> Nombre de usuario: </label>
                <input type="text" class="form-control" name="txtUser" id="txtUser" disabled value="<?php echo $resultado[$i]["USER_CLIE"]; ?>"/>
                </div>
                <div class="form-group">
                <label for="txtPass1"> Cambiar Contrase&ntilde;a: </label>
                <input type="password" class="form-control"name="txtPass1" id="txtPass1" maxlength="20" onKeyPress="return soloNumerosYletras(event);" placeholder="M&aacute;ximo 20 caracteres" value="<?php echo $resultado[$i]["PASS_CLIE"]; ?>"/>
                </div>
                <div class="form-group">
                <label for="txtPass2"> Repita contrase&ntilde;a: </label>
                <input type="password" class="form-control" name="txtPass2" id="txtPass2" onBlur="return passIguales();" maxlength="20" onKeyPress="return soloNumerosYletras(event);" placeholder="M&aacute;ximo 20 caracteres. Debe coincidir con la contrase&ntilde;a antes ingresada." />
                </div>
                </fieldset>
                
                <div class="form-group">
                <input type="submit" class="btn btn-warning" name="btnModificar" id="btnModificar" value="Modificar Usuario" />
                <input type="reset" class="btn btn-default" name="btnBorrar" id="btnBorrar" value="Borrar campos" />
                </div>       
            </form>
        <?php
			}
			}
			echo "</div></div></div>";
		}
		}

		
        
        if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "buzon")
                {
                ?>
                <div class="row">
            	<div class="col-md-8 panel-info">
                    <div class="panel-heading">
            <h2>D&eacute;jenos sus comentarios</h2>
            </div>
            	<div class="panel-body">
        <form role="form" name="frmContacto" id="frmContacto" method="post" action="msjes_usuario.php" onSubmit="return validaComentarioVacio();">
                	<fieldset>
                    <legend class="text-left">Env&iacute;enos sus sugerencias para hacer de este un producto cada d&iacute;a mejor</legend>
                    <br>
                    <div class="form-group">
                    <textarea class="form-control" rows="5" name="txtComentario" id="txtComentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info" name="btnSugerencia" id="btnSugerencia"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Enviar comentario</button>
                    </fieldset>
                </form>
        <?php
            }
			echo "</div></div></div>";
        }
		?>
        
          
        </div>
      </div>
    </div>

	<hr>
    <!--
    <footer>
        <p><a href="?reset=1">&copy;</a> Domosys 2014</p>
      </footer>
      -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/jQuery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/assets/docs.min.js"></script>
    <script src="js/extras_js/bootbox.min.js"></script>    
    <script src="js/extras_js/bootstrap-switch.min.js"></script>
    <script src="js/validaciones.js"></script>
        
  </body>
</html>
