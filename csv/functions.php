<?php
 function insertar_datos($usuario,$correo,$clave,$documento){
 	 $clave = md5($clave);
 		global $conexion;
 	$sentencia = "INSERT INTO usuarios VALUES('', '$usuario','$correo','$clave','$documento')";
 	$ejecutar = mysqli_query($conexion,$sentencia);
 	return $ejecutar;
 }
?>