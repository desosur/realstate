<?php
	require_once("./clases/conexionBD.php");
	require_once("./clases/usuario.php");
	require_once("./clases/sistema.php");

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
			$calcular = $usuario->sesion_expirada($tiempo_transcurrido);
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
    
    <title>Panel de Control del Usuario - Domosys</title>

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
              	<li><a href="?op=luces"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Control de Luces</a></li>
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
            <li class="active"><a href="?op=luces"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;Control de Luces</a></li>
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
			if ($seccion == "luces")
			{
				?>
                <h1 class="page-header">Control de Luces</h1>

				<?php
				//$id_user = $_SESSION["ID_User"];			
				if (!$resultado = $usuario->listar_luces_usuario($id_user))
				{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Ud. no posee componentes de luces asociados a su sistema de Dom&oacute;tica. Para mayor informaci&oacute;n p&oacute;ngase en contacto con nosotros.
                </div>
                <?php
				}
				
				else {
				for ($i=0; $i<count($resultado); $i++)
				{
					if ($resultado[$i]["TIPO_COMP"] == 1) {
			?>
            <form role="form" name="frmControlLuces<?php echo $j = $i+1;?>" id="frmControlLuces<?php echo $j = $i+1;?>" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
                <fieldset>
                <legend> Componente: <?php echo $resultado[$i]["NOMBRE_COMP"]; ?> </legend>
                <div class="form-group">
                <label for="txtTipoComp"> Tipo de Componente : </label>
                <input type="text" class="form-control" name="txtTipoComp" id="txtTipoComp" value="<?php if ($resultado[$i]["TIPO_COMP"]==1) echo "Luz"; else echo "Sensor de Movimiento"; ?>" disabled/>
                </div>
                <div class="form-group">
                <label for="cboEstado"> Estado: </label>
                <select class="form-control" name="cboEstado" id="cboEstado">
                    <option value="0" selected="selected">Apagado</option>
                    <option value="1">Encendido</option>
                </select>
                </div>                                
                <div class="form-group">
                <label for="checkLuz"> Estado: (Still in Beta)</label>
                <input type="checkbox" name="checkLuz" id="checkLuz" onBlur="valorChec();"/>
                </div>
                </fieldset>
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnLuz" id="btnLuz" value="Guardar Cambios" />
                </div>       
            </form>
            <br>
			<?php		}
					}
				}
				}
			}
			
			
		
       if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "sensores")
                {
                ?>
                <h1 class="page-header">Sensores de Movimiento</h1> 
                
                <?php
				//$id_user = $_SESSION["ID_User"];			
				if (!$resultado = $usuario->listar_luces_usuario($id_user))
				{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Ud. no posee componentes sensores de movimiento asociados a su sistema de Dom&oacute;tica. Para mayor informaci&oacute;n p&oacute;ngase en contacto con nosotros.
                </div>
                <?php
				}
				
				else {
				for ($i=0; $i<count($resultado); $i++)
				{
						if ($resultado[$i]["TIPO_COMP"] == 0) {
				?>
				<form role="form" name="frmSensorMov<?php echo $j = $i+1;?>" id="frmSensorMov<?php echo $j = $i+1;?>" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
					<fieldset>
					<legend> Componente: <?php echo $resultado[$i]["NOMBRE_COMP"]; ?> </legend>
					<div class="form-group">
					<label for="txtTipoComp"> Tipo de Componente : </label>
					<input type="text" class="form-control" name="txtTipoComp" id="txtTipoComp" value="<?php if ($resultado[$i]["TIPO_COMP"]==1) echo "Luz"; else echo "Sensor de Movimiento"; ?>" disabled/>
					</div>
                    <div class="form-group">
                    <label for="cboEstado"> Estado: </label>
                    <select class="form-control" name="cboEstado" id="cboEstado">
                    <option value="0" selected="selected">Apagado</option>
                    <option value="1">Encendido</option>
                    </select>
                    </div>                 
					<div class="form-group">
					<label for="checkLuz"> Estado: (Still in Beta) </label>
					<input type="checkbox" name="checkLuz" id="checkLuz" onBlur="valorChec();"/>
					</div>
					</fieldset>
					<div class="form-group">
					<input type="submit" class="btn btn-success" name="btnSensor" id="btnSensor" value="Guardar Cambios" />
					</div>       
				</form>
				<br>
				<?php		}
						}
					}
  
                   }
                }
		
		if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "stats")
                {
                ?>
        <h1 class="page-header">Estad&iacute;sticas de Uso Energ&eacute;tico</h1> 
                
        <?php
			}
        }
		
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "datosPersonales")
			{
			?>
            <h1 class="page-header">Actualice sus Datos</h1>
            
            
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
		}
		}

		
        
        if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "buzon")
                {
                ?>
        <h1 class="page-header">D&eacute;jenos sus comentarios</h1> 
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
        }
		?>
        
          
        </div>
      </div>
    </div>

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
