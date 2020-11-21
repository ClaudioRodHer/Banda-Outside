<?php
include("../../DB/ConexionDB.php");
    $nombnot=$_POST["nombnot"];
    $descNot=$_POST["txaDescripcion"];
    $fchaIN=$_POST["fechaini"];
    $hraIN=$_POST["hrapub"];
    $fechaEND=$_POST["fechafin"];
    $hraIN=$_POST["hrafn"];
    $numnot=$_POST["nunmnoticia"];

    //Ruta donde se almacenar� la foto
    $ruta = "../../Recursos/Public";
    //extraemos la imagen o foto en archivo
    $archivo = $_FILES["fotoB"]["tmp_name"];
    $nuevonom="imginf";
    $nombreArchivo = $_FILES["fotoB"]["name"];

    $rutaArch = $ruta . "/" . $nuevonom;


    $sql="UPDATE  Banda.Noticias
     SET Nombre_Noticias='$newLink',
     Descripcion_Noticias='$descNot',
     FechaPublicacion_Noticias='$fchaIN',
     HoraPub_Noticias='$hraIN',
     FechaFin_Noticias='$fechaEND',
     HoraFinPub_Noticias='$hraIN',
     URL_Img_Noticias='$rutaArch' WHERE idNoticias=$numnot ";
       move_uploaded_file($archivo,$rutaArch);
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);


 ?>
