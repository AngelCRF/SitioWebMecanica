<?php
	$conexion = mysqli_connect("ip","usuario","contraseña","base de datos");
	if(!$conexion){
		echo "No se pudo conectar a base de datos";
		exit;
	}else{
		echo "Mensajes solo para hacer pruebas, si ves esto, la conexión es correcta";
		$mysqli -> mysqli_close();
	}
?>
