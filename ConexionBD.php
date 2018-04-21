<?php
	$conexion = mysqli_connect("192.168.1.69","root","12345678","materiales");
	if(!$conexion){
		echo "No se pudo conectar a base de datos";
		exit;
	}else{
		echo "Mensajes solo para hacer pruebas, si ves esto, la conexión es correcta";
		$mysqli -> mysqli_close();
	}
?>
