<?php
    class BD{
        function __construct(){
            try {
                require_once("datos_conexion.php");
                $usuario = 'root';
                $pass = '12345678';
                $this->conexion = new PDO('mysql:host=127.0.0.1;dbname=mecanica;', $usuario, $pass);
            } catch(PDOException $e) {
                die("Error al conectarse:". $e->getMessage());
            }    
        }
    
        public function ejecutar($sql){
            if($this->conexion){
                return $this->conexion->query($sql)->fetchAll();
            }else{
                return null;
            }
        }
    }