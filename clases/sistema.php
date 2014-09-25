<?php

class sistema
{
	private $getTodoAuditSistema, $getTodoRaspClie, $getTodoCompClie, $getRaspUser, $getArdUser, $getCompUser, $getComponente = array();
	
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
	
	public function agregar_comp($id_ard, $pin_ard, $tipo_comp, $desc)
	{
		$control = true;
		$strAddComp = "insert into componente values (null, '$id_ard', '$pin_ard', '$tipo_comp', '$desc');";		
		$ejecutarAddComp = mysql_query($strAddComp) or die(mysql_error());
		//$num_reg_comp = mysql_num_rows($ejecutarAddComp);
		if (!$ejecutarAddComp)
		{
			$control = false;
			return $control;
		}
		else {
			$str = "SELECT max(ID_COMPONENTE) as ULTIMO_COMPONENTE from componente where ID_ARD = '$id_ard';";
			$ejecutar = mysql_query($str);			
			$arr = mysql_fetch_array($ejecutar);
			$comp_obtenido = $arr["ULTIMO_COMPONENTE"];
			if ($tipo_comp == 1)	{
				$desc_componente = $desc . ' Apagada.';
				$strAddUso = "insert into uso values (null, '$comp_obtenido', 0, '$desc_componente', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
			}
			else 	{
				$desc_componente = $desc . ' Apagado.';
				$strAddUso = "insert into uso values (null, '$comp_obtenido', 0, '$desc_componente', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
			}
			$ejecutarAddUso = mysql_query($strAddUso) or die(mysql_error());
			//$num_reg_uso = mysql_num_rows($ejecutarAddUso);
			if (!$ejecutarAddUso)
			{
				$control = false;
				return $control;
			}
			else	{
				return $control;
			}
		}
		
		
	}
	
	/*public function buscar_sistema($term)
	{
		$str = "select ID_CLIENTE, RUT, NOMBRES, APE_PATERNO, APE_MATERNO, DATE_FORMAT(FECHA_NAC, '%d-%m-%Y') AS FECHA_NAC, GENERO, COMUNA, CALLE, FONO_MOVIL, FONO_FIJO, EMAIL, USER_CLIE, AES_DECRYPT(PASS_CLIE,'llave_AES') AS PASS_CLIE from cliente where ID_CLIENTE = '$term' OR RUT = '$term' OR USER_CLIE = '$term'";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getDatosUser[]=$resultado;
		}
		return $this->getDatosUser;
	}*/
	
	public function buscar_rasp_user($id_clie)
	{
		$str = "select * from raspberry where ID_CLIEN = $id_clie;";
		$ejecutar = mysql_query($str) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar))	{
			$this->getRaspUser[]=$resultado;
		}
		return $this->getRaspUser;
	}
	
	public function buscar_arduino_user($id_clie)
	{
		$str2 = "select * from arduino where ID_RASPBE in (select ID_RASPBERRY from raspberry where ID_CLIEN = $id_clie);";
		$ejecutar2 = mysql_query($str2) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar2))	{
			$this->getArdUser[]=$resultado;
		}
		return $this->getArdUser;
	}
	
	public function buscar_componente_user($id_clie)
	{
		$str2 = "select * from componente where ID_ARD in (select ID_ARDUINO from arduino where ID_RASPBE in(select ID_RASPBERRY from raspberry where ID_CLIEN = $id_clie));";
		$ejecutar2 = mysql_query($str2) or die(mysql_error());
		while($resultado = mysql_fetch_assoc($ejecutar2))	{
			$this->getCompUser[]=$resultado;
		}
		return $this->getCompUser;
	}
	
}
?>

