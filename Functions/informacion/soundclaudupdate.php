<?php
include("../../DB/ConexionDB.php");
    $newSC=$_POST["soundCnew"];

    $sql="UPDATE Banda.Informacion SET SoundCloud_URL='$newSC'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
