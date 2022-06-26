<?php 

//error_reporting(0);
//index de variables de sesión
if (!isset($_SESSION)) {
  session_start(); 

	// isset datos vacios
	if(isset($_POST['user']) && !empty($_POST['user'])&&
		isset($_POST['pass']) && !empty($_POST['pass'])) {

	require('conectar.php');

	//Recibir los datos ingresados en el formulario
	$nombre= trim($_POST['user']);
	$contrasena= trim($_POST['pass']);

		if ($nombre== null || $contrasena== null) {
			echo '<span>Datos vacios</span>';
		}

		else{

			 $consulta= "SELECT * FROM usuarios WHERE usuario='".$nombre."' AND contrasena='".$contrasena."'"; 
		$resultado= mysqli_query($conection,$consulta) or die (mysqli_error($conection));
		 $fila=mysqli_fetch_array($resultado);

		$consulta2= "SELECT * FROM usuarios WHERE usuario='".$nombre."' AND contrasena='".$contrasena."'"; 
		$resultado2= mysqli_query($conection,$consulta) or die (mysqli_error($conection));
		$fila2=mysqli_num_rows($resultado2);

			if ($fila2==0) {
				echo'<script type="text/javascript">
			    alert("Usuario y/o Contraseña Incorrecta");
			    window.location.href="../index.html";
			    </script>';
			}

			else{
				//******************************* 
				 $_SESSION['id_usuario'] = $fila['id_usuario'];
						// echo "<br>";
				 $_SESSION['usuario'] = $fila['usuario'];
				 echo '<script>location.href="../app.php"</script>';			
				//************************	
			}
		}//fin else datos vacios 	
	}// fin isset datos vacios
	
}
	


?>
