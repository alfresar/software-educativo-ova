<?php

require('conexion/conectar.php');
$id_usuario2 = $_SESSION['id_usuario'];
    $consulta= "SELECT * FROM usuarios where id_usuario='$id_usuario2'"; 
    $resultado= mysqli_query($conection,$consulta) or die (mysqli_error($conection));
      	$c=0;
      	while($fila=mysqli_fetch_array($resultado)){
      			$c++;
           $_SESSION['id_usuario']= $fila['id_usuario']; 
      	}
?>