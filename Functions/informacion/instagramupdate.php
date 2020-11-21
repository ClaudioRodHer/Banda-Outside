<?php
include("../../DB/ConexionDB.php");
    $newinst=$_POST["instnew"];

    $sql="UPDATE Banda.Informacion SET instagram_URL='$newinst'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
