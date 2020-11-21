  <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Informacion  </title>
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
      <link rel="stylesheet" href="../CSS/Publico/estiloHistoria.css">

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
                <li><a href="Home.php">Inicio</a></li>
                <li><a href="Discografia.php">Discografia</a></li>
                <li><a href="Videos.php">Videos</a></li>
                <li><a href="Galeria.php">Galeria</a></li>
                <li><a href= "Noticias.php">Noticias</a></li>
                <li><a href="Foro.php">Foro</a></li>
                <li class="active"><a href="InformacionBanda.php">Informacion</a></li>
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
<h1>Informacion Bandas</h1>

<div id="general">

<div id="resenias">
<div id="fotosC">
  <center>
<p>Un Poco de Historia</p>
<?php
  $conexion=mysqli_connect("localhost","root","","Banda");
  $query=$conexion->query("SELECT HistoriaBanda FROM Banda.Informacion where clv_Informacion=1");
  while($row=$query->fetch_assoc()){
  echo'<option value="'.$row['HistoriaBanda'].'">'.$row['HistoriaBanda'].'</option>'."\n";
  }
?>
</div>
<center>
<?php
  $conexion=mysqli_connect("localhost","root","","Banda");
  $query=$conexion->query("SELECT FOTOSSINDETALLAR FROM Banda.Informacion where clv_Informacion=1");
  while($row=$query->fetch_assoc()){
    echo '<img src="'.$row['FOTOSSINDETALLAR'].'" alt="" width="600" height="250">';
  }
?>
</center>

</div>
<center>
<div id="informacion">
<h4>Nuestra Ubicacion</h4>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63638.837301450716!2d-74.15260881809334!3d4.516754826139373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x8e3fa3ef6ffabed1%3A0x153a3d879c5bb4d!2sAcademia+Vive+Artes%2C+Cl.+73d+Bis+Sur+%23%2314+12%2C+Bogot%C3%A1%2C+Cundinamarca%2C+Colombia!3m2!1d4.5166701!2d-74.117589!4m5!1s0x8e3fa3ef6ffabed1%3A0x153a3d879c5bb4d!2svive+artes!3m2!1d4.5166701!2d-74.117589!5e0!3m2!1ses!2smx!4v1546967644053"
  width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe></center><br>
<h4>Contactanos</h4>
<p>Telefono:</p>
<?php
  $conexion=mysqli_connect("localhost","root","","Banda");
  $query=$conexion->query("SELECT Telefono FROM Banda.Informacion where clv_Informacion=1");
  while($row=$query->fetch_assoc()){
  echo'<option value="'.$row['Telefono'].'">'.$row['Telefono'].'</option>'."\n";
  }
?>
<p>E-mail</p>
<?php
  $conexion=mysqli_connect("localhost","root","","Banda");
  $query=$conexion->query("SELECT Email FROM Banda.Informacion where clv_Informacion=1");
  while($row=$query->fetch_assoc()){
  echo'<option value="'.$row['Email'].'">'.$row['Email'].'</option><br>'."\n";
  }
?>
</div>
</center>

</div>
  </body>
</html>
