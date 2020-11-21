<?php
include("../../DB/ConexionDB.php");
    $newTweet=$_POST["tweetnew"];

    $sql="UPDATE Banda.Informacion SET Tweeter_URL='$newTweet'";
    if (mysqli_query($conection, $sql)) {
        header("location:../../Administrador/PanelControl.php");
    } else {
      echo "Problemas al Registrar Pelicula <br> causa: $sql";
    }
mysqli_close($conection);
?>
