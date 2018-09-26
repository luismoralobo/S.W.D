<?php 
    

    $error_array = array();
	if (isset($_POST['registrarse'])) {

		 $usuario = strip_tags  ( $_POST['usuario']);
		 $correo =  strip_tags  ($_POST['correo']);
		 $correo =  filter_var  ($correo, FILTER_SANITIZE_EMAIL);
		 $password = strip_tags ($_POST['password']);
         $documento = strip_tags($_POST['documento']);
         $nombre = strip_tags($_POST['nombre']);
         $apellidos = strip_tags($_POST['apellidos']);
         $ficha = strip_tags($_POST['ficha']);


	     if (strlen($usuario) > 40 || strlen($usuario) < 4) {
	     	array_push($error_array, '<div class="alert alert-danger" role="alert"> Tu usuario debe contener entre 4 y 40 caractares  
	     		</div>');

        }


        $checarusuario = mysqli_query($con, "SELECT usuario FROM usuarios WHERE usuario = '$usuario'");
        if(mysqli_num_rows( $checarusuario) != 0 ){
        	array_push($error_array, '<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>');
        }

        $checarusuario = mysqli_query($con, "SELECT usuario FROM usuarios WHERE correo = '$correo'");
        if(mysqli_num_rows( $checarusuario) != 0 ){
            array_push($error_array, '<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>');
        }

        $checarusuario = mysqli_query($con, "SELECT usuario FROM usuarios WHERE password = '$password'");
        if(mysqli_num_rows( $checarusuario) != 0 ){
            array_push($error_array, '<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>');
        }

        $checarusuario = mysqli_query($con, "SELECT usuario FROM usuarios WHERE password = '$password'");
        if(mysqli_num_rows( $checarusuario) != 0 ){
            array_push($error_array, '<div class="alert alert-danger" role="alert"> El Usuario ya existe </div>');
        }
        
        if (empty($error_array)) {
        $password = md5($password);
        $query = mysqli_query($con, "INSERT INTO usuarios VALUES('','$usuario','$correo','$password','$documento','$nombre','$apellidos','$ficha','fecha_registro')");
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
       header("Location: index1.php");
    }
}


 ?>