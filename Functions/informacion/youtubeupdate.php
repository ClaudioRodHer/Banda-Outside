<?php
include("../../DB/ConexionDB.php");
    $newYT=$_POST["newYT"];

    $sql="UPDATE Banda.Informacion SET Youtube_URL='$newYT'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
