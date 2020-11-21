<?php
include("../../DB/ConexionDB.php");

//Ruta donde se almacenar� la foto
$ruta = "../Recursos/Public";
//extraemos la imagen o foto en archivo
$archivo = $_FILES["fotoB"]["tmp_name"];
$nuevonom="imginf";
$nombreArchivo = $_FILES["fotoB"]["name"];

$rutaArch = $ruta . "/" . $nuevonom;


$selet="SELECT FOTOSSINDETALLAR from Banda.Informacion where clv_Informacion='1'"
$resultado_seleccionar = mysqli_query($conection, $selet);
  $sql="UPDATE Banda.Informacion SET FOTOSSINDETALLAR='$rutaArch'";
  move_uploaded_file($archivo,$rutaArch);
  //checar conect
if (mysqli_query($conection, $sql)) {
echo "informacion guardada correctamente<br> causa: $sql";
header("location:../../Administrador/PanelControl.php");
  //header('Refresh: 10; URL=HomeAdmin.php');

//echo '<p class="alert alert-success agileits" role="alert">Captura realizada correctamente!p>';
  //mueve el archivo a la ruta de im/fotoperfil
//  move_uploaded_file($archivo,$rutaArch);
} else {
  echo "Problemas al Registrar Pelicula <br> causa: $sql";

}
mysqli_close($conection);
?>
