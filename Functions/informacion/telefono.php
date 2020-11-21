<?php
include("../../DB/ConexionDB.php");
    $newTel=$_POST["telnew"];

    $sql="UPDATE Banda.Informacion SET Telefono='$newTel'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
