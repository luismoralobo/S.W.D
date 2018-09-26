<?php 

 session_start();
if (isset($_SESSION['usuario'])) {
    $usuario =  $_SESSION['usuario'];
    
}else{
    header("Location: index.php");
}


 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Editar Perfil</title>

    <!--  CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Librería jQuery personalizada-->
    <script src="js/jquery-example.js"></script>
    
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes incluir archivos JavaScript individuales de los únicos plugins que utilices) -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Referencia a otro archivo css propio, donde se realizan las modificaciones css de los componentes y elementos -->
    <link href="css/personalizado.css" rel="stylesheet">
    <!-- Referencia a otro archivo css propio, donde se realizan las modificaciones css de la página principal -->
    <link href="css/starter-template.css" rel="stylesheet">
    

</head>

<body>



   
        <!-- Se especifica los elementos que dispondremos en el menú superior-->
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Profile</a></li>
            
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container">

        <!-- Encabezado de página / Breadcrumb -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Perfil de usuario
                    <small>editando datos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    
                    <li class="active">Editando datos</li>
                </ol>
            </div>
        </div>
        <!-- Fin Encabezado de página / Breadcrumb -->

        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
        <div class="row">
            <!-- Columna de la izquierda -->
        	<div class="col-md-3">
        		<div class="col-md-12" align="center">
        			<img class="img-responsive img-portfolio img-hover" >
        		</div>
        		<div class="col-md-12">
        			<p class="text-center"><strong>Nombre Apellido</strong></p>
                  <b>  <ul class="text-center"> <?php echo  $usuario; ?></b></ul>
	        		<p class="text-center"><em>Título del perfil de usuario</em></p>
        		</div>

        		<div class="col-md-12 text-center">
    		       <!-- Redes sociales-->
	               <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-linkedin-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
        		</div>

        		<div class="col-md-12">
        		<!-- Barra vertical de opciones del perfil de usuairo -->
        			<br >
        			<ul class="list-group list-primary">
        				<a href="#" class="list-group-item">Ver perfil público</a>
        				<a href="#" class="list-group-item">Mi perfil</a>
        				<a href="#" class="list-group-item">Fotografia</a>
        				<a href="#" class="list-group-item">Cuenta</a>
        				
    				</ul>
    			</div>
                <!-- Fin Barra vertical de opciones del perfil de usuario -->
        	</div>
            <!-- Fin de Columna de la izquierda -->

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
                <form name="modifyProfile" id="profileForm" novalidate>
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #D7DBDD;">
                	<div class="col-md-8 col-md-offset-2">
    	                
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                        	<br >
    	                            <label>Información básica</label>
    	                            <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtName" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nomnbre.">
    	                            </span>
    	                            <br >
    	                            <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtSurname" placeholder="Introduzca sus apellidos" required data-validation-required-message="Por favor introduzca sus apellidos.">
    	                            </span>
    	                            <br >
    	                            <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="text" class="form-control" id="txtQualification" placeholder="Introduzca su título" required data-validation-required-message="Por favor introduzca su título.">
    	                            </span>
    	                            <br >
    	                            <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
    	                            	<input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su email" required data-validation-required-message="Por favor introduzca su email.">
    	                            </span>
    	                            <p class="help-block"></p>
    	                        </div>
    	                    </div>
    	                    <div class="control-group form-group">
    	                        <div class="controls">
    	                            <label>Biografía:</label>
    	                            <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
    		                            data-validation-required-message="Por favor introduzca su biografía deseada."></textarea>
    		                        </span>
    		                        <br >
    		                        <span id="alertSelectLanguage" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
    		                            <select class="form-control" id="selectLanguage" title="Seleccione su idioma">
    		                            	<option class="bs-title-option" value="" disabled selected>Elije un idioma</option>
    		                            	<option>Español</option>
    		                            	<option>Ingles</option>          	
		                            	   	<option>Francés</option>
    		                            	
    		                            </select>
    		                        </span>
                                    <br >
    	                        </div>
                        	</div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->

                <!-- Parte central - enlaces -->
                <div class="col-md-12" style="border: 1px solid lightgrey; background: #D7DBDD;">
                   	<!-- Parte de redes sociales en el alta de perfil -->
                   	
                    
                    
                    <!-- Botones formulario -->
                	<div class="col-md-12 container allFormButtons">
                		<br >
    	               	<div class="col-md-2 col-md-offset-2">
                            <div class="form-group">
    	                	  
                            </div>
    		            </div>
    	                <div class="col-md-5 col-md-offset-3">
                            <div class="form-group">
        		               	<button type="button" id="btnClean" class="btn btn-success">Actualizar</button>
        		              	<button type="submit" id="btnEnviar" class="btn btn-primary">Limpiar</button>
                            </div>
                        </div>
                        &nbsp;
    	            </div>
                   	
                </div>
               
            </form>
            
            </div>  
          
        </div>
       
        &nbsp;
        <hr>

   
        

    </div>
    <!-- /.container -->

</body>

</html>
