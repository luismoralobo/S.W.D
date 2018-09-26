<?php 
//include_once("registrar_handler.php");

 ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar session</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="index1.php" method="POST">
			  <div class="form-group">
			  	 <div class="jumbotron boxlogin">
			    <label for="usuario">Usuario</label>
			    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
			   	 
			   <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="contraseña" placeholder="Contraseña.....">
			  </div>

			  <?php if(in_array('<div class="alert alert-danger" role="alert">El usuario o la contraseña son incorrectos</div>', $error_array)) echo '<div class="alert alert-danger" role="alert">El usuario o la contraseña son incorrectos</div>'; ?>
			  
			  	 
			  <button type="submit" name="login" class="btn  btn-primary">Iniciar sesion</button>
			 <h6> <a href="registrar.php">Aun no tienes una cuenta? Registrate!!</a></h6>
			   </div>
			</form>

      </div>
     
    </div>
  </div>
</div>


</div>
