
<?php
    
	$mysqli = new mysqli('localhost' ,'root','','formulario'); 
	
	    if($mysqli->connect_error){
		die('Error en la conexion' . $mysqli->connect_error);
	}
?>