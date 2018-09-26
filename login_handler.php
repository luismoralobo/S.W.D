<?php 
session_start();
  $error_array = array();
  if (isset($_POST['login'])) {
  	$usuario = strip_tags($_POST['usuario']);
  	$password = md5 ($_POST['password']);
  	$password = ($password);

  	$aprendiz = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave='$password'");

    $instructor = mysqli_query($con, "SELECT * FROM instructor WHERE correo = '$usuario' AND password='$password'");

    $lider_area = mysqli_query($con, "SELECT * FROM lider_area WHERE usuario = '$usuario' AND password='$password'");

    $cordinador = mysqli_query($con, "SELECT * FROM cordinador WHERE usuario = '$usuario' AND password='$password'");



  	//$checkclave = mysqli_num_rows($aprendiz);

  	//if ($checkclave == 1) {
  	//	$_SESSION['usuario'] = $usuario;
  	//	header("Location: index.php");
  	//}else{
  		//array_push($error_array, '<div class="alert alert-danger" role="alert">El usuario o la contraseña son incorrectos</div>');
  	//}


    if (mysqli_num_rows($aprendiz) == 1 ) {
      $_SESSION['usuario'] = $usuario;
      header("Location: 3.vista/vista_aprendiz.php");

      exit(); 
    }elseif(mysqli_num_rows($instructor) == 1 ) {

      $_SESSION['usuario'] = $usuario;

      header("Location: 3.vista/vista_instructor.php");

       exit(); 

    }elseif(mysqli_num_rows($lider_area)==1){

      $_SESSION['usuario']= $usuario;

      header("Location: 3.vista/vista_lider_area.php");

      exit();
      
    }elseif(mysqli_num_rows($cordinador)==1){

      $_SESSION['usuario']= $usuario;

     header("Location: 3.vista/vista_cordinador.php");

     exit();


    }else{

       array_push($error_array, '<div class="alert alert-danger" role="alert">El usuario o la contraseña son incorrectos</div>');

    }

   



  }



 ?>