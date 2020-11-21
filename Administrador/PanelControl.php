    <?php
     session_start();//aqui se inicia la secion para los usuarios
     ?>

    <!DOCTYPE html>
    <?php
    // Desactivar toda notificación de error
    error_reporting(0);
    ?>﻿


    <html>
        <head>
            <meta charset="UTF-8">
            <title>Panel de Control</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />


            <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

            <title>Panel de Control</title>
            <link rel="stylesheet" href="../CSS/Administrador/estiloadminhome.css">

            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        </head>

        <body>
          <center>
        <?php
            if (isset($_SESSION["clv_Usuario"])) {//se inicia si existe la variable de session
              //si se inicio sesion hay que ver de quien es
              //Administrador
              if ($_SESSION["clv_Usuario"] == 1){
        ?>
            <div class="contenedor-form">


                <div class="container">
                  <center><b><h1>Panel de Control</h1></b>
                    <h3>Bienvenido</h3>
                  </center>


                    <form action="../Functions/logins/cerrarsesion.php" method="post">
                    <input type="submit" value="cerrar sesion"><br>
                    </form>

                  <br><br>  <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#Videos">videos</a></li>
                        <li><a data-toggle="pill" href="#Discografia">Discografia</a></li>
                        <li><a data-toggle="pill" href="#Galeria">Galeria</a></li>
                        <li><a data-toggle="pill" href="#Noticias">Noticias</a></li>
                        <li><a data-toggle="pill" href="#Informacion">Informacion</a></li>
                        <li><a data-toggle="pill" href="#ConfDeUsuario">Configuracion de Usuario</a></li>
                        <!--<li><a data-toggle="pill" href="#Reportes">Reportes de Usuario</a></li>-->
                    </ul>

                    <div class="tab-content">
                        <div id="Videos" class="tab-pane fade in active">

                            <form action="../Functions/Administrador/videofondo.php" method="POST"    enctype="multipart/form-data">
                                <center><b><h3>Video de Fondo</h3></b></center>

                                <input type="File" name="ArchivoV" id="ArchivoV"><!-- solo acepta--> <br><br>
                                <input type="submit" value="Agregar Fondo" class="done"><br><br>
                            </form>
                            <form class="" action="../Functions/Administrador/videolista.php" method="post">
                              <h3>Ingresa nuevo video de youtube</h3>
                                <input type="text" placeholder="Pega AQUI la URL del VIDEO" required name="txtvidyoutube"/>
                                <br><br>
                                <!--botones de confirmacion y acciones-->
                                <input type="submit" value="Agregar Video" class="done">
                                <label for=""></label>
                                <input type="submit" value="Editar" class="edit">
                                <input type="submit" value="Eliminar " class="drop">
                            </form>

                        </div>

                        <div id="Discografia" class="tab-pane fade">
                            <form action="FuncionesCod.php" method="post" enctype="multipart/form-data">
                                <h3>Nombre del Disco</h3>

                                <input type="text" placeholder="Nombre del Disco" required name="txtbnompelicula"/>
                                <br><br>

                                 <center><b><h3>Caratula del Disco</h3></b></center>
                                <input type="file" value="Agregar imagen" name="fotoDulce" id="fotoDulce">

                                <div id="imagePreviews">

                                </div>
                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

                                <script type="text/javascript">
                                    (function(){
                                        function filePreview(input){
                                            if(input.files && input.files[0]){
                                                var reader=new FileReader();
                                                reader.onload=function(e){
                                                    $('#imagePreviews').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $('#fotoDulce').change(function(){
                                            filePreview(this);
                                        });
                                    })();
                                </script>


                                <br><br>
                                <h3>Cantidad de Canciones del Disco</h3>
                                <input type="text" placeholder="ej. 10" maxlength="2" required name="txtbnompelicula"/>
                                <input type="submit" value="Empezar a agregar" class="done"><br><br>

                                <input type="submit" value="Agregar">
                                <input type="submit" value="Actualizar">
                            </form>

                        </div>

                        <div id="Galeria" class="tab-pane fade">
                            <form action="../Functions/informacion/galeriaUpD.php" method="post" enctype="multipart/form-data">
                            <br><br><center><b><h1>Agregar imagen a la Galeria</h1></b></center>
                            <input type="text" placeholder="Ingresa el numero en el cual quieres que apareza" maxlength="1" name="txtposicion" value="">
                                <input type="file" value="Agregar imagen" name="fotoDulce" id="fotoDulce">

                                <div id="imagePreviews">

                                </div>
                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

                                <script type="text/javascript">
                                    (function(){
                                        function filePreview(input){
                                            if(input.files && input.files[0]){
                                                var reader=new FileReader();
                                                reader.onload=function(e){
                                                    $('#imagePreviews').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $('#fotoDulce').change(function(){
                                            filePreview(this);
                                        });
                                    })();
                                </script>


                                <br><br>

                                <input type="submit" value="Agregar ">
                                <input type="submit" value="Editar " class="edit">
                                <input type="submit" value="Elliminar" class="drop">
                            </form>
                        </div>

                        <div id="Noticias" class="tab-pane fade">
                            <form action="../Functions/Administrador/noticiasUp.php" method="post" enctype="multipart/form-data">
                                <h3>Noticias</h3>
                                <input type="text" name="nombnot" placeholder="ingresa el titulo de la noticia" value="">
                                <textarea name="txaDescripcion" rows="6" cols="68" placeholder="Agrega una nueva noticia"></textarea>
                                <input type="date" placeholder="Fecha de inicio: ej.(2018-05-13)" name="fechaini" value="">
                                <input type="time" placeholder="hora de publicacion: ej.(01-45-00)" name="hrapub" value="">

                                <input type="date" placeholder="Fecha de final: ej.(2019-05-13)" name="fechafin" value="">
                                <input type="time" placeholder="hora de finalizacion:: ej.(01-45-00)" name="hrafn" value="">

                                <h4>Agregar imagen de la Noticia(opcional)</h4>
                                <input type="File" value="Agregar imagen" name="fotoProm" id="fotoProm">


                                <div id="imagePreviewP">

                                </div>
                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

                                <script type="text/javascript">
                                    (function(){
                                        function filePreview(input){
                                            if(input.files && input.files[0]){
                                                var reader=new FileReader();
                                                reader.onload=function(e){
                                                    $('#imagePreviewP').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='200' height='200' border='2'></center>");
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $('#fotoProm').change(function(){
                                            filePreview(this);
                                        });
                                    })();
                                </script>
                                <input type="text" name="nunmnoticia" placeholder="ingresa el numerode noticia" maxlength="1" value="">


                                <br><br>
                                <input type="submit" value="Agregar Noticia">
                                <input type="submit" value="Editar " class="edit">
                                <input type="submit" value="Elliminar " class="drop">
                            </form>
                        </div>

                        <div id="Informacion" class="tab-pane fade">

                                <h3>Informacion de la banda</h3>
                                <!-- ................................................................... -->
                                <form class="" action="../Functions/informacion/telefono.php" method="post">
                                  <input type="text" name="telnew" placeholder="ingresa un telefono" id="" maxlength="10"><br>
                                  <input type="submit" value="Actualizar telefono ">
                                </form>
                                <!-- ................................................................... -->
                                <form class="" action="../Functions/informacion/facebookupdate.php" method="post">
                                  <input type="text" name="urlfb" placeholder="ingresa la direccion de Facebook" id=""><br>
                                  <input type="submit" value="Actualizar Facebook ">
                                </form>
                                <!-- ................................................................... -->
                                <form class="" action="../Functions/informacion/instagramupdate.php" method="post">
                                  <input type="text" name="instnew" placeholder="ingresa la direccion de Instagram" id=""><br>
                                  <input type="submit" value="Actualizar Instagram ">
                                </form>
                                <!-- ................................................................... -->
                                <form class="" action="../Functions/informacion/soundclaudupdate.php" method="post">
                                  <input type="text" name="soundCnew" placeholder="ingresa la direccion de SoundCloud " id=""><br>
                                  <input type="submit" value="Actualizar SoundCloud ">
                                </form>
                                <!-- ................................................................... -->
                              <form class="" action="../Functions/informacion/tweeterupdate.php" method="post">
                                <input type="text" name="tweetnew" placeholder="ingresa la direccion de Tweeter" id=""><br>
                                <input type="submit" value="Actualizar Tweeter ">
                              </form>
                              <!-- ................................................................... -->
                              <form class="" action="../Functions/informacion/youtubeupdate.php" method="post">
                                <input type="text" name="newYT" placeholder="ingresa la direccion de Youtube" id=""><br>
                                <input type="submit" value="Actualizar Youtube ">
                              </form>
                              <!-- ................................................................... -->
                              <form class="" action="../Functions/informacion/historaUpdate.php" method="post">
                                <textarea name="txthistria" rows="8" cols="80"maxlength="250" placeholder="su historia va a qui"></textarea>
                                  <input type="submit" name="" value="actualizar Historia">
                              </form>
                                <!-- ................................................................... -->
                              <form class="" action="../Functions/informacion/fotoUpdate.php" method="post">

                                <!--Agregar un boton a cada fila para que se actualizen individualmente  FALTA LA
                                HISTORIA y Algunas Foticos(falta detallar en BD)
                                tambien los videos especficar para donde son
                                ver si necesitan detalle las cacniones-->
                                <h5>selecciona las fotos de la vbanda completa</h5>
                                <input type="file" value="Agregar imagenes" name="fotoB" id="fotoB">
                               <div id="imagePreviewMap">
                                </div>
                                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
                                <script type="text/javascript">
                                    (function(){
                                        function filePreview(input){
                                            if(input.files && input.files[0]){
                                                var reader=new FileReader();
                                                reader.onload=function(e){
                                                    $('#imagePreviewMap').html("<center><img src='"+e.target.result+"' alt='imgPelicula' width='400' height='200' border='2'></center>");
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $('#fotoB').change(function(){
                                            filePreview(this);
                                        });
                                    })();
                                </script>
                                <br><br>
                                <input type="submit" value="Actualizar Foto de la banda "><br><br><br>
                              </form>
                              <form action="" method="post" enctype="multipart/form-data">
                                <input type="submit" value="Editar " class="edit">
                                <input type="submit" value="Elliminar" class="drop">
                            </form>
                        </div>

                        <div id="ConfDeUsuario" class="tab-pane fade">
                            <form action="../Functions/logins/actualizarpass.php" method="post" enctype="multipart/form-data">
                                <center><b><h3>Configuracion de Usuario</h3></b></center>
                                <h4>Contraseña</h4>
                                <input type="password" placeholder="ingresa tu nueva contraseña"  name="NuevaCont"/>
                                <input type="submit" value="Actualizar Contraseña ">
                            </form>
                            <form class="" action="../Functions/logins/emailrestauracion.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="emailrec" placeholder="ingresa un e-mail de recuperacion" id=""><br>
                                <input type="submit" value="Actualizar correo de recuperacion ">
                            </form>
                        </div>

                        <!--<div id="Reportes" class="tab-pane fade">
                            <form action="fpdf181/site/pelisfunc.php  " method="post" enctype="multipart/form-data">
                                <h3>Reportes de Usuario</h3>


                                <input type="submit" value="Ver reporte de visitas">


                            </form>
                        </div>-->
                    </div>

                    <!-- http://localhost/XiloUSERS/fpdf181/site/pelisfunc.php-->
                </div>
                <script src="js/main.js"></script>

                <?php
                        }
                     }else {
                        echo "<center><H1>UPS¡¡¡ Veo que tienes problemas para entrar aqui</H1></center>";
                        echo "<center><H2>Debes iniciar sesion para iniciar<H2></center>";
                        echo "<center><a href='../login.php'>Da CLIK aqui para iniciar sesion</a></center>";
                    }

                ?>

        </body>
    </html>
     <?php
         /*                       //extraemos la imagen o foto en archivo
                                $archivo = $_FILES['foto']['tmp_name'];
                                //extraer el nombre del archivo
                                $nombreArchivo = $_FILES['foto']['name'];
                                echo '<center><img src="'.$_FILES['foto']['tmp_name'].'" alt="imgPelicula" width="200" height="200" border="2"></center>';
                                ?>
