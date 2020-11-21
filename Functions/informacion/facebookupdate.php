<?php
include("../../DB/ConexionDB.php");
    $newLink=$_POST["urlfb"];

    $sql="UPDATE Banda.Informacion SET Facebook_URL='$newLink'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
