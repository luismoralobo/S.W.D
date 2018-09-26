<?php 

include("conexion.php");

include("registrar_handler.php");


 ?>


<!-- Registrarse -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Antes de registrarse confirme que su usuario no haya sido creado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <form action="index1.php" method="POST">
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
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña.....">
        </div>
        
            

             <?php if(in_array('<div class="alert alert-danger" role="alert"> Las contraseña no coinciden</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Las contraseña no coinciden</div>'; 

          else if(in_array('<div class="alert alert-danger" role="alert"> Tu contraseña debe contener entre 7 y 40 caractares  </div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> Tu contraseña debe contener entre 7 y 40 caractares </div>'; ?>


          <div class="form-group">
          <label for="correo2">Numero De Documento</label>
          <input type="text" class="form-control" name="documento" id="documento" placeholder="*">

                  
                   <?php if(in_array('<div class="alert alert-danger" role="alert"> El Documento ya existe</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El Documento ya existe</div>'; 

           
          else if(in_array('<div class="alert alert-danger" role="alert"> El formato no es valido</div>', $error_array)) echo '<div class="alert alert-danger" role="alert"> El formato no es valido</div>';


            ?>


        </div>

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
        </div>

         <div class="form-group">
          <label for="apellido">Apellidos</label>
          <input type="text" class="form-control" name="apellidos" id="apellido" placeholder="Ingrese sus apellidos">
        </div>

        <div class="form-group">
          <label for="ficha">Ficha</label>
          <input type="text" class="form-control" name="ficha" id="ficha" placeholder="Ingrese ficha">
        </div>



          
          

        </div>
        <div class="alert alert-warning" role="alert"> La contraseña debe contener entre 7 y 40 caracteres</div>



        <button type="submit" name="registrarse" class="btn  btn-primary">Registrarse</button>
        
        
      </form>

      </div>
    </div>
  </div>
</div>

<!-- Fin de Registrarse -->