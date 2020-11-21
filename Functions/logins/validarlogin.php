<?php
include("../../DB/ConexionDB.php");

if (isset($_POST["txtUsuario"]) && isset($_POST["txtPass"])) {
  $user = $_POST["txtUsuario"];
  $pass =$_POST["txtPass"];

    $sql = "SELECT
    Usuario.clv_Usuario,
    Usuario.Nombre_Usuario,
    Usuario.`contrasenia`,
    Usuario.Tipo_Usuario,
    Usuario.Status_Usuario
    FROM
    Banda.Usuario
    where
    Usuario.Nombre_Usuario='$user'
    AND Usuario.`contrasenia`='$pass'";


    $resultado = mysqli_query($conection, $sql);

    if ($datos = mysqli_fetch_assoc($resultado)) {
        session_start();
        $_SESSION["clv_Usuario"] = $datos["clv_Usuario"];
        $_SESSION["nombre"] = $datos["Nombre_Usuario"];
        $_SESSION["contrasenia"] = $datos["contrasenia"];
        $_SESSION["Tipo_Usuario"] = $datos["Tipo_Usuario"];
        $_SESSION["stat"]=$datos["Status_Usuario"];
    }
    if ($datos["clv_Usuario"]== 1) {
        header("location: ../../Administrador/PanelControl.php");

        //Si Existe
    } else {
        echo "$user y $pass";
        header("location:../../login.php");
        echo "$user y $pass";
    }
    /*es para acceso universa a la configuracion
    if ($usuario="developer" && $pass="devel0per@12") {
        header("location:../Admin/HomeAdmin.php");
    }*/
} else {
   echo "datos no recibidos";
}
 ?>
