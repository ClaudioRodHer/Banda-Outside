<?php
include("../../DB/ConexionDB.php");
    $newhist=$_POST["txthistria"];

    $sql="UPDATE Banda.Informacion SET HistoriaBanda='$newhist'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
