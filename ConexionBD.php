<?php
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
		public function mostrarmateria($semestre){
			$consulta="SELECT * FROM materias WHERE semestre=".$semestre;
			$resultado=mysqli_query($this->conexion, $consulta) or die("Query fail".mysqli_error());
			return $resultado;
		}

		
	}
?>
