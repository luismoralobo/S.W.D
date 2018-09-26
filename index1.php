<?php
include("conexion.php");

include("login_handler.php");

?>


<!DOCTYPE html>
<html lang="es">
<head>

  <title>Panel Principal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">

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


<div class="container" >


  <img id="imgsena" src="img/sena.png"  width="80px" height="80px">


    <img src="img/PARTESUPERIORIZQ.png" >

    <img src="img/mintrabajo1.png" >


</div>



<nav class="navbar navbar-dark bg-success">

  <button type="button" class="btn btn-success">Inicio</button>
  <button type="button" class="btn btn-success">Inicio</button>
  <button type="button" class="btn btn-success">Inicio</button>
  <button type="button" class="btn btn-success">Inicio</button>



</nav>






<div class="container">

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-10" src="img/sena.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-10" src="img/sena.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-10" src="img/sena.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>


</div>



<div class="jumbotron">

<div class="row">
  <div class="col-12 col-md-8">

<div class="card w-20">
      
      <h5 class="card-title">Iniciar session</h5>
      <p class="card-text">Ingrese para acceder al sistema si ya esta registrado.</p>
      
    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar</button>

    </div>
<br/>

<div class="card w-20">
      
      <h5 class="card-title">Registrarse</h5>
      <p class="card-text">Registrarse para iniciar session.</p>

    <!-- Large modal -->

<button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModalCenter" border="">Registrate</button>
     
    </div>

  </div>

  <div class="col-6 col-md-4">

<div class="card-deck">
          <div class="card">
            
            <div class="table-responsive ">
              
               <table class="table">
                <div class="card-body" style=" height: 300px; ">

                  <a class="twitter-timeline" href="https://twitter.com/SENAComunica?ref_src=twsrc%5Etfw">Tweets by SENAComunica</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                </table>
               </div>  
             </div>
          </div>

  </div>
</div>

</div> <!-- Fin Jumbotron !-->

      <div class="">

    <div class="card-body">

    <center><FONT FACE=""><p class="card-text "><b> S.W.D </b></p></FONT>
    </div></center>
    <div class="card-footer">
    </div>
  </div>



<?php

   ///////////////////////////
  ////////Iniciar Session////
 // ///// Venta Modal///////
///////////////////////////
include("iniciar_modal.php");


 ?>



<?php
   ///////////////////////////
  //Registrarse Numero de//////
 // Documento Venta Modal///
///////////////////////////
include("registrarse_modal.php");
 ?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</div>
</body>


</html>
