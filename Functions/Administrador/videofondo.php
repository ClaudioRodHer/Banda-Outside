<?php
include("../../DB/ConexionDB.php");

//Ruta donde se almacenar� la foto
$ruta = "../../Recursos/Public/fondos";
//extraemos la imagen o foto en archivo
$archivo = $_FILES["ArchivoV"]["tmp_name"];
//extraer el nombre del archivo
$nombreArchivo = $_FILES["ArchivoV"]["name"];
$maxpeso=$_FILES["ArchivoV"]["size"];
$maxFileSize = 200000000;
$rutaArch = $ruta . "/" . $nombreArchivo;
if ($_FILES["ArchivoV"]["size"] < $maxFileSize) {
	//hacer consultas para ver que onda con las claves
	$sql="UPDATE Banda.Videos SET nombre='$nombreArchivo',URL_Video='$rutaArch'";
	move_uploaded_file($archivo,$rutaArch);
}else {
	echo "error archivo muy grande";
}//104857600

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
