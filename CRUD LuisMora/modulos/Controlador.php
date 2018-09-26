<?php 

  include_once("Clases/Aprendiz.php");

  class ControladorAprendiz{

     //Atributos
  	private $aprendiz;



      //Metodos
  	public function __construct(){

  		$this->aprendiz = new Aprendiz();
  	}

  	public function index(){

  		$resultado = $this->aprendiz->listar();
  		return  $resultado; 

  	}

  	public function crear($cedula, $nombre, $apellidos, $telefono, $edad, $ficha, $nota1, $nota2, $nota3){

  		$promedio = ($nota1 + $nota2 + $nota3) /  3 ;

  		$this->aprendiz->set("cedula", $cedula);
  		$this->aprendiz->set("nombre", $nombre);
  		$this->aprendiz->set("apellidos", $apellidos);
  		$this->aprendiz->set("telefono", $telefono);
  		$this->aprendiz->set("edad", $edad);
  		$this->aprendiz->set("promedio", $promedio);
  		$this->aprendiz->set("ficha", $ficha);

  		$resultado = $this->aprendiz->crear();
  		return $resultado;
  	}

  	public function eliminar($id){
  		$this->aprendiz->set("id", $id);
  		$this->aprendiz->eliminar();

  	}

  	public function ver($id){
  		$this->aprendiz->set("id", $id);
  		$this->aprendiz->ver();

  	}

  	public function editar($id){

  		$this->aprendiz->set("id", $id);
  		$this->aprendiz->ver();
  		$this->aprendiz->editar();
  	}

  }


 ?>