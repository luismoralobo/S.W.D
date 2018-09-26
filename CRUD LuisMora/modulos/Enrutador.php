<?php 

class Enrutador{

	public function cargarVista($vista){

    switch($vista):

    	case "crear":
    	    include_once('vista/' .$vista. '.php');
    	    break;

    	default:
    	include_once('vista/error.php');    

       endswitch;

	}

	public function validarGET($variable){
		if(empty($variable) ){
			include_once('vista/inicio.php');
		}else{
			return true;
		}

	}
}
  



   ?>