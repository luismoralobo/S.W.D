<?php 

  include_once("modulos/Enrutador.php");
  include_once("modulos/Controlador.php");




 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8"/>
 	<title>S.W.D</title> 
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">


 </head>
 <body>

 	<h1>Bienvenidos Aprenidz</h1>

 	<section>

 		<?php 
 		$enrutador = new Enrutador();
 		if($enrutador->validarGET($_GET['cargar'])){
 			$enrutador->cargarVista($_GET['cargar']);

 		}
 		

 		 ?>
 		

 	</section>
 
 </body>
 </html>