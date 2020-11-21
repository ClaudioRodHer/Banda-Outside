<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="http://allfont.es/allfont.css?fonts=futura-normal" rel="stylesheet" type="text/css" />


        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <title>Login</title>
        <link rel="stylesheet" href="../../CSS\Publico\EstiloHome.css">
      <link rel="stylesheet" href="../../CSS/Administrador/estilos.css">
      <link rel="stylesheet" href="../../CSS/Publico/estilorep.css">
      <link rel="stylesheet" href="../../JS/album.js">

    </head>
    <body>
      <a href="#"></a>
            <?php
            $nuevapass = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);

            /*Configuracion de variables para enviar el correo*/
				$destino="isaiasclaudio777@gmail.com";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$desde="From:"."Banda Outside";//Tu contraseña de gmail
				$asunto="Recuperacionn de Contraseña";//correo electronico que recibira el mensaje
				$mensaje="Hola tu cotraseña temporal es:\r\n $nuevapass \r\n Recuerda que debes cambiarla
          por una de tu agrado en las confguraciiones de Usuario para tu seguridad";//Ruta de la plantilla HTML para enviar nuestro mensaje

		          mail($destino,$asunto,$mensaje,$desde);
            // El mensaje
            /*  $mensaje = "Hola tu cotraseña temporal es:\r\n $nuevapass \r\n Recuerda que debes cambiarla
              por una de tu agrado en las confguraciiones de Usuario para tu seguridad";
          // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
              $mensaje = wordwrap($mensaje, 70, "\r\n");
          // Enviarlo
              mail('isaiasclaudio777@gmail.com', 'cambio de contraseña', $mensaje);*/
              //------------------------------------------------------------------
              //ingreso y actualizacion ala BD
              include("../../DB/ConexionDB.php");

              $sql="UPDATE Banda.Usuario SET contrasenia='$nuevapass'";
              if (mysqli_query($conection, $sql)) {
              echo "<center><b><h1>Por favor revisa tu correo electronico <br>  para recuperar tu contraseña</h1></b></center>";
              echo "<center><b><a href='../../login.php'>Volver al login</a></b></center>";
              } else {
                echo "Problemas al Registrar Pelicula <br> causa: $sql";

              }
              mysqli_close($conection);


            /*$mail = "Prueba de mensaje";
            //Titulo
            $titulo = "PRUEBA DE TITULO";
            //cabecera
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
            //dirección del remitente
            $emailuser="isaiasclaudio777@gmail.com":
            $headers .= "From: $emailuser < $emailuser >\r\n";
            //Enviamos el mensaje a tu_dirección_email
            $bool = mail("$emailuser",$titulo,$mail,$headers);
            if($bool){
                echo "Mensaje enviado";
            }else{
                echo "Mensaje no enviado";

             */?>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
