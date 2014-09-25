<?php

class usuario
{
	private $getTodoAuditUsers, $getTodoContacto, $getDatosUser, $getDatosUserTodos, $getDatosUserAny, $getLucesUser, $getSensoresUser = array();
	
	public function auditoria_usuarios()
	{
		$str = "SELECT ID_REG_CLIE, ID_CLIE, COMENTARIO_CLIE, DATE_FORMAT(FECH_HOR_CLIE, '%d/%m/%Y %H:%i:%s') AS FECH_HOR_CLIE FROM audit_cliente where COMENTARIO_CLIE not like '%admin%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getTodoAuditUsers[]=$resultado;
		}
		return $this->getTodoAuditUsers;
	}
	
	public function get_msjes_contacto()
	{
		$str = "SELECT ID_COMENTARIO, ID_USER, COMENTARIO_CONTACTO, DATE_FORMAT(FECH_HOR_CONTACTO, '%d/%m/%Y %H:%i:%s') AS FECH_HOR_CONTACTO FROM contacto where COMENTARIO_CONTACTO not like '%admin%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getTodoContacto[]=$resultado;
		}
		return $this->getTodoContacto;
	}

	public function agregar_usuario($rut, $nombres, $ape_pat, $ape_mat, $fecha_nac, $genero, $comuna, $calle, $f_movil, $f_fijo, $email, $user, $pass)
	{
		$control = true;
		$sql = "insert into cliente values (null, '$rut', '$nombres', '$ape_pat', '$ape_mat', '$fecha_nac', '$genero', '$comuna', '$calle', '$f_movil', '$f_fijo', '$email', '$user', AES_ENCRYPT('$pass','llave_AES'))";
		
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
		/*
		$ejecutar = mysql_query($sql);
		$num_reg = mysql_affected_rows($ejecutar);
		
		//si se insertaron con exito 1 o mas filas, está correcto
		if ($num_reg > 0) {
			return $control;
		}
		else
		{
			$control = false;
			return $control;
		}
		*/
	}
	
	// UPDATE USUARIO SET NOMBRE="Name1", APE_PATERNO="Last Name 1", APE_MATERNO="Last Name 2", PASS_USER = AES_ENCRYPT('PASS1','llave_AES') WHERE NOM_USER= 'user1';
	public function modificar_usuario($id, $nombres, $ape_pat, $ape_mat, $fecha_nac, $comuna, $calle, $f_movil, $f_fijo, $email, $pass)
	{
		$control = true;
		$sql = "update cliente set NOMBRES='$nombres', APE_PATERNO='$ape_pat', APE_MATERNO='$ape_mat', FECHA_NAC='$fecha_nac', COMUNA='$comuna', CALLE='$calle', FONO_MOVIL='$f_movil', FONO_FIJO='$f_fijo', EMAIL='$email', PASS_CLIE=AES_ENCRYPT('$pass','llave_AES') where ID_CLIENTE = $id;";
		
		if (!$modificar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
	}
	
	// **** MODIFICAR Y ADAPTAR PARA EL USUARIO COMUN Y CORRIENTE / EJ: DISABLE SOME FIELDS
	public function actualizar_datos($id, $nombres, $ape_pat, $ape_mat, $fecha_nac, $comuna, $calle, $f_movil, $f_fijo, $email, $pass)
	{
		$control = true;
		$sql = "update cliente set NOMBRES='$nombres', APE_PATERNO='$ape_pat', APE_MATERNO='$ape_mat', FECHA_NAC='$fecha_nac', COMUNA='$comuna', CALLE='$calle', FONO_MOVIL='$f_movil', FONO_FIJO='$f_fijo', EMAIL='$email', PASS_CLIE=AES_ENCRYPT('$pass','llave_AES') where ID_CLIENTE = $id;";
		
		if (!$modificar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
	}
	
	public function buscar_usuario_any($term)
	{
		//
		$control = true;		
		$str = "select ID_CLIENTE, RUT, NOMBRES, APE_PATERNO, APE_MATERNO, DATE_FORMAT(FECHA_NAC, '%d-%m-%Y') AS FECHA_NAC, GENERO, COMUNA, CALLE, FONO_MOVIL, FONO_FIJO, EMAIL, USER_CLIE from cliente where ID_CLIENTE = '$term' OR RUT = '$term' OR USER_CLIE = '$term' OR NOMBRES LIKE '%$term%' OR APE_PATERNO LIKE '%$term%' OR APE_MATERNO LIKE '%$term%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getDatosUserAny[]=$resultado;
		}
		return $this->getDatosUserAny;
	}
	
	public function buscar_usuario($term)
	{
		$str = "select ID_CLIENTE, RUT, NOMBRES, APE_PATERNO, APE_MATERNO, DATE_FORMAT(FECHA_NAC, '%d-%m-%Y') AS FECHA_NAC, GENERO, COMUNA, CALLE, FONO_MOVIL, FONO_FIJO, EMAIL, USER_CLIE, AES_DECRYPT(PASS_CLIE,'llave_AES') AS PASS_CLIE from cliente where ID_CLIENTE = '$term' OR RUT = '$term' OR USER_CLIE = '$term'";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getDatosUser[]=$resultado;
		}
		return $this->getDatosUser;
	}
		
	public function listar_usuarios()
	{
		$str = "select * from cliente;";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getDatosUserTodos[]=$resultado;
		}
		return $this->getDatosUserTodos;
	}
	
	public function listar_luces_usuario($id_clie)
	{
		$str = "select * from componente where ID_ARD in (select ID_ARDUINO from arduino where ID_RASPBE in(select ID_RASPBERRY from raspberry where ID_CLIEN in (select ID_CLIENTE from cliente where ID_CLIENTE = $id_clie)));";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getLucesUser[]=$resultado;
		}
		return $this->getLucesUser;
	}
	
	public function login_usuario($user, $pass, $platform)
	{
		$control = true;
		$str1 = "select ID_CLIENTE, NOMBRES, GENERO, USER_CLIE, AES_DECRYPT(PASS_CLIE,'llave_AES') as PASS_CLIE from cliente where user_clie='$user'";
		$ejecutar = mysql_query($str1) or die(mysql_error());
		$num_reg = mysql_num_rows($ejecutar);
		if ($num_reg == 0)
		{
			$control = false;
			return $control;
		}
		else {
			$arr = mysql_fetch_array($ejecutar);
			$id_obtenido = $arr["ID_CLIENTE"];
			$nom_obtenido = $arr["NOMBRES"];
			$user_obtenido = $arr["USER_CLIE"];
			$pass_obtenida = $arr["PASS_CLIE"];
			$genero_obtenido = $arr["GENERO"];
			if ($pass_obtenida == $pass) {
				session_start();
				$_SESSION["Login"] = $user_obtenido;
				$_SESSION["ID_User"] = $id_obtenido;
				$_SESSION["Nombres"] = $nom_obtenido;
				$_SESSION["Genero"] = $genero_obtenido;
				$_SESSION["Set_Timeout"] = time();	// arreglar pq se cierra la sesion al transcurrir el tiempo establecido
				$_SESSION["Expire"] = $_SESSION["Set_Timeout"] + (5 * 60);		// cant_minutos * 60
				$reg_login = $this->registra_login($id_obtenido, $user_obtenido, $platform);
				return $control;
			}
			else {
				$control = false;
				return $control;
			}
		}
	}
	
	// id_reg_clie - id_clie - comentario_clie - fech_hor_clie
	public function registra_login($id_clie, $user_clie, $plataforma) {
		$control = true;
		$sql = "insert into audit_cliente values (null, $id_clie, CONCAT('El usuario ','$user_clie',' ha Iniciado sesión desde un dispositivo ','$plataforma',' con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)";
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		return $control;
	}
	
	public function logout_usuario() {
			session_start();
			$reg_logout = $this->registra_logout($_SESSION["ID_User"], $_SESSION["Login"]);				
			session_unset();
			session_destroy();
	}	
	
	// id_reg_clie - id_clie - comentario_clie - fech_hor_clie
	public function registra_logout($id_clie, $user_clie) {
		$control = true;
		$sql = "insert into audit_cliente values (null, $id_clie, CONCAT('El usuario ','$user_clie',' ha Cerrado sesión con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)";
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		return $control;
	}
	
	public function sesion_expirada($tiempo_gastado) {
			session_start();
			$reg_ses_exp = $this->registra_sesion_expirada($_SESSION["ID_User"], $_SESSION["Login"], $tiempo_gastado);				
			session_unset();
			session_destroy();
	}	
	
	// id_reg_clie - id_clie - comentario_clie - fech_hor_clie
	public function registra_sesion_expirada($id_clie, $user_clie, $timeout) {
		$control = true;
		$sql = "insert into audit_cliente values (null, $id_clie, CONCAT('La sesión del usuario ','$user_clie',' ha caducado tras ','$timeout',' minutos de inactividad, con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)";
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		return $control;
	}

	public function cuenta_login_escritorio() {
		// Se excluye al admin
		$control = true;
		$cant_desk = 0;
		$str = "select count(COMENTARIO_CLIE) as CANT_DESK from audit_cliente where COMENTARIO_CLIE not like '%ha Cerrado%' and COMENTARIO_CLIE not like '%ha sido registrada%' and COMENTARIO_CLIE not like '%ha actualizado%' and COMENTARIO_CLIE not like '%ha sido eliminado%' and COMENTARIO_CLIE not like '%admin%' and COMENTARIO_CLIE not like '%Administrador%' and COMENTARIO_CLIE like '%Escritorio%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		$num_reg = mysql_num_rows($ejecutar);
		if ($num_reg == 0)
		{
			$control = false;
			return $control;
		}
		else {
			$arreglo = mysql_fetch_array($ejecutar);
			$cant_desk = $arreglo["CANT_DESK"];
			return $cant_desk;
		}
	}
	
	public function cuenta_login_smartphone() {
		// Se excluye al admin
		$control = true;
		$cant_smrt = 0;
		$str = "select count(COMENTARIO_CLIE) as CANT_SMRT from audit_cliente where COMENTARIO_CLIE not like '%ha Cerrado%' and COMENTARIO_CLIE not like '%ha sido registrada%' and COMENTARIO_CLIE not like '%ha actualizado%' and COMENTARIO_CLIE not like '%ha sido eliminado%' and COMENTARIO_CLIE not like '%admin%' and COMENTARIO_CLIE not like '%Administrador%' and COMENTARIO_CLIE like '%Smartphone%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		$num_reg = mysql_num_rows($ejecutar);
		if ($num_reg == 0)
		{
			$control = false;
			return $control;
		}
		else {
			$arreglo = mysql_fetch_array($ejecutar);
			$cant_smrt = $arreglo["CANT_SMRT"];
			return $cant_smrt;
		}
	}
	
	public function cuenta_login_tablet() {
		// Se excluye al admin
		$control = true;
		$cant_tabl = 0;
		$str = "select count(COMENTARIO_CLIE) as CANT_TABL from audit_cliente where COMENTARIO_CLIE not like '%ha Cerrado%' and COMENTARIO_CLIE not like '%ha sido registrada%' and COMENTARIO_CLIE not like '%ha actualizado%' and COMENTARIO_CLIE not like '%ha sido eliminado%' and COMENTARIO_CLIE not like '%admin%' and COMENTARIO_CLIE not like '%Administrador%' and COMENTARIO_CLIE like '%Tablet%';";
		$ejecutar = mysql_query($str) or die(mysql_error());
		$num_reg = mysql_num_rows($ejecutar);
		if ($num_reg == 0)
		{
			$control = false;
			return $control;
		}
		else {
			$arreglo = mysql_fetch_array($ejecutar);
			$cant_tabl = $arreglo["CANT_TABL"];
			return $cant_tabl;
		}
	}
	
	public function guarda_contacto_persona($nom, $fono_mov, $mail, $comment) {
		$control = true;
		$sql = "insert into contacto values (null, 0, CONCAT('La persona ','$nom',', teléfono móvil: ','$fono_mov',', dirección e-mail: ','$mail',', ha enviado el comentario: ','$comment',', con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)";
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		return $control;
	}
	
	public function guarda_contacto_usuario($id_clie, $user_clie, $comment) {
		$control = true;
		$sql = "insert into contacto values (null, $id_clie, CONCAT('El usuario ','$user_clie',' ha enviado el comentario: ','$comment',', con fecha ',CURRENT_TIMESTAMP,'.'), CURRENT_TIMESTAMP)";
		if (!$agregar =  mysql_query($sql)) {
			$control = false;
			return $control;
		}
		else
		return $control;
	}
}
?>