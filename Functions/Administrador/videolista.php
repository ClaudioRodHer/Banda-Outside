<?php
include("../../DB/ConexionDB.php");
$urlyoutube=$_POST["txtvidyoutube"];
$caracteresurlyouyube=substr($urlyoutube,32,43);
echo "$caracteresurlyouyube";
	//hacer consultas para ver que onda con las claves
$sql="INSERT Banda.Videos values(null,'$caracteresurlyouyube','VideosLista','$urlyoutube',DEFAULT)";
if (mysqli_query($conection, $sql)) {
echo "informacion guardada correctamente<br> causa: $sql";
header("location:../../Administrador/PanelControl.php");

} else {
  echo "Problemas al Registrar Pelicula <br> causa: $sql";

}
mysqli_close($conection);
/*
32-11
33-43
*/
 ?>
