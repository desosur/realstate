<?php

class sistema
{
	private $getTodoAuditSistema, $getTodoRaspClie, $getTodoCompClie = array();
	
	public function auditoria_sistema()
	{
		$str = "SELECT ID_REG_RASP, ID_RASP, COMENTARIO_RASP, DATE_FORMAT(FECH_HOR_RASP, '%d/%m/%Y %H:%i:%s') AS FECH_HOR_RASP FROM audit_raspberry;";
		$ejecutar = mysql_query($str);
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getTodoAuditSistema[]=$resultado;
		}
		return $this->getTodoAuditSistema;
	}
	
	public function listar_rasp_clie()
	{
		$str = "SELECT cliente.ID_CLIENTE, cliente.RUT, ID_RASPBERRY FROM cliente, raspberry WHERE cliente.ID_CLIENTE = raspberry.ID_CLIEN;";
		$ejecutar = mysql_query($str);
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getTodoRaspClie[]=$resultado;
		}
		return $this->getTodoRaspClie;
	}
	
	public function listar_comp_clie()
	{
		$str = "SELECT cliente.ID_CLIENTE, cliente.RUT, raspberry.ID_RASPBERRY, ID_ARDUINO FROM cliente, raspberry, arduino WHERE cliente.ID_CLIENTE = raspberry.ID_CLIEN AND raspberry.ID_RASPBERRY = arduino.ID_RASPBE;";
		$ejecutar = mysql_query($str);
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getTodoCompClie[]=$resultado;
		}
		return $this->getTodoCompClie;
	}
	
	public function agregar_rasp($id_clie, $num_serie, $MAC, $eth, $wifi)
	{
		$control = true;
		$str = "insert into raspberry values (null, '$id_clie', '$num_serie', '$MAC', '$eth', '$wifi');";
		if (!$agregar =  mysql_query($str)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
	}
	
	public function agregar_ard($id_rasp, $modelo_ard, $num_serie, $puerto_com)
	{
		$control = true;
		$str = "insert into arduino values (null, '$id_rasp', '$modelo_ard', '$num_serie', '$puerto_com');";
		if (!$agregar =  mysql_query($str)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
	}
	
	public function agregar_comp($id_ard, $pin_ard, $desc)
	{
		$control = true;
		$str = "insert into componente values (null, '$id_ard', '$pin_ard', '$desc');";
		if (!$agregar =  mysql_query($str)) {
			$control = false;
			return $control;
		}
		else
		{
		return $control;
		}
	}
	
}
?>

