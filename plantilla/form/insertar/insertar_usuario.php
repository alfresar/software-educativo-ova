<?php  

require ("../../conexion/conectar.php");
date_default_timezone_set("America/Bogota");
session_start();

$usuario= trim($_POST['usuario']);
$contrasena=trim($_POST['contrasena']);
$nombres= trim($_POST['nombres']);   
$correo= trim($_POST['correo']);

if (empty($correo)) {
    echo'<script type="text/javascript">
        alert("Datos Ya Ingreados. Por Favor Colocar Otros..");
        window.location.href="../registro.php";
        </script>';    
   } else{
	$insertar= "INSERT INTO usuarios(usuario,contrasena,nombres,correo) VALUES('$usuario','$contrasena','$nombres','$correo')"; 
	mysqli_query($conection,$insertar) or die (mysqli_error($conection));
}
	echo '<script>location.href="../../registro.php"</script>';
?>