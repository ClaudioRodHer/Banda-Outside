<?php
include("../../DB/ConexionDB.php");
    $posicion=$_POST["txtposicion"];


    //Ruta donde se almacenar� la foto
    $ruta = "../../Recursos/Public";
    //extraemos la imagen o foto en archivo
    $archivo = $_FILES["fotoB"]["tmp_name"];
    $nuevonom="img$posicion";
    $nombreArchivo = $_FILES["fotoB"]["name"];

    $rutaArch = $ruta . "/" . $nuevonom;


    $sql="UPDATE  Banda.FotosGaleria
     SET URL_FotosGaleria='$rutaArch' WHERE clv_FotosGaleria=$posicion ";
       move_uploaded_file($archivo,$rutaArch);
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);


 ?>
