<?php 


   include_once('Conexion.php');

   class Aprendiz{

   	//Atributos

   	private $id;
   	private $cedula;
   	private $nombre;
   	private $apellidos;
   	private $telefono;
   	private $edad;
   	private $promedio;
   	private $fecha;
   	private $ficha;
   	private $con;	


   	//Metodos

   	public function __construct(){
   		$this->con = new Conexion();
   	}

           //////////////////
          //////SET/////////
         //Añadir contenido /
   	    ///de la clase//////


   	public function set($atributo, $contenido){
   		$this->$atributo = $contenido;
   	}  

   	       //////////////////
          //////GET/////////
         //Extraer contenido /
   	    ///de la clase//////

   	public function get($atributo){
   		return $this->$atributo;
   	}

   	public function listar(){
   		$sql = "SELECT * FROM aprendiz";
   		$resultado = $this->con->consulta_retorno($sql);
   	    return $resultado; 

   	}



   	public function crear(){
   		$sql2 = "SELECT * FROM aprendiz WHERE cedula = '{$this->cedula}'";
   		$resultado = $this->con->consulta_retorno($sql2);
   		$num = mysql_num_rows($resultado);

   		if($num != 0){
   			return false;
   		}else{

   			$sql = "INSERT INTO aprendiz (cedula, nombre, apellidos, telefono, edad, promedio, fecha, ficha) VALUES('{$this->cedula }', '{$this->nombre}', '{$this->apellidos}', '{$this->telefono}','{$this->edad}', '{$this->promedio}', NOW(), '{$this->ficha}' )";

   		    $this->$con->consulta_simple($sql);
   		}
   		
   	}

	  public function eliminar(){
			$sql = "DELETE FROM aprendiz WHERE id = '{$this->id}'";
			$this->con->consulta_simple($sql);
		    }

		public function ver(){

			$sql = "SELECT * FROM aprendiz WHERE id ='{$this->id}' LIMIT 1";
			$resultado = $this->con->consulta_retorno($sql);
			$row = mysql_fetch_assoc($resultado);


			//Set

		  $this->id = $row['id'];
		  $this->cedula = $row['cedula'];
		  $this->nombre = $row['nombre'];
		  $this->apellidos = $row['apellidos'];
		  $this->telefono = $row['telefono'];
		  $this->edad = $row['edad'];
		  $this->promedio = $row['promedio'];
		  $this->fecha = $row['fecha'];
		  $this->ficha = $row['ficha'];


		}  

		public function editar(){
			$sql = "UPDATE aprendiz SET nombre = '{$this->nombre}', apellidos = '{$this->apellidos}', telefono = '{$this->telefono}', edad = '{$this->edad}', promedio = '{$this->promedio}', ficha = '{$this->ficha}' WHERE id = '{$this->id}' ";

			
			$this->$con->consulta_simple($sql);

		}  
       }	

 ?>