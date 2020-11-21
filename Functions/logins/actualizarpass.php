<?php
include("../../DB/ConexionDB.php");
$nuevapass=$_POST["NuevaCont"];

$sql="UPDATE Banda.Usuario SET contrasenia='$nuevapass'";
if (mysqli_query($conection, $sql)) {
    header("location:../../Administrador/PanelControl.php");
} else {
  echo "Problemas al Registrar Pelicula <br> causa: $sql";

}
mysqli_close($conection);

 ?>
