<?php
	class conexionBD
	{				
		private $servidor = "localhost";
		private $usuario = "root";
		private $contrasena="";
		private $bd = "cifrado";
		private $conexion;
		
		function conexionBD($servidor,$bd,$usuario,$contrasena){
			$this->servidor = $servidor;
			$this->bd = $bd;
			$this->usuario = $usuario;
			$this->contrasena = $contrasena;
			$this->conectar();

		}

		private function conectar(){
			$this->conexion = mysqli_connect($this->$servidor,$this->usuario,$this->contrasena) or die (mysqli_error());
		}

		private function seleccionarbd(){
			mysqli_select_db($this->bd) or die(mysqli_error());
		}

		
	}
?>
