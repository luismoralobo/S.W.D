<!DOCTYPE html>
<html>
<head>
	<title>Listado De Aprendiz</title>

	




</head>

<h2>Listado De Aprendiz</h2>
<hr/>
<body>

	<?php

	require_once "clase_db.php";

	$obj = new Clasedb();

	$datos=$obj->consultar("SELECT * FROM aprendiz");

	?>

	<table border="1">

		<tr> 
			<td>Id</td>
			<td>Usuario</td>
			<td>Correo</td>
			<td>Clave</td>
			<td>Documento</td>
			<td>Nombre</td>
			<td>Apellidos</td>
			<td>Ficha</td>
			<td>Fecha_registro</td>
			<td>Modificar</td>
			<td>Insertar</td>
			
		</tr>

		<?php  foreach($datos as $fila){	?>
		
		    <td> <?php echo $fila["id"]; ?> </td>
			<td> <?php echo $fila["usuario"]; ?> </td>
			<td> <?php echo $fila["correo"]; ?> </td>
			<td> <?php echo $fila["clave"]; ?> </td>
			<td> <?php echo $fila["documento"]; ?> </td>			
			<td> <?php echo $fila["nombre"]; ?> </td>
			<td> <?php echo $fila["apellidos"]; ?> </td>
			<td> <?php echo $fila["ficha"]; ?> </td>
			<td> <?php echo $fila["fecha_registro"] ?> </td>
			<td><img src="img/modificar.jpg" width="50" onclick="modificar(<?php echo $fila["id"]; ?>)" /></td>
			<td><a href="insertar.php" target="nueva"><img src="img/insertar.png" width="50"  /></a></td>

		<tr>
		</tr>

		<?php }  ?>

	</table>

</body>
</html>


