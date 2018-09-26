<!DOCTYPE html>
 <html>
 <head>
 	<title>Bienvenido</title>

 	<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

			<link rel="stylesheet" type="text/css" href="style.css">

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </head>

 <body style="background-color: white ">

<div class="container">
 
<div style="padding-left: 1000px  ">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarText">
    
  
    <div class="pull-left">
          <div class="btn-group " role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo  $usuario; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="">
                <a class="dropdown-item" href="logout.php">Cerrar session</a>
                <a class="dropdown-item" href="editarperfil.php">Actualizar datos</a>

            </div>
          </div>
        </div>
           </div>
        </div>
          </div>
        </nav>




              <div class="row">
                <div class="col-md-12">

                  <h1 class="page-header">
                  <small></small>
                  </h1>

                  <ol class="breadcrumb">
                    <li><a href="editarperfil.php">Perfil  usuario</a></li> 
                    <li><a href="index.php"> Inicio</a></li>
                   
                  </ol>
                </div>
              </div>


              <div class="row">
                <div class="col-md-3">

                  
                  <div class="col-md-12" align="center">
                    <img class="img-responsive img-porfolio img-hover"   src="">

                  </div>


                  <div class="col-md-12">
                    <p class="text-center"><strong>Nombre Apellido</strong></p>
                    
                  </div>

                  <div class="col-md-12 text-center">

                    <ul class="listunstyled list-inline list-social-icons">
                      <li>
                        <a href=""><i class="editIcons icon-facebook-squere editSizeIcons"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="editIcons icon-linkedin-squere editSizeIcons"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="editIcons icon-twitter-squere editSizeIcons"></i></a>
                      </li>
                      <li>
                        <a href=""><i class="editIcons icon-google-plus-squere editSizeIcons"></i></a>
                      </li>
                    </ul>
                  </div>

                  <div class="col-md-12">

                    <br>
                    <ul class="list-group list-primary">
                       <a href="" class="list-group-item">ver perfil publico</a>
                       <a href="editarperfil.php" class="list-group-item">Mi perfil</a>
                       <a href="" class="list-group-item">Fotografia</a>
                       <a href="" class="list-group-item">cuenta</a>
                    
                    </ul>
                    
                  </div>

                </div>

                <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>S.W.D
                    SENA</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
                <form name="modifyProfile" id="profileForm" novalidate>
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #D7DBDD;">
                  <div class="col-md-8 col-md-offset-2">
                      
                          <div class="control-group form-group">
                              <div class="controls">
                                <br >
                                  <label></label>
                                  <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                    
                                  </span>
                                  <br >
                                  <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                    
                                  </span>
                                  <br >
                                  <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                    
                                  </span>
                                  <br >
                                  <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                    
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
              </div>

              






    </div>


 	</div>
 
 </body>
 </html>