<?php
	require_once("./clases/conexionBD.php");
	require_once("./clases/usuario.php");
	require_once("./clases/sistema.php");	
	
	$conexion = new conexion();
	$conexion->conectar();
	$usuario = new usuario();
	$sistema = new sistema();
	
	$tiempo_ahora = time();		// Se obtiene la hora actual 
	
	session_start();
	if(!isset($_SESSION["Login"]))
		header("location: login.php?error=1");
	elseif ($_SESSION["Login"] != "admin")
		header("location: pcontrol.php?error=1");
		
    elseif ($tiempo_ahora > $_SESSION["Expire"]) {
			$tiempo_limite = $_SESSION["Expire"];
			$tiempo_transcurrido = ($tiempo_ahora - $tiempo_limite) / 60;		// arreglar calculo para registro correcto en la tabla de auditoria
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

    <title>Panel de Control del Administrador - Domosys</title>

	

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/extras css/dashboard.css" rel="stylesheet">

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
          <a class="navbar-brand" href="#">Panel de Control del Administrador</a>
        </div>
        
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Men&uacute; Usuarios<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="?op=agregarUser">Agregar Usuario</a></li>
                <li><a href="?op=modificarUser">Modificar Usuario</a></li>
                <li><a href="?op=buscarUser">Buscar Usuario</a></li>
                <li><a href="?op=eliminarUser">Eliminar Usuario</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Men&uacute; Sistemas<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="?op=agregarSist">Agregar Sistema</a></li>
                <li><a href="?op=modificarSist">Modificar Sistema</a></li>
                <li><a href="?op=buscarSist">Buscar Sistema</a></li>
                <li><a href="?op=eliminarSist">Eliminar Sistema</a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Estad&iacute;sticas Globales de Uso<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="?op=platClie">Dispositivos de Conexi&oacute;n de los Clientes <span class="glyphicon glyphicon-phone"></span></a></li>
                <li><a href="?op=horaClie">Horario de Conexi&oacute;n de los Clientes <span class="glyphicon glyphicon-time"></span></a></li>
              </ul>
            </li>
            <li class="divider"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Auditor&iacute;a<b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="?op=eventosUser">Eventos de Usuario <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="?op=eventosSist">Eventos de Sistema <span class="glyphicon glyphicon-wrench"></span></a></li>
                <li><a href="?op=contacto">Ver Buz&oacute;n de Sugerencias <span class="glyphicon glyphicon-send"></span></a></li>
              </ul>
            </li>            
          </ul>
          
          <form class="navbar-form navbar-right" method="post" action="msjes_usuario.php">
          <button type="submit" class="btn btn-primary" name="btnLogout" id="btnLogout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Cerrar Sesi&oacute;n</button>
          </form>
        </div> <!-- fin navbar collapse -->
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="?op=main"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Mantenedor de Usuarios</a></li>
<!--            <li id="opAddUsr" name="opAddUsr" class="active" onClick="<?php //echo "Su nombre es " , get_class($bar) , "\n"; ?>"><a href="?op=main"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Mantenedor de Usuarios</a></li>		-->
                <ul>
                <li><a href="?op=agregarUser">Agregar <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="?op=modificarUser">Modificar <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="?op=buscarUser">Buscar <span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="?op=eliminarUser">Eliminar <span class="glyphicon glyphicon-user"></span></a></li>
                </ul>
          </ul>
          <ul class="nav nav-sidebar">      
            <li><a href="?op=main"><span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;Mantenedor de Sistemas</a></li>
            	<ul>
                    <li><a href="?op=agregarSist">Agregar <span class="glyphicon glyphicon-wrench"></span></a></li>
                    <li><a href="?op=modificarSist">Modificar <span class="glyphicon glyphicon-wrench"></span></a></li>
                    <li><a href="?op=buscarSist">Buscar <span class="glyphicon glyphicon-wrench"></span></a></li>
                    <li><a href="?op=eliminarSist">Eliminar <span class="glyphicon glyphicon-wrench"></span></a></li>
                </ul>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="?op=main"><span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;Estad&iacute;sticas Globales de Uso</a></li>
            	<ul>
                    <li><a href="?op=platClie">Dispositivos de Conexi&oacute;n de los Clientes <span class="glyphicon glyphicon-phone"></span></a></li>
                    <li><a href="?op=horaClie">Horario de Conexi&oacute;n de los Clientes <span class="glyphicon glyphicon-time"></span></a></li>
                </ul>
          </ul>
          <ul class="nav nav-sidebar">      
            <li><a href="?op=main"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Auditor&iacute;a</a></li>
            	<ul>
                    <li><a href="?op=eventosUser">Eventos de Usuario <span class="glyphicon glyphicon-user"></span></a></li>
                    <li><a href="?op=eventosSist">Eventos de Sistema <span class="glyphicon glyphicon-wrench"></span></a></li>
                    <li><a href="?op=contacto">Ver Buz&oacute;n de Sugerencias <span class="glyphicon glyphicon-send"></span></a></li>
                </ul>
          </ul>
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                
   		<?php 
		//if ($seccion == "")
		//echo("Elija una opci&oacute;n.");
		
		// DESPLEGAR TEXTO DE BIENVENIDA EN UN CARTEL DIV DESCARTABLE
		
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "main")
			{
				echo("Elija una opci&oacute;n.");
			}
		}
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "agregarUser")
			{
			?>
            <h1 class="page-header">Agregar Nuevo Usuario</h1>
            <form role="form" name="frmAgregarUsuario" id="frmAgregarUsuario" method="post" action="msjes_usuario.php" onSubmit="return validaVacios();">
                <fieldset>
                <legend> Datos Personales </legend>
                <div class="form-group">
                <label for="txtRut"> RUT : </label>
                <input type="text" class="form-control" name="txtRut" id="txtRut" placeholder="Ejemplo: 12345678-9" onKeyPress="return soloNumerosGuionYk(event);" onBlur="return validaRUT();" maxlength="10"/>
                </div>
                <div class="form-group">
                <label for="txtNombres"> Nombres: </label>
                <input type="text" class="form-control" name="txtNombres" id="txtNombres" onKeyPress="return soloLetras(event);" maxlength="150"/>
                </div>
                <div class="form-group">
                <label for="txtApePaterno"> Apellido Paterno: </label>
                <input type="text" class="form-control" name="txtApePaterno" id="txtApePaterno" onKeyPress="return soloLetras(event);" maxlength="150"/>
                </div>
                <div class="form-group">
                <label for="txtApeMaterno"> Apellido Materno: </label>
                <input type="text" class="form-control" name="txtApeMaterno" id="txtApeMaterno" onKeyPress="return soloLetras(event);" maxlength="150"/>
                </div>
                <div class="form-group">
                <label for="txtFechaNac"> Fecha de Nacimiento: </label>
                <input type="text" class="form-control" name="txtFechaNac" id="txtFechaNac" placeholder="DD-MM-AAAA (Ingrese solo n&uacute;meros)" onBlur="return validaMayoriaEdad();" maxlength="10"/>
                </div>
                <label for="radGenero"> G&eacute;nero: </label>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_0" value="M" checked/> Masculino
                </div>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_1" value="F" /> Femenino
                </div>
                </label>                
                <div class="form-group">
                <label for="cboComuna"> Comuna: </label>
                <select class="form-control" name="cboComuna" id="cboComuna">
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
                <input type="text" class="form-control" name="txtCalle" id="txtCalle" onKeyPress="return soloNumerosLetrasyGato(event);" placeholder="Ejemplo: Almirante Barroso #123"  />
                </div>                        
                <div class="form-group">
                <label for="txtTelMovil"> Tel&eacute;fono M&oacute;vil: </label>
                <input type="text" class="form-control" name="txtTelMovil" id="txtTelMovil" maxlength="8" placeholder="Ingresar solo n&uacute;meros. Ejemplo: 90123456" onKeyPress="return soloNumeros(event);"/>
                </div>
                <div class="form-group">
                <label for="txtTelFijo"> Tel&eacute;fono Fijo: </label>
                <input type="text" class="form-control" name="txtTelFijo" id="txtTelFijo" maxlength="8" placeholder="Ingresar solo n&uacute;meros. Ejemplo: 23456789"/>
                </div>
                </fieldset>
                
                <br><br>
                <fieldset>
                <legend> Datos de Usuario </legend>
                <div class="form-group">
                <label for="txtEmail"> E-Mail: </label>
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" onBlur="return validaEmail();" maxlength="200" placeholder="algo@mail.com"/>
                </div>
                <div class="form-group">
                <label for="txtUser"> Nombre de usuario: </label>
                <input type="text" class="form-control" name="txtUser" id="txtUser" maxlength="20" onKeyPress="return soloNumerosYletras(event);" placeholder="M&aacute;ximo 20 caracteres" />
                </div>
                <div class="form-group">
                <label for="txtPass1"> Contrase&ntilde;a: </label>
                <input type="password" class="form-control"name="txtPass1" id="txtPass1" maxlength="20" onKeyPress="return soloNumerosYletras(event);" placeholder="M&aacute;ximo 20 caracteres" />
                </div>
                <div class="form-group">
                <label for="txtPass2"> Repita contrase&ntilde;a: </label>
                <input type="password" class="form-control" name="txtPass2" id="txtPass2" onBlur="return passIguales();" maxlength="20" onKeyPress="return soloNumerosYletras(event);" placeholder="M&aacute;ximo 20 caracteres. Debe coincidir con la contrase&ntilde;a antes ingresada."/>
                </div>
                </fieldset>
                <br><br>
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnAgregar" id="btnAgregar" value="Agregar Usuario" />
                <input type="reset" class="btn btn-default" name="btnBorrar" id="btnBorrar" value="Borrar campos" />
                </div>       
            </form>
            
		<?php
            }
        }
		
       if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "modificarUser")
                {
                ?>
        <h1 class="page-header">Modificar Usuario</h1> 
        <form role="form" name="frmBuscarUsuarioMini" id="frmBuscarUsuarioMini" method="post" onSubmit="return validaTextoVacio();" action="pcontrol_admin.php?op=modificarUser">      
            <fieldset>
            <legend> Buscar por ID, RUT o Username </legend>
            <div class="form-group">
            <input type="text" class="form-control" name="txtBuscar" id="txtBuscar" placeholder="Ingresar ID, RUT &oacute; Username" onKeyPress="return soloIdRutUser(event);"/>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar Usuario</button>
            </div>  
            </fieldset>
        </form>
        
        <?php
			if(isset($_POST["btnBuscar"]))
			{
			$termino = $_POST["txtBuscar"];
			$resultado = $usuario->buscar_usuario($termino);
			$user = $resultado[0]["USER_CLIE"];
			if (!$resultado || $user == "admin")
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Cliente no encontrado, intente otra vez.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
				//$id = $resultado[$i]["ID_CLIENTE"];
			?>
        <br><br>
        <h1 class="page-header">Datos Obtenidos</h1>
        <form role="form" name="frmModificarUsuario" id="frmModificarUsuario" method="post" action="msjes_usuario.php" onSubmit="return validaVacios();">      
            <fieldset>
                <legend> Datos Personales </legend>
                <input type="hidden" name="txtIDHidden" value="<?php echo $resultado[$i]["ID_CLIENTE"]; ?>">
                <div class="form-group">
                <label for="txtRut"> RUT : </label>
                <input type="text" class="form-control" name="txtRut" id="txtRut" placeholder="Ejemplo: 12345678-9" onBlur="validaRUT();" value="<?php echo $resultado[$i]["RUT"]; ?>" disabled />
                </div>
                <input type="hidden" name="txtRut2" value="<?php echo $resultado[$i]["RUT"]; ?>">
                <div class="form-group">
                <label for="txtNombres"> Nombres: </label>
                <input type="text" class="form-control" name="txtNombres" id="txtNombres" value="<?php echo $resultado[$i]["NOMBRES"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtApePaterno"> Apellido Paterno: </label>
                <input type="text" class="form-control" name="txtApePaterno" id="txtApePaterno" value="<?php echo $resultado[$i]["APE_PATERNO"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtApeMaterno"> Apellido Materno: </label>
                <input type="text" class="form-control" name="txtApeMaterno" id="txtApeMaterno" value="<?php echo $resultado[$i]["APE_MATERNO"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtFechaNac"> Fecha de Nacimiento: </label>
                <input type="date" class="form-control" name="txtFechaNac" id="txtFechaNac" placeholder="DD-MM-AAAA (Ingrese solo n&uacute;meros)" onBlur="return validaMayoriaEdad();" maxlength="10" value="<?php echo $resultado[$i]["FECHA_NAC"]; ?>" />
                </div>
                
                <label for="radGenero"> G&eacute;nero: </label>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_0" value="M" <?php $sex=$resultado[$i]["GENERO"]; if ($sex=="M") { ?> checked <?php } ?> disabled /> Masculino
                </div>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_1" value="F" <?php $sex=$resultado[$i]["GENERO"]; if ($sex=="F") { ?> checked <?php } ?> disabled /> Femenino
                </div>
                </label>                
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
                <label for="txtPass1"> Contrase&ntilde;a: </label>
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
        }
		
		if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "buscarUser")
                {
                ?>
        <h1 class="page-header">Buscar Usuario</h1> 
        <form role="form" name="frmBuscarUsuarioMini" id="frmBuscarUsuarioMini" method="post" onSubmit="return validaTextoVacio();" action="pcontrol_admin.php?op=buscarUser">      
            <fieldset>
            <legend> Buscar por ID, RUT o Username </legend>
            <div class="form-group">
            <input type="text" class="form-control" name="txtBuscar" id="txtBuscar" placeholder="Ingresar ID, RUT &oacute; Username" onKeyPress="return soloIdRutUser(event);"/>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar Usuario</button>
            </div>  
            </fieldset>
        </form>
        
        <?php
			if(isset($_POST["btnBuscar"]))
			{
			$termino = $_POST["txtBuscar"];
			$resultado = $usuario->buscar_usuario($termino);
			$user = $resultado[0]["USER_CLIE"];
			if (!$resultado || $user == "admin")
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Cliente no encontrado, intente otra vez.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
				//$id = $resultado[$i]["ID_CLIENTE"];
			?>
        <br><br>
        <h1 class="page-header">Datos Obtenidos</h1>
        <form role="form" name="frmUsuarioEnconrado" id="frmUsuarioEncontrado" method="" action="">      
            <fieldset>
                <div class="form-group">
                <textarea class="form-control" rows="13" disabled>ID Cliente: <?php echo $resultado[$i]["ID_CLIENTE"] . "\n"; ?>RUT: <?php echo $resultado[$i]["RUT"] . "\n"; ?>Nombres: <?php echo $resultado[$i]["NOMBRES"] . "\n"; ?>Apellido Paterno: <?php echo $resultado[$i]["APE_PATERNO"] . "\n"; ?>Apellido Materno: <?php echo $resultado[$i]["APE_MATERNO"] . "\n"; ?>Fecha de Nacimiento: <?php echo $resultado[$i]["FECHA_NAC"] . "\n"; ?>G&eacute;nero: <?php $sex = $resultado[$i]["GENERO"]; if ($sex=="M") { echo " Masculino" . "\n";  } elseif ($sex=="F") { echo " Femenino" . "\n"; } ?>Comuna: <?php echo $resultado[$i]["COMUNA"] . "\n"; ?>Calle: <?php echo $resultado[$i]["CALLE"] . "\n"; ?>Tel&eacute;fono M&oacute;vil: <?php echo $resultado[$i]["FONO_MOVIL"] . "\n"; ?>Tel&eacute;fono Fijo: <?php echo $resultado[$i]["FONO_FIJO"] . "\n"; ?>E-Mail: <?php echo $resultado[$i]["EMAIL"] . "\n"; ?>Username: <?php echo $resultado[$i]["USER_CLIE"]; ?></textarea>
                </div>
                </fieldset>                    
            </form>
        <?php
			}
			}
		}
        
            }
        }
		
		if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "eliminarUser")
                {
                ?>
        <h1 class="page-header">Buscar y Eliminar Usuario</h1> 
        <form role="form" name="frmBuscarUsuarioMini" id="frmBuscarUsuarioMini" method="post" onSubmit="return validaTextoVacio();" action="pcontrol_admin.php?op=eliminarUser">      
            <fieldset>
            <legend> Buscar por ID, RUT, Nombres &oacute; Apellidos </legend>
            <div class="form-group">
            <input type="text" class="form-control" name="txtBuscar" id="txtBuscar" placeholder="Ingresar ID, RUT, Nombres &oacute; Apellidos"/>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar Usuario</button>
            </div>  
            </fieldset>
        </form>

        <br><br>
        <form role="form" name="frmEliminarUsuario" id="frmEliminarUsuario" method="post" action="msjes_usuario.php" onSubmit="return validaDeleteVacio();">      
            <fieldset>
            <legend> Informaci&oacute;n del Usuario a Eliminar </legend>
            <div class="form-group">
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
            <tr>
            	<th><span class="glyphicon glyphicon-trash"></span></th>
                <th>ID Cliente</th>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha de Nacimiento</th>
                <th>G&eacute;nero</th>
                <th>Comuna</th>
                <th>Calle</th>
                <th>Fono M&oacute;vil</th>
                <th>Fono Fijo</th>
                <th>E-Mail</th>
                <th>Username</th>
                
            </tr>
            <?php
			if(isset($_POST["btnBuscar"]))
			{
			$termino = $_POST["txtBuscar"];
			$resultado = $usuario->buscar_usuario_any($termino);
			$user = $resultado[0]["USER_CLIE"];
			if (!$resultado || $user == "admin")
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Cliente no encontrado, intente otra vez.
                </div>
                <?php
			} 
			else {
			for ($i=0; $i<count($resultado); $i++)
			{
				$id = $resultado[$i]["ID_CLIENTE"];

			?>
            <tr>
            <td><input type="checkbox" name="checkDel[]" id="checkDel[]" value="<?php echo $id; ?>"></td>
            <td><?php echo $resultado[$i]["ID_CLIENTE"]; ?></td>
			<td><?php echo $resultado[$i]["RUT"]; ?></td>
			<td><?php echo $resultado[$i]["NOMBRES"]; ?></td>
            <td><?php echo $resultado[$i]["APE_PATERNO"] . " " . $resultado[$i]["APE_MATERNO"]; ?></td>
            <td><?php echo $resultado[$i]["FECHA_NAC"]; ?></td>
            <td><?php echo $resultado[$i]["GENERO"]; ?></td>
            <td><?php echo $resultado[$i]["COMUNA"]; ?></td>
            <td><?php echo $resultado[$i]["CALLE"]; ?></td>
            <td><?php echo $resultado[$i]["FONO_MOVIL"]; ?></td>
            <td><?php echo $resultado[$i]["FONO_FIJO"]; ?></td>
            <td><?php echo $resultado[$i]["EMAIL"]; ?></td>
            <td><?php echo $resultado[$i]["USER_CLIE"]; ?></td>
            </tr>
            <?php
			}
			}
			}
			?>
            </table>
            </div></div>
            <div class="form-group">
            <button type="submit" class="btn btn-danger" name="btnEliminar" id="btnEliminar"><span class="glyphicon glyphicon-eject"></span>&nbsp;&nbsp;Eliminar Usuario</button>
            </div>  
            </fieldset>
        </form>
        
        <?php
            
			}
        }
		
		////
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "agregarSist")
			{
			?>
            <h1 class="page-header">Agregar Nuevo Sistema</h1>
            <form role="form" name="frmAgregarRasp" id="frmAgregarRasp" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
                <fieldset>
                <legend>Agregar y asociar Raspberry</legend>
                <div class="form-group">
                <label for="cboClientes"> RUT Cliente: </label>
                <select class="form-control" name="cboClientes" id="cboClientes">
                <?php
				$resultado = $usuario->listar_usuarios();
				for ($i=0; $i<count($resultado); $i++) {
				?>
				<option value="<?php echo $resultado[$i]["ID_CLIENTE"]; ?>"><?php echo $resultado[$i]["RUT"]; ?></option>
				<?php } ?>
                </select>
                </div>
                <div class="form-group">
                <label for="txtNumSerieRasp"> N&uacute;mero de Serie Raspberry: </label>
                <input type="text" class="form-control" name="txtNumSerieRasp" id="txtNumSerieRasp" />
                </div>                        
                <div class="form-group">
                <label for="txtMACRasp"> MAC Raspberry: </label>
                <input type="text" class="form-control" name="txtMACRasp" id="txtMACRasp" />
                </div>
                <div class="form-group">
                <label for="cboEth"> &iquest;Conectividad v&iacute;a Ethernet?: </label>
                <select class="form-control" name="cboEth" id="cboEth">
                <option value="0">No</option>
                <option value="1">S&iacute;</option>
                </select>
                </div>
                <div class="form-group">
                <label for="cboWiFi"> &iquest;Conectividad v&iacute;a Wi-Fi?: </label>
                <select class="form-control" name="cboWiFi" id="cboWiFi">
                <option value="0">No</option>
                <option value="1">S&iacute;</option>
                </select>
                </div>
                </fieldset>
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnAgregarRasp" id="btnAgregarRasp" value="Agregar Raspberry" />
                <input type="reset" class="btn btn-default" name="btnBorrar" id="btnBorrar" value="Borrar campos" />
                </div>       
            </form>
            
            <br>
            <form role="form" name="frmAgregarArd" id="frmAgregarArd" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
                <fieldset>
                <legend>Agregar y asociar Arduino</legend>
                <div class="form-group">
                <label for="cboRaspberry"> RUT Cliente: </label>
                <select class="form-control" name="cboRaspberry" id="cboRaspberry">
                <?php
				$resultado = $sistema->listar_rasp_clie();
				for ($i=0; $i<count($resultado); $i++) {
				?>
				<option value="<?php echo $resultado[$i]["ID_RASPBERRY"]; ?>"><?php echo $resultado[$i]["RUT"]; ?></option>
				<?php } ?>
                </select>
                </div>
                <div class="form-group">
                <label for="cboModelo"> Modelo de placa Arduino: </label>
                <select class="form-control" name="cboModelo" id="cboModelo">
                    <option value="UNO R3" selected="selected">UNO R3</option>
                    <option value="Duemilanove">Duemilanove</option>
                    <option value="Leonardo">Leonardo</option>
                    <option value="Mega">Mega</option>
                </select>
                </div>
                <div class="form-group">
                <label for="txtNumSerieArd"> N&uacute;mero de Serie Arduino: </label>
                <input type="text" class="form-control" name="txtNumSerieArd" id="txtNumSerieArd" />
                </div>                        
                <div class="form-group">
                <label for="cboPuertoCOM"> Puerto COM: </label>
                <select class="form-control" name="cboPuertoCOM" id="cboPuertoCOM">
                    <option value="COM1" selected="selected">COM1</option>
                    <option value="COM2">COM2</option>
                    <option value="COM3">COM3</option>
                    <option value="COM4">COM4</option>
                    <option value="COM5">COM5</option>
                    <option value="COM6">COM6</option>
                    <option value="COM7">COM7</option>
                    <option value="COM8">COM8</option>
                    <option value="COM9">COM9</option>
                    <option value="COM10">COM10</option>
                    <option value="COM11">COM11</option>
                    <option value="COM12">COM12</option>
                </select>
                </div>
                </fieldset>
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnAgregarArd" id="btnAgregarArd" value="Agregar Arduino" />
                <input type="reset" class="btn btn-default" name="btnBorrar" id="btnBorrar" value="Borrar campos" />
                </div>       
            </form>
            
            <br>
            <form role="form" name="frmAgregarComp" id="frmAgregarComp" method="post" action="msjes_sistema.php" onSubmit="return algunaFuncion();">
                <fieldset>
                <legend>Agregar y asociar Componente</legend>
                <div class="form-group">
                <label for="cboArduino"> RUT Cliente: </label>
                <select class="form-control" name="cboArduino" id="cboArduino">
                <?php
				$resultado = $sistema->listar_comp_clie();
				for ($i=0; $i<count($resultado); $i++) {
				?>
				<option value="<?php echo $resultado[$i]["ID_ARDUINO"]; ?>"><?php echo $resultado[$i]["RUT"]; ?></option>
				<?php } ?>
                </select>
                </div>
                <div class="form-group">
                <label for="cboPinArd"> Pin de conexi&oacute;n Arduino: </label>
                <select class="form-control" name="cboPinArd" id="cboPinArd">
                    <option value="6" selected="selected">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                </select>
                </div>
                <div class="form-group">
                <label for="txtNombreComp"> Nombre de Componente: </label>
                <input type="text" class="form-control" name="txtNombreComp" id="txtNombreComp" />
                </div>                        
                </fieldset>
                <div class="form-group">
                <input type="submit" class="btn btn-success" name="btnAgregarComp" id="btnAgregarComp" value="Agregar Componente" />
                <input type="reset" class="btn btn-default" name="btnBorrar" id="btnBorrar" value="Borrar campos" />
                </div>       
            </form>
		<?php
            }
        }
		
       if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "modificarSist")
                {
                ?>
        <h1 class="page-header">Modificar Usuario</h1> 
        <form role="form" name="frmBuscarUsuarioMini" id="frmBuscarUsuarioMini" method="post" action="pcontrol_admin.php?op=modificarUser">      
            <fieldset>
            <legend> Buscar por ID, RUT o Username </legend>
            <div class="form-group">
            <input type="text" class="form-control" name="txtBuscar" id="txtBuscar" placeholder="Buscar por ID, RUT o Username"/>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar" value="Buscar Usuario" />
            </div>  
            </fieldset>
        </form>
        
        <?php
			if(isset($_POST["btnBuscar"]))
			{
			$termino = $_POST["txtBuscar"];
			if (!$resultado = $usuario->buscar_usuario($termino))
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Cliente no encontrado, intente otra vez.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
				//$id = $resultado[$i]["ID_CLIENTE"];
			?>
        <br><br>
        <h1 class="page-header">Datos Obtenidos</h1>
        <form role="form" name="frmModificarUsuario" id="frmModificarUsuario" method="post" action="">      
            <fieldset>
                <legend> Datos Personales </legend>
                <div class="form-group">
                <label for="txtRut"> RUT : </label>
                <input type="text" class="form-control" name="txtRut" id="txtRut" placeholder="Ejemplo: 12345678-9" onBlur="validaRUT();" disabled value="<?php echo $resultado[$i]["RUT"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtNombres"> Nombres: </label>
                <input type="text" class="form-control" name="txtNombres" id="txtNombres" value="<?php echo $resultado[$i]["NOMBRES"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtApePaterno"> Apellido Paterno: </label>
                <input type="text" class="form-control" name="txtApePaterno" id="txtApePaterno" value="<?php echo $resultado[$i]["APE_PATERNO"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtApeMaterno"> Apellido Materno: </label>
                <input type="text" class="form-control" name="txtApeMaterno" id="txtApeMaterno" value="<?php echo $resultado[$i]["APE_MATERNO"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtFechaNac"> Fecha de Nacimiento: </label>
                <input type="date" class="form-control" name="txtFechaNac" id="txtFechaNac" placeholder="DD/MM/AAAA (Ingrese solo n&uacute;meros)" onBlur="validaFechaNac();" maxlength="10" value="<?php echo $resultado[$i]["FECHA_NAC"]; ?>" />
                </div>
                
                <label for="radGenero"> G&eacute;nero: </label>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_0" value="M" <?php $sex=$resultado[$i]["GENERO"]; if ($sex=="M") { ?> checked <?php } ?> disabled /> Masculino
                </div>
                <div class="radio">
                <input type="radio" name="radGenero" id="radGenero_1" value="F" <?php $sex=$resultado[$i]["GENERO"]; if ($sex=="F") { ?> checked <?php } ?> disabled /> Femenino
                </div>
                </label>                
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
                <input type="text" class="form-control" name="txtCalle" id="txtCalle" value="<?php echo $resultado[$i]["CALLE"]; ?>" />
                </div>                        
                <div class="form-group">
                <label for="txtTelMovil"> Tel&eacute;fono M&oacute;vil: </label>
                <input type="text" class="form-control" name="txtTelMovil" id="txtTelMovil" placeholder="Ingresar solo n&uacute;meros." value="<?php echo $resultado[$i]["FONO_MOVIL"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtTelFijo"> Tel&eacute;fono Fijo: </label>
                <input type="text" class="form-control" name="txtTelFijo" id="txtTelFijo"  placeholder="Ingresar solo n&uacute;meros." value="<?php echo $resultado[$i]["FONO_FIJO"]; ?>" />
                </div>
                </fieldset>
                
                <br>
                <fieldset>
                <legend> Datos de Usuario </legend>
                <div class="form-group">
                <label for="txtEmail"> E-Mail: </label>
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $resultado[$i]["EMAIL"]; ?>" />
                </div>
                <div class="form-group">
                <label for="txtUser"> Nombre de usuario: </label>
                <input type="text" class="form-control" name="txtUser" id="txtUser" disabled value="<?php echo $resultado[$i]["USER_CLIE"]; ?>"/>
                </div>
                <div class="form-group">
                <label for="txtPass1"> Contrase&ntilde;a: </label>
                <input type="text" class="form-control"name="txtPass1" id="txtPass1" value="<?php echo $resultado[$i]["PASS_CLIE"]; ?>"/>
                </div>
                <div class="form-group">
                <label for="txtPass2"> Repita contrase&ntilde;a: </label>
                <input type="password" class="form-control" name="txtPass2" id="txtPass2" />
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
        }
		
		if(isset($_GET["op"]))	{					
                $seccion = $_GET["op"];
                if ($seccion == "eliminarSist")
                {
                ?>
        <h1 class="page-header">Buscar y Eliminar Usuario</h1> 
        <form role="form" name="frmBuscarUsuarioMini" id="frmBuscarUsuarioMini" method="post" action="pcontrol_admin.php?op=eliminarUser">      
            <fieldset>
            <legend> Buscar por ID, RUT, Nombres &oacute; Apellidos </legend>
            <div class="form-group">
            <input type="text" class="form-control" name="txtBuscar" id="txtBuscar" placeholder="Ingresar ID, RUT, Nombres &oacute; Apellidos"/>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="btnBuscar" id="btnBuscar" value="Buscar Usuario" />
            </div>  
            </fieldset>
        </form>

        <br><br>
        <form role="form" name="frmEliminarUsuario" id="frmEliminarUsuario" method="post" action="">      
            <fieldset>
            <legend> Informaci&oacute;n del Usuario a Eliminar </legend>
            <div class="form-group">
            <div class="table-responsive">
            <table class="table table-striped">
            <tr>
            	<th><span class="glyphicon glyphicon-trash"></span></th>
                <th>ID Cliente</th>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Fecha Nacimiento</th>
                <th>G&eacute;nero</th>
                <th>Comuna</th>
                <th>Calle</th>
                <th>Fono M&oacute;vil</th>
                <th>Fono Fijo</th>
                <th>E-Mail</th>
                <th>Username</th>
                
            </tr>
            <?php
			if(isset($_POST["btnBuscar"]))
			{
			$termino = $_POST["txtBuscar"];			
			if (!$resultado = $usuario->buscar_usuario_any($termino))
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;Cliente no encontrado, intente otra vez.
                </div>
                <?php
			} 
			else {
			for ($i=0; $i<count($resultado); $i++)
			{
				$id = $resultado[$i]["ID_CLIENTE"];

			?>
            <tr>
            <td><input type="checkbox" name="checkDel" value="<?php echo $id; ?>"></td>
            <td><?php echo $resultado[$i]["ID_CLIENTE"]; ?></td>
			<td><?php echo $resultado[$i]["RUT"]; ?></td>
			<td><?php echo $resultado[$i]["NOMBRES"]; ?></td>
            <td><?php echo $resultado[$i]["APE_PATERNO"] . " " . $resultado[$i]["APE_MATERNO"]; ?></td>
            <td><?php echo $resultado[$i]["FECHA_NAC"]; ?></td>
            <td><?php echo $resultado[$i]["GENERO"]; ?></td>
            <td><?php echo $resultado[$i]["COMUNA"]; ?></td>
            <td><?php echo $resultado[$i]["CALLE"]; ?></td>
            <td><?php echo $resultado[$i]["FONO_MOVIL"]; ?></td>
            <td><?php echo $resultado[$i]["FONO_FIJO"]; ?></td>
            <td><?php echo $resultado[$i]["EMAIL"]; ?></td>
            <td><?php echo $resultado[$i]["USER_CLIE"]; ?></td>
            </tr>
            <?php
			}
			}
			}
			?>
            </table>
            </div></div>
            <div class="form-group">
            <input type="submit" class="btn btn-danger" name="btnEliminar" id="btnEliminar" value="Eliminar Usuario" />
            </div>  
            </fieldset>
        </form>
        
        <?php
            
			}
        }
		
		////
		
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "platClie")
			{
			?>
            <h1 class="page-header">Dispositivos de Conexi&oacute;n de los Clientes</h1>
			<img class="img-responsive" src="graficos.php?graf=1"/>
                        
        <?php
			}
		}
		if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "eventosUser")
			{
			?>
            <h1 class="page-header">Auditor&iacute;a de Eventos</h1>
            
            
            <h3>Eventos de Usuario</h3>
            <div>
            <table class="table table-bordered table-striped">
            <tr>
                <th class="col-md-1">ID Evento</th>
                <th class="col-md-4">Detalles</th>
                <th class="col-md-2">Fecha y Hora</th>
            </tr>
            <?php
			if (!$resultado = $usuario->auditoria_usuarios())
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;A&uacute;n no se registran eventos de usuario.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
			?>
			<tr>
			<td><?php echo $resultado[$i]["ID_REG_CLIE"]; ?></td>
			<td><?php echo $resultado[$i]["COMENTARIO_CLIE"]; ?></td>
			<td><?php echo $resultado[$i]["FECH_HOR_CLIE"]; ?></td>                        
			</tr>
			<?php
			}
			}
			?>
            </table>
            </div>
            <?php
				}
			}			
			if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "eventosSist")
			{
			?>
            <h1 class="page-header">Auditor&iacute;a de Eventos</h1>			
            
            <h3>Eventos de Sistema</h3>
            <div>
            <table class="table table-bordered table-striped">
            <tr>
                <th class="col-md-1">ID Evento</th>
                <th class="col-md-4">Detalles</th>
                <th class="col-md-2">Fecha y Hora</th>
            </tr>
            <?php
			if (!$resultado = $sistema->auditoria_sistema())
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;A&uacute;n no se registran eventos de sistema.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
			?>
			<tr>
			<td><?php echo $resultado[$i]["ID_REG_RASP"]; ?></td>
			<td><?php echo $resultado[$i]["COMENTARIO_RASP"]; ?></td>
			<td><?php echo $resultado[$i]["FECH_HOR_RASP"]; ?></td>                        
			</tr>
			<?php
			}
			}
			?>
            </table>
            </div>
			<?php
                }
            }
			
			if(isset($_GET["op"]))	{					
			$seccion = $_GET["op"];
			if ($seccion == "contacto")
			{
			?>
            <h1 class="page-header">Comentario enviados</h1>			
            
            
            <div>
            <table class="table table-bordered table-striped">
            <tr>
                <th class="col-md-1">ID Comentario</th>
                <th class="col-md-1">ID Usuario</th>
                <th class="col-md-4">Comentario</th>
                <th class="col-md-2">Fecha y Hora</th>
            </tr>
            <?php
			if (!$resultado = $usuario->get_msjes_contacto())
			{
				?>
                <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Aviso:</strong>&nbsp;&nbsp;A&uacute;n no se han enviado comentarios al buz&oacute;n de sugerencias.
                </div>
                <?php
			}
			else
			{
			for ($i=0; $i<count($resultado); $i++)
			{
			?>
			<tr>
			<td><?php echo $resultado[$i]["ID_COMENTARIO"]; ?></td>
            <td><?php echo $resultado[$i]["ID_USER"]; ?></td>
			<td><?php echo $resultado[$i]["COMENTARIO_CONTACTO"]; ?></td>
			<td><?php echo $resultado[$i]["FECH_HOR_CONTACTO"]; ?></td>                        
			</tr>
			<?php
			}
			}
			?>
            </table>
            </div>
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
    <script src="js/extras_js/bootbox.min.js"></script>
    <script src="js/assets/docs.min.js"></script>
    <script src="js/validacionesPControlADM.js"></script>
    <script src="js/extras_js/bootstrap-switch.min.js"></script>
    
    
  </body>
</html>