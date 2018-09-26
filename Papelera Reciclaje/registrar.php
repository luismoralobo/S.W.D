<?php
include("conexion.php");

include("registrar_handler.php");

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

<div class="container">
	

	<div class="col-md-3">

	<div class="container">
		
		<div  class="row">
			<div class="col-md-12">
				<h1 class="display-3 text-center">Registrate!!</h1>

			<form action="registrar.php" method="POST">
			  <div class="form-group">
			    <label for="usuario">Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">

			    <?php if(in_array('<div class="alert alert-danger" role="alert"> Tu usuario debe contener entre 5 y 40 caractares @
	     		</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Tu usuario debe contener entre 5 y 40 caractares @
	     		</div>'; 

	     		else if(in_array('<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>'?>
			  </div>

			  	  <div class="form-group">
			    <label for="correo">Correo</label>
			    <input type="email" class="form-control" name="correo" id="correo" placeholder="name@example.com">
			     <?php if(in_array('<div class="alert alert-danger" role="alert"> El correo ya existe </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El correo ya existe </div>'; 

	     		else if(in_array('<div class="alert alert-danger" role="alert"> El correo ya existe </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El Correo ya existe </div>'?>

			  </div>
			  
			  	  <div class="form-group">
			    <label for="correo2">Confirmacion de correo</label>
			    <input type="email" class="form-control" name="correo2" id="correo2" placeholder="name@example.com">

                  
                   <?php if(in_array('<div class="alert alert-danger" role="alert"> Los correos  no coinciden </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Los correos  no coinciden </div>'; 

	     		else if(in_array('<div class="alert alert-danger" role="alert"> El correo ya existe </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El correo ya existe </div>'; 
	     		else if(in_array('<div class="alert alert-danger" role="alert"> El formato no es valido</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El formato no es valido</div>';


	     		  ?>


			  </div>
			  
			  	  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña.....">
			  </div>
			  
			  	  <div class="form-group">
			    <label for="password2">Confirmacion de Password</label>
			    <input type="password" class="form-control" name="password2" id="password2" placeholder="Contraseña.....">

             <?php if(in_array('<div class="alert alert-danger" role="alert"> Las contraseña no coinciden</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Las contraseña no coinciden</div>'; 

	     		else if(in_array('<div class="alert alert-danger" role="alert"> Tu contraseña debe contener entre 7 y 40 caractares  </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Tu contraseña debe contener entre 7 y 40 caractares </div>'; ?>



                    	<br>


	     		<div class="form-group">
			    <label for="correo2">Numero De Documento</label>
			    <input type="text" class="form-control" name="documento" id="documento" placeholder="*">

                  
                   <?php if(in_array('<div class="alert alert-danger" role="alert"> El Documento ya existe</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El Documento ya existe</div>'; 

	     		 
	     		else if(in_array('<div class="alert alert-danger" role="alert"> El formato no es valido</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El formato no es valido</div>';


	     		  ?>


			  </div>


	     		
	     		

			  </div>
			  <div class="alert alert-warning" role="alert"> La contraseña debe contener entre 7 y 40 caracteres</div>



			  <button type="submit" name="registrarse" class="btn  btn-primary">Registrerse</button>
			  <a href="login.php">Ya tienes una cuenta? Inicia sesion!!:</a>
			  
			</form>


			</div>
		</div>
	</div>

</div>
</body>
</html>