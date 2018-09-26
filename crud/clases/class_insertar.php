<?php

require_once "clase_db.php" ;

 //Esto se Hace cuando se envia imformacion de tabla modificar
  $funcion=$_REQUEST["funcion"];
  $cod=$_POST["cod"];

 $usuario = $_POST["usuario"];
 $correo = $_POST["correo"];
 $clave = $_POST["clave"];
 $documento = $_POST["documento"];
 $nombre = $_POST["nombre"];
 $apellidos = $_POST["apellidos"];
 $ficha = $_POST["ficha"];
 $fecha_registro = $_POST["fecha_registro"];



//Instancia de Clasedb
 $obj = new Clasedb(); 




  if($funcion=="modificar"){

  	$sql="UPDATE usuarios SET documento='$documento',nombre='$nombre',apellidos='$apellidos',correo='$correo', clave='$clave',ficha='$ficha',fecha_registro='$fecha_registro',usuario='$usuario' WHERE id=$cod";

  	$obj->actualizar($sql);

  	//header("location: listado.php");

  }else{



 $sql="INSERT INTO usuario (usuario,correo,clave,documento,nombre,apellidos,ficha,fecha_registro) 
                      VALUES ('$usuario', '$correo','$clave','$documento','$nombre','$apellidos','$ficha','$fecha_registro')";

 $obj->actualizar($sql);

}



 ?>