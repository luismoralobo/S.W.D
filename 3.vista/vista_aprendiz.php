<?php 

 session_start();
if (isset($_SESSION['usuario'])) {
	$usuario = 	$_SESSION['usuario'];
	
}else{
	header("Location: ../index1.php");
}


 ?>

 <!DOCTYPE html>

<html lang="en">

  <head>

    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bienvenido Aprendiz</title>
   
    <link href="../boosptrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../estilos.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>

    <style type="text/css">
      
      .botones 
      {

        background: rgba(0, 0, 0, 0);
        border-color: rgba(0, 0, 0, 0);

      }

    </style>

  </head>

  <body>

   


 
 <nav class="navbar navbar-default">
       <?php
        include("../Notificaciones/notificacion/php/conexion.php");
        ?>  
            
      <div class="container">

        <div class="navbar-header">
          <a class="navbar-brand" href="#">S.W.D</a>
        </div>


         <div class="navbar-header">
          <a href="inicio.php"><img src="../img/inicio.jpg" align="right" width="50px"></a>
        </div>

           <div>
      <ul class="nav navbar-nav navbar-right"><li><a>Bienvenido  <?php echo  $usuario; ?></li></ul> 
        </div>

        <div class="">
          <a href="../logout.php"><img src="../img/cerrar.jpg" align="right" width="40px"></a>
        </div>



    <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <div class="card">       
          
          <div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="../img/notificacion.jpg" width="40px" /></button>
                <div id="notification-latest"></div>
              </div>          
            </div>
          </div>
        </div>
      </div>
    </div>
  



    
    </nav>
  
  <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> PANEL <small> APRENDIZ </small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              </ul>
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
              <a href="" class="list-group-item active color-principal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel de Control
              </a>

              <form action="" method="post">

              <a class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_justificacion_aprendiz" value="Justificacion"> <span class="badge"></span></a>

              </form>

              <form action="Consulta.php" method="post">

              <a class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <input class="botones" type="submit" name="btn_consultar_aprendiz" value="Consultar"> <span class="badge"></span></a>

              </form>

            </div>


             <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="Notificaciones/notificacion/js/jquery.min.js"><\/script>')</script>
    <script src="../Notificaciones/notificacion/js/popper.min.js"></script>
    <script src="../Notificaciones/notificacion/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../Notificaciones/notificacion/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "../Notificaciones/notificacion/php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../boosptrap/js/bootstrap.min.js"></script>

  
</body>
</html>