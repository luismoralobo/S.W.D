<!DOCTYPE html>
<html>
<head>
	<title>Modificar Datos</title>
</head>
<body>

    <?php 
      
      require "clase_db.php";

      $obj = new Clasedb();

     $data = $obj->consultar("SELECT * FROM usuarios WHERE id=$cod");

    ?>


	<h2>Modificar Datos</h2>
	<hr/>

	<form action="class_insertar.php" method="post">
		<table width="200" border="1" cellspacing="0" cellpadding="0">

<?php foreach ($data as $fila) { ?>



	  <tbody>
	  	<tr>
	      <td>ID</td>
	      <td> <?php echo $cod; ?> </td>
	    </tr>
	    <tr>
	    	<td>Documento</td>
	      <td><input type="numb" name="documento" value="<?php echo $fila["id"] ?>" /></td>
	    </tr>
	      <td>Documento</td>
	      <td><input type="numb" name="documento" value="<?php echo $fila["usuario"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Nombre</td>
	      <td><input type="text" name="nombre" value="<?php echo $fila["correo"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Apellidos</td>
	      <td><input type="text" name="apellidos" value="<?php echo $fila["documento"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Correo</td>
	      <td><input type="email" name="correo" value="<?php echo $fila["nombre"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Contraseña</td>
	      <td><input type="password" name="contraseña" value="<?php echo $fila["apellidos"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Ficha</td>
	      <td><input type="numb" name="ficha" value="<?php echo $fila["ficha"] ?>" /></td>
	    </tr>
	    <tr>
	      <td>Programa</td>
	      <td><input type="text" name="programa" value="<?php echo $fila["fecha_registro"] ?>" /></td>
	    </tr>

	    <tr>
	    	<td colspan="2" align="center">
	     <input type="submit" value="Modificar Datos"/>
	    </tr>
	    </td>
	  </tbody>
	  <?php } ?>
	</table>

	<input type="hidden" name="funcion" value="modificar" />
    <input type="hidden" name="cod" value=" <?php echo $cod; ?>" />
</form>


</body>
</html>