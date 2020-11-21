<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foro</title>
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
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li ><a href="Home.php">Inicio</a></li>
                <li><a href="Discografia.php">Discografia</a></li>
                <li><a href="Videos.php">Videos</a></li>
                <li><a href="Galeria.php">Galeria</a></li>
                <li><a href= "Noticias.php">Noticias</a></li>
                <li class="active"><a href="Foro.php">Foro</a></li>
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
    </header>
    <br><br>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=296259177680892&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
  <p><a href=""></a></p>
<p><a href="https://www.facebook.com/bandaoutsideoficial">Escribe algo para nosotros¡¡</a></p>
<!--  <h1>Cuentanos</h1>
  <h4>Escribe algo para nosotros¡¡</h4>-->
  <br><br>
<div class="fb-comments" border-color:"red"></div>
</center>
  </body>
</html>
