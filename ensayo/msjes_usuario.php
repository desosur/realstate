<?php 
   include("./clases/Mobile-Detect-2.7.9/Mobile_Detect.php");  // incluir la ruta correcta    
   
   $detect = new Mobile_Detect();
   $plataforma = "Escritorio";

	// para detectar la plataforma desde donde se conecta el cliente
     if ($detect->isTablet())		//cualquier tablet
	 {
		 $plataforma = "Tablet";
	    //$userAgent = $detect->getUserAgent();
	 	//header("location: movil.php?ua=$userAgent");
     }
     else if ($detect->isMobile()) 		//cualquier smartphone o tablet
	 {
		 $plataforma = "Smartphone";
		//$userAgent = $detect->getUserAgent(); 
		//header("location: tablet.php?ua=$userAgent"); 
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

	<title>Mensajes - Domosys</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
require_once("./clases/conexionBD.php");
require_once("./clases/usuario.php");

	$conexion = new conexion();
	$conexion->conectar();
	$usuario = new usuario();
	?>
    <br>
    <div class="container">
    <div class="panel panel-primary">
    	<div class="panel-heading">
        <h3 class="panel-title">Redireccionando...</h3>
        </div>
        <div class="panel-body">
        
        
            <?php
	 
	if (isset($_POST["btnLogin"]))
	{		
		// en login_usuario se incluye el metodo "registra_login" que guarda los datos de inicio de sesión
		$login = $usuario->login_usuario($_POST["txtUsuario"], $_POST["txtPassword"], $plataforma);
		if (!$login)
		{
			header("location: login.php?error=3");
			//echo "Usuario o contrase&ntilde;a no corresponden. Reintente nuevamente.";
			//header('refresh:3; url=login.php');
		}
		else
		{
			$username = $_SESSION["Login"];
			$nombres = $_SESSION["Nombres"];
			$genero = $_SESSION["Genero"];
			// Para redireccionar si el usuario es ADMIN o usuario normal ***Por el momento se verifica por nombre de usuario***
			if ($username == "admin") {
				echo "Bienvenido " . $nombres . ".";
				echo "<br><br>";
				?>
                <div class="progress progress-striped active" style="width: 100%">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only"></span> Cargando Panel de Control del Administrador...
                </div>
                </div>
                <?php
				header('refresh:3; url=pcontrol_admin.php');
			}
			else {
				if ($genero == "M")
					echo "Bienvenido " . $nombres . ".";
				else
					echo "Bienvenida " . $nombres . ".";
				echo "<br><br>";
				?>
                <div class="progress progress-striped active" style="width: 100%">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only"></span> Cargando Panel de Control...
                </div>
                </div>
                <?php
				header('refresh:3; url=pcontrol.php');
			}
			
		}
		echo "</div></div>";
	}
	
	
	// ****
	if (isset($_POST["btnLogout"]))
	{
		$logout = $usuario->logout_usuario();
		echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Ha cerrado sesi&oacute;n correctamente. Ser&aacute; redirigido a la pagina de inicio.";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando P&aacute;gina de Inicio...
		</div>
		</div>
		<?php
		header('refresh:3; url=index.php');
		echo "</div></div>";
	}

	
	if (isset($_POST["btnAgregar"]))
	{
		$date = $_POST["txtFechaNac"];
		$fecha_nac = date('Y-m-d', strtotime($date));
		//echo $date . " " . $fecha_nac . " "; //gives date as 2012-08-17
		$agregar = $usuario->agregar_usuario($_POST["txtRut"], $_POST["txtNombres"], $_POST["txtApePaterno"], $_POST["txtApeMaterno"], $fecha_nac, $_POST["radGenero"], $_POST["cboComuna"], $_POST["txtCalle"], $_POST["txtTelMovil"], $_POST["txtTelFijo"], $_POST["txtEmail"], $_POST["txtUser"], $_POST["txtPass2"] );
		if (!$agregar)
		{
		echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible agregar al nuevo cliente.";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando Nuevamente el Formulario de Nuevo Usuario...
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol_admin.php?op=agregarUser');
		}
		else
		{
		echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Cliente agregado con éxito";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando Eventos de Auditor&iacute;a de Usuario...
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol_admin.php?op=eventosUser');			
		}
		echo "</div></div>";
	}
	
	
	if (isset($_POST["btnModificar"]))
	{
		$date = $_POST["txtFechaNac"];
		$fecha_nac = date('Y-m-d', strtotime($date));
		//echo $date . " " . $fecha_nac . " "; //gives date as 2012-08-17
		
	/*	$o = $_POST["txtIDHidden"];
		$a = $_POST["txtRut2"];
		$b = $_POST["txtNombres"];
		$c = $_POST["txtApePaterno"];
		$d = $_POST['txtApeMaterno'];
		$e = $fecha_nac;
		$f = $_POST['cboComuna'];
		$g = $_POST['txtCalle'];
		$h = $_POST['txtTelMovil'];
		$i = $_POST['txtTelFijo'];
		$j =$_POST['txtEmail'];
		$k = $_POST['txtPass2']; */
		
		$modificar = $usuario->modificar_usuario($_POST["txtIDHidden"], $_POST["txtNombres"], $_POST["txtApePaterno"], $_POST["txtApeMaterno"], $fecha_nac, $_POST["cboComuna"], $_POST["txtCalle"], $_POST["txtTelMovil"], $_POST["txtTelFijo"], $_POST["txtEmail"], $_POST["txtPass2"]);
		if (!$modificar)
		{
		echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible modificar al cliente.";
		//echo "$o $a $b $c $d $e $f $g $h $i $j $k";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando Nuevamente el Formulario de Modificar Usuario...
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol_admin.php?op=modificarUser');
		}
		else
		{
		echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Cliente modificado con éxito.";
		//echo "$o $a $b $c $d $e $f $g $h $i $j $k";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando Eventos de Auditor&iacute;a de Usuario...
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol_admin.php?op=eventosUser');			
		}
		echo "</div></div>";
	}
	
	

	if (isset($_POST["btnEliminar"]))
	{
		
		$id	= $_POST['checkDel'];
		$N = count($id);
		for($i=0; $i < $N; $i++)
		{
			$result = mysql_query("delete from cliente where ID_CLIENTE = '$id[$i]';");
			if (!$result) 
				$indicador = 0;
			else
				$indicador = 1;		
		}
		if ($indicador == 0) 
		{
			echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible eliminar el cliente.";
			echo "<br><br>";
			?>
			<div class="progress progress-striped active" style="width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only"></span> Cargando Nuevamente el Formulario de Eliminar Usuario...
			</div>
			</div>
			<?php
			header('refresh:3; url=pcontrol_admin.php?op=eliminarUser');
		}
		else
		{
			echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Cliente(s) eliminado(s) con éxito";
			echo "<br><br>";
			?>
			<div class="progress progress-striped active" style="width: 100%">
			<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
			<span class="sr-only"></span> Cargando Eventos de Auditor&iacute;a de Usuario...
			</div>
			</div>
			<?php
			header('refresh:3; url=pcontrol_admin.php?op=eventosUser');			
		}
		echo "</div></div>";
	}
	
	if (isset($_POST["btnContacto"]))
	{
		$contacto = $usuario->guarda_contacto_persona($_POST["txtNombres"], $_POST["txtTelMovil"], $_POST["txtEmail"], $_POST["txtComentario"]);
		if (!$contacto)
		{
		echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible enviar su comentario, por favor intente nuevamente.";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Volviendo a Formulario de Contacto
		</div>
		</div>
		<?php
		header('refresh:3; url=contacto.php');
		}
		else
		{
		echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Comentario enviado con &eacute;xito";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando P&aacute;gina de Inicio...
		</div>
		</div>
		<?php
		header('refresh:3; url=index.php');			
		}
		echo "</div></div>";
	}
	
	if (isset($_POST["btnSugerencia"]))
	{
		session_start();
		$identi = $_SESSION["ID_User"];
		$user = $_SESSION["Login"];
		$sugerencia = $usuario->guarda_contacto_usuario($identi, $user, $_POST["txtComentario"]);
		if (!$sugerencia)
		{
		echo "<span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp; No es posible enviar su comentario, por favor intente nuevamente.";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Volviendo a Buz&oacute;n de Sugerencias
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol.php?op=buzon');
		}
		else
		{
		echo "<span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp; Comentario enviado con &eacute;xito";
		echo "<br><br>";
		?>
		<div class="progress progress-striped active" style="width: 100%">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
		<span class="sr-only"></span> Cargando Panel de Control...
		</div>
		</div>
		<?php
		header('refresh:3; url=pcontrol.php');			
		}
		echo "</div></div>";
	}
	

?>
</div>
</body>
</html>