<?php

include("../../DB/ConexionDB.php");
$nuevomail=$_POST["emailrec"];

$sql="UPDATE Banda.Usuario SET Email_Usuario='$nuevomail'";
if (mysqli_query($conection, $sql)) {
    header("location:../../Administrador/PanelControl.php");
} else {
  echo "Problemas al Registrar Pelicula <br> causa: $sql";

}
mysqli_close($conection);
 ?>
