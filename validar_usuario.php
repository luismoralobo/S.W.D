<?php 

$error_array = array();
  if (isset($_POST['validar'])) {
  	$documento = strip_tags($_POST['documento']);
  	

  	$query = mysqli_query($con, "SELECT * FROM usuarios WHERE documento = '$documento' ");
  	$checkdocumento = mysqli_num_rows($query);

  	if ($checkdocumento == 1) {
  		$_SESSION['usuario'] = $usuario;
  		header("Location: registrar.php");
  	}else{
  		array_push($error_array, '<div class="alert alert-danger" role="alert">El usuario ya existe</div>');
  	}


  }


 ?>