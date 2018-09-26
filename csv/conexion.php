<?php
$conexion = mysqli_connect("localhost","root","","formulario");

if($conexion){
 // echo "se realizo correctamente la conexion";
}else{
 echo " Error en la conexion";
}
?>