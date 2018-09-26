<?php 

class Conexion{

	//Atributos
	private $host;
	private $users;
	private $pass;
	private $db;


	//Metodos

	public function __construct(){
		$this->host = "localhost";
		$this->users = "root";
		$this->pass = "";
		$this->db = "proyecto";

		$con = mysql_connect($this->host, $this->users, $this->pass);
		if($con)
			mysql_select_db($this->db, $con);
	}

	public function consulta_simple($sql){
		 mysql_query($sql);

	}

	public function consulta_retorno($sql){
		$consulta = mysql_query($sql);
		return $consulta;
	}

}



 ?>