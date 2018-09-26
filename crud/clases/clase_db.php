<?php 

 class Clasedb{


 	function __construct(){

 		try{
 				//Variables

 		$host = "localhost";
 		$db_name = "formulario";
 		$user = "root";
 		$pass = "";

         //Conexion BD
 		$this->con = mysqli_connect($host,$user,$pass) or die ("Error Al Conexion BD");

 		mysqli_select_db($this->con, $db_name) or die ("No hay BD");

 		//echo "Conexion Exito";

 		}catch(Excepcion $ex){
 			throw $ex;

 		}

 	
 	}//Fin constructor



 	function consultar($sql){

 		 $res = mysqli_query($this->con, $sql);
              
         $data = NULL;
 		 while($fila = mysqli_fetch_assoc($res)){

 		 	$data[] = $fila;

 		 }

 		 return $data;

 	}//Fin Metodo consultar

 	function actualizar($sql){

 		mysqli_query($this->con, $sql);

 		if(mysqli_affected_rows($this->con)<=0){

 			echo ' <script language="javascript">alert("Error Al Guardar Cambios....");</script> ';
 		}else {

 			echo ' <script language="javascript">alert("Todos Los Cambios Son Exitosos....");</script> ';

 			header("location: listado.php");



 		}


 	}//Fin Metodo actualizar




 }//Fin De LaClase Clasedb

 ?>


