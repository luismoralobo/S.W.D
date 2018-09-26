<?php 

    $con = mysqli_connect("localhost", "root", "", "formulario");
      if (mysqli_connect_errno()) {
      	echo "Error al conectar base de datos". mysqli_connect_errno();
      }


 ?>