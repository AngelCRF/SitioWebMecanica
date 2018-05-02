<?php
<<<<<<< HEAD
	$conexion = mysqli_connect("192.168.1.69","root","12345678","materiales");
	if(!$conexion){
		echo "No se pudo conectar a base de datos";
		exit;
	}else{
		echo "Mensajes solo para hacer pruebas, si ves esto, la conexión es correcta";
		$mysqli -> mysqli_close();
=======
	class conexionBD
	{				
		private $servidor = "";
		private $usuario = "";
		private $contrasena="";
		private $bd = "";
		private $conexion;
		
		function conexionBD($servidor,$bd,$usuario,$contrasena){
			$this->servidor = $servidor;
			$this->bd = $bd;
			$this->usuario = $usuario;
			$this->contrasena = $contrasena;
			$this->conectar();
			$this->seleccionarbd();
		}

		private function conectar(){
			$this->conexion = mysqli_connect($this->servidor,$this->usuario,$this->contrasena) or die (mysqli_error());
		}

		private function seleccionarbd(){
			mysqli_select_db($this->conexion,$this->bd) or die(mysqli_error());
		}
		public function mostrarmateria($semestre,$carrera,$especialidad){
			$consulta="SELECT * FROM `materias` WHERE semestre=".$semestre." and carrera='".$carrera."' and (tipo='".$especialidad."' or tipo='Tronco Comun')";
			$resultado=mysqli_query($this->conexion, $consulta)or die("Query fail: ".mysqli_error($this->conexion));
			return $resultado;
		}

		
>>>>>>> 3918d997bfcb588c137564e0bb851c3c42a8f19c
	}
?>
