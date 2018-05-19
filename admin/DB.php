<?php
    class DB{

        //CONSTRUCTOR
        function __construct(){
            try { 
            //incluir variables de conexion
            require_once("datos_conexion.php");
                //echo var_dump($datos_conexion);
                $usuario = 'root';
                $pass = '12345678';
                $this->conexion = new PDO('mysql:host=127.0.0.1;dbname=mecanica;', $usuario, $pass);
                //echo "Conexion exitosa";
            }catch(PDOException $e){
                die("Error al conectarse:". $e->getMessage());
            }    
        }
        //EJECUTAR CONSULTAS SQL
        public function ejecutar($sql){
            if($this->conexion){
                return $this->conexion->query($sql)->fetchAll();
            }else{
                return null;
            }
        }

        //FUNCIONES PARA ADMINISTRAR Profesores
        public function insertarProfesor($nombreprofesor, $puesto, $carrera, $archivo, $foto){

            $sql = "INSERT INTO profesor VALUES(null, :nombre, :tipo, :carrera, :archivo, :foto)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombre", $nombreprofesor);
            $sentencia->bindParam(":tipo", $puesto);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":archivo", $archivo);
            $sentencia->bindParam(":foto", $foto);
            $sentencia->execute();
            
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function editarProfesorFoto($nombreprofesor, $puesto, $carrera, $foto){

            $sql = "UPDATE profesor SET Tipo=:puesto, Carrera=:carrera, foto=:foto WHERE nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->bindParam(":puesto", $puesto);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":foto", $foto);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function editarProfesorCV($nombreprofesor, $puesto, $carrera, $archivo){

            $sql = "UPDATE profesor SET Tipo=:puesto, Carrera=:carrera, CV=:archivo WHERE Nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->bindParam(":puesto", $puesto);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":archivo", $archivo);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function editarProfesor($nombreprofesor, $puesto, $carrera, $archivo, $foto){

            $sql = "UPDATE profesor SET Tipo=:puesto, Carrera=:carrera, CV=:archivo, foto=:foto WHERE Nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->bindParam(":puesto", $puesto);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":archivo", $archivo);
            $sentencia->bindParam(":foto", $foto);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function eliminarProfesor($nombreprofesor){

            $sql = "DELETE FROM profesor WHERE nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function obtenerDatosProfesor($nombreprofesor){

            $sql = "SELECT puesto, carrera FROM profesor WHERE nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function obtenerArchivo($nombreprofesor){
            $sql = "SELECT CV FROM profesor WHERE nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        
        public function editarProfesorPuesto($nombreprofesorEditar, $puestoeditar, $carreraeditar){
            $sql = "UPDATE profesor SET Tipo=:puestoeditar, Carrera=:carreraeditar WHERE Nombre=:nombreprofesorEditar";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":puestoeditar", $puestoeditar);
            $sentencia->bindParam(":carreraeditar", $carreraeditar);
            $sentencia->bindParam(":nombreprofesorEditar", $nombreprofesorEditar);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        //FUNCIONES PARA ADMINISTRAR MATERIAS
        public function insertarMateria($nombremateria, $creditosmateria, $tipomateria, $semestremateria, $carrera, $abreviacionmateria, $archivo){
            $sql = "INSERT INTO materias VALUES(null, :materia, :creditos, :tipo, :semestre, :programa, :carrera, :abreviacion)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":materia", $nombremateria);
            $sentencia->bindParam(":creditos", $creditosmateria);
            $sentencia->bindParam(":tipo", $tipomateria);
            $sentencia->bindParam(":semestre", $semestremateria);
            $sentencia->bindParam(":programa", $archivo);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":abreviacion", $abreviacionmateria);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function editarMateria($nombremateriaeditar, $creditosmateriaeditar, $tipomateriaeditar, $semestremateriaeditar, $carreraeditar, $abreviacionmateriaeditar, $archivoeditar){
            $sql = "UPDATE materias SET creditos=:creditos, tipo=:tipo, semestre=:semestre, programa=:programa,  carrera=:carrera, abreviacion=:abreviacion WHERE materia=:materia";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":materia", $nombremateriaeditar);
            $sentencia->bindParam(":creditos", $creditosmateriaeditar);
            $sentencia->bindParam(":tipo", $tipomateriaeditar);
            $sentencia->bindParam(":semestre", $semestremateriaeditar);
            $sentencia->bindParam(":programa", $archivoeditar);
            $sentencia->bindParam(":carrera", $carreraeditar);
            $sentencia->bindParam(":abreviacion", $abreviacionmateriaeditar);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function eliminarMateria($nombremateria){
            $sql = "DELETE FROM materias WHERE materia=:nombremateria";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombremateria", $nombremateria);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function obtenerDatosMateria($nombremateria){
            $sql = "SELECT materia,creditos,tipo,semestre,carrera,abreviacion FROM materias WHERE materia=:nombremateria";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombremateria", $nombremateria);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function obtenerArchivoMaterias($nombremateria){
            $sql = "SELECT url FROM materias WHERE materia=:nombremateria";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombremateria", $nombremateria);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        
        public function editarMateriaElse($nombremateria, $creditosmateria, $tipomateria, $semestremateria, $carrera, $abreviacionmateria){
            $sql = "UPDATE materias SET creditos=:creditos, tipo=:tipo, semestre=:semestre, carrera=:carrera, abreviacion=:abreviacion WHERE materia=:materia";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":materia", $nombremateria);
            $sentencia->bindParam(":creditos", $creditosmateria);
            $sentencia->bindParam(":tipo", $tipomateria);
            $sentencia->bindParam(":semestre", $semestremateria);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":abreviacion", $abreviacionmateria);
            $sentencia->execute(); 
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        //FUNCIONES PARA ADMINISTRAR INDICES
        public function insertarIndice($carrera, $periodo, $fecha){
            $sql = "INSERT INTO indices VALUES(null, :carrera, :periodo, :fecha)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":periodo", $periodo);
            $sentencia->bindParam(":fecha", $fecha);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        public function eliminarIndice($carrera, $periodo, $fecha){
            $sql = "DELETE FROM indices WHERE carrera=:carrera AND periodo=:periodo AND fecha=:fecha";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":periodo", $periodo);
            $sentencia->bindParam(":fecha", $fecha);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
    }