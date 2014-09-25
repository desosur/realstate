<?php

class conexion
{
	private $servidor;
	private $usuario;
	private $password;
	private $basedatos;
	
	//constructor 
	public function conexion()
	{
		$this->servidor = "localhost";
		$this->usuario = "desosurc_root";
		$this->password = "password1.";
		$this->basedatos = "desosurc_domosys";
	}
	
	public function conectar()
	{
		$con = mysql_connect($this->servidor, $this->usuario, $this->password);
		if (!$con) {
			die("Error en la conexión al motor de BD.");
		}
		mysql_set_charset("utf8");
		$bd = mysql_select_db($this->basedatos);
		if (!$bd) {
			die("Error en la selección de la BD. Revise que exista.");
		}
	}
	
	public function desconectar()
	{
		mysql_close();
	}
	
}

?>