<?php 

 session_start();
if (isset($_SESSION['usuario'])) {
  $usuario =  $_SESSION['usuario'];
  
}else{
  header("Location: index1.php");
}


 ?>

<!DOCTYPE html>

<html lang="en">

  <head>

    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenid@ lider</title>
   
    <link href="../boosptrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilos.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

  </head>

    <style type="text/css">
      
      .botones 
      {

        background: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0);

      }

    </style>


  <body  style="background-color: gray">




 <nav class="navbar navbar-default">
      <div class="container">

           <div class="navbar-header">
          <a href="vista_lider_area.php"><img src="../img/sena.png" align="right" width="40px"></a>
        </div>

         <div class="navbar-header">
          <a href="vista_lider_area.php"><img src="../img/PARTESUPERIORIZQ.png" align="right" width="100px"></a>
        </div>

        <div class="col-md-4">

         <div class="navbar-header">
          <a href="vista_lider_area.php"><img src="../img/inicio.jpg" align="right" width="40px"></a>
        </div>
        </div>
        
      <div>
      <ul class="nav navbar-nav navbar-right"><li><a>Bienvenid@  <?php echo  $usuario; ?></li></ul> 
        </div>

        <div class="">
          <a href="../logout.php"><img src="../img/cerrar.jpg" align="right" width="40px"></a>
        </div>

      </div>
    </nav>
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> PANEL <small> LIDER DE AREA </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
            </div>
          </div>
        </div>
      </div>
    </header>
	
	<section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="">Panel de Control</a></li>
        </ol>
      </div>
    </section>
	
	<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active color-principal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
              </a>

              <form action="../controlador/Panel_Actualizar_Lider.php" method="post">

              <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_actualizar_aprendiz" value="Actualizar Aprendiz"> <span class="badge"></span></a>

              </form>

              <form action="../controlador/Panel_Registrar_Lider.php" method="post">

              <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_crear_aprendiz" value="Crear Aprendiz"> <span class="badge"></span></a>

              </form>

              <form action="../controlador/Panel_Eliminar_Lider.php" method="post">

              <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_eliminar_aprendiz" value="Eliminar Aprendiz"> <span class="badge"></span></a>

              </form>

              <form action="" method="post">

              <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_visualizar_asistencas" value="Visualizar Asistencias"> <span class="badge"></span></a>

              </form>

              <form action="" method="post">

              <a href="usuarios.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_editar_asistencias" value="Editar Asistencias"> <span class="badge"></span></a>

              </form>

            </div>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../boosptrap/js/bootstrap.min.js"></script>

</body>
</html>