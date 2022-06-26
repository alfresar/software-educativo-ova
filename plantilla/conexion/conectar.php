<?php 

// me permite la coneccion a la base de datos
$conection=mysqli_connect("localhost","root","");
if(!$conection) {die ("no hay conexion").mysql_error();
}

mysqli_select_db($conection,"sistema_educativo_ova");


//asovicto_sistema_educativo_ova

 ?>
