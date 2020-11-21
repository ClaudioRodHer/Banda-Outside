<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Videos</title>
    <!--Limea responsva-->
      <meta name="viewport" content="width=device-width,user-scalable=no,
      initial-scale=1,maximum-scale=1,minimum-scale=1" />
      <meta name="viewport" content="width=device-width,
       user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

      <!-- ------------------------------------------------------------------------------------------------------------------------- -->


      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="..\CSS\Publico\EstiloHome.css">
      <link rel="stylesheet" href="..\CSS\Publico\estilos0.css">
      <link rel="stylesheet" href="../CSS/Publico/titulosneon.css">
      <link rel="stylesheet" href="../css/Publico/responsivevideos.css">
  </head>
  <body >
    <header>
     <!----------------------------------------------------------------------------------------------------
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="glyphicon glyphicon-menu-hamburger"></span>Xilotzin</a>
        </div>
        para que no se roben el CODIGO se pondr esto alado del body
        oncontextmenu="return false" onkeydown="return false"
        ---------------------------------------------------------------------------------------------------->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li ><a href="Home.php">Inicio</a></li>
                <li><a href="Discografia.php">Discografia</a></li>
                <li class="active"><a href="Videos.php">Videos</a></li>
                <li><a href="Galeria.php">Galeria</a></li>
                <li><a href= "Noticias.php">Noticias</a></li>
                <li><a href="Foro.php">Foro</a></li>
                <li><a href="InformacionBanda.php">Informacion</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                  <li>
                    <?php
                        $conexion=mysqli_connect("localhost","root","","Banda");
                            $query=$conexion->query("SELECT * FROM Banda.Informacion where clv_Informacion=1");
                        while($row=$query->fetch_assoc()){
                          echo '<a href="'.$row['Facebook_URL'].'" target="_blank">
                              <span class="fa fa-facebook" style="color:white"></span> </a>';

                        }
                      ?></li>
                  <li><?php
                      $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT * FROM Banda.Informacion where clv_Informacion=1");
                      while($row=$query->fetch_assoc()){
                        echo '<a href="'.$row['instagram_URL'].'" target="_blank">
                              <span class="fa fa-instagram" style="color:white" ></span></a>';
                        }
                    ?></li>
                  <li><?php
                      $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT * FROM Banda.Informacion where clv_Informacion=1");
                      while($row=$query->fetch_assoc()){
                        echo '<a href="'.$row['SoundCloud_URL'].'" target="_blank">
                              <samp  class="fa fa-soundcloud" style="color:white"></samp></a>';

                      }
                    ?></li>
                  <li><?php
                      $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT * FROM Banda.Informacion where clv_Informacion=1");
                      while($row=$query->fetch_assoc()){
                        echo '<a href="'.$row['Tweeter_URL'].'" target="_blank">
                              <samp class="fa fa-twitter-square" style="color:white"></samp></a>';

                      }
                    ?></li>
                  <li><?php
                      $conexion=mysqli_connect("localhost","root","","Banda");
                          $query=$conexion->query("SELECT * FROM Banda.Informacion where clv_Informacion=1");
                      while($row=$query->fetch_assoc()){
                        echo '<a href="'.$row['Youtube_URL'].'" target="_blank">
                            <samp  class="fa fa-youtube-play" style="color:white"></samp></a>';

                      }
                    ?></li>
              </ul>
        </div>
    </nav>
  </header><br>  <center>
    <p><a href=""></a></p>
<p><a href="https://www.youtube.com/channel/UC763zG65wIrm-hvtCUgeu2Q">Ven a ver...</a></p>
</center>
<main>


  <table border="0">
    <thead>
    <th></th>
    </thead>
  <?php
    include("../DB/ConexionDB.php");//los dos puntos y / son para retroceder una carpeta
  //Aqui vamos a prepara la consulta para extraer todos los Cursos
  $consulta = "SELECT Videos.nombre FROM Banda.Videos WHERE seccion='VideosLista'";
  //Ejecutamos la consulta con la siguiente trader_linea
  $ejeConsulta = mysqli_query($conection, $consulta); //cn es el identificador que colocamos en la conexion.php
  //solamente cuando la consulta devuelve datos es necesario
  //guardarlo en una variable de lo conbtrario
  //en este caso si por que es un SELECT y el si da resultado, un INSERT no da resultados
  //por lo tanto no se guardara en una variable
  //extraemos los datos de la Consulta
  while ($registro = mysqli_fetch_assoc($ejeConsulta)) {
  echo "<tr>
  <td><iframe width='1200' height='360' src='https://www.youtube.com/embed/".$registro["nombre"]."?autoplay=0' frameborder='0'
    autoplay; encrypted-media; gyroscope; picture-in-picture'
   allowfullscreen></iframe><br><br></td>
  </tr>";
  # <p href='#' data-toggle='popover' title='Aqui va a ir el precio de los dulces'> href='editar_Curso.php?idc=".$registro["id_curso"]."'
  }
  mysqli_close($conection);
   ?>

   </table>


  <video src="../Recursos/Public/logo.png" autoplay poster="../Recursos/Public/logo.png">

  </video>
</main>
</html>
