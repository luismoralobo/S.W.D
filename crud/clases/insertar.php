<?php


?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario de Registro</title>

			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<link rel="stylesheet" type="text/css" href="style.css">

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

         <script >
         	
           $(document ).ready(function(){

           	 $("#correo").bind("cut copy paste", function(e){

           	 	e.preventDefault();
           	 	alert("No puedes copiar, cortar o pegar en este campo");
           	 	$("#correo").bind("contextmenu", function(e){
           	 		e.preventDefault();

          	 	});

           	 });

           	  $("#correo2").bind("cut copy paste", function(e){

           	 	e.preventDefault();
           	 	alert("No puedes copiar, cortar o pegar en este campo");
           	 	$("#correo2").bind("contextmenu", function(e){
           	 		e.preventDefault();

          	 	});

           	 });


           });

         </script>
	
</head>
<body>


<form action="class_insertar.php" method="post">
		<table width="200" border="1">
	  <tbody>
	    <tr>
	      <td>Documento</td>
	      <td><input type="numb" name="documento" /></td>
	    </tr>
	    <tr>
	      <td>Nombre</td>
	      <td><input type="text" name="nombre" /></td>
	    </tr>
	    <tr>
	      <td>Apellidos</td>
	      <td><input type="text" name="apellidos"/></td>
	    </tr>
	    <tr>
	      <td>Correo</td>
	      <td><input type="email" name="correo" /></td>
	    </tr>
	    <tr>
	      <td>Contraseña</td>
	      <td><input type="password" name="contraseña" /></td>
	    </tr>
	    <tr>
	      <td>Ficha</td>
	      <td><input type="numb" name="ficha" /></td>
	    </tr>
	    <tr>
	      <td>Programa</td>
	      <td><input type="text" name="programa" /></td>
	    </tr>

	     <tr>
	      <td>Estado</td>
	      <td><input type="text" name="estado" /></td>
	    </tr>

	    <tr>
	    	<td colspan="2" align="center">
	     <input type="submit" value="Insertar"/>
	    </tr>
	    </td>
	  </tbody>
	</table>

</form>

</body>
</html>