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

        //función para eliminar un profesor en la base de datos
        public function eliminarProfesor($nombreprofesor){

            $sql = "DELETE FROM profesor WHERE nombre=:nombreprofesor";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nombreprofesor", $nombreprofesor);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        //Funciones para la tabla de especialidad
        public function eliminarEspecialidad($nomesp){
            $sql = "DELETE FROM especialidad WHERE Nombre=:nomesp";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nomesp", $nomesp);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }
        public function agregarEspecialidad($nomesp, $carrera){
            $sql = "INSERT INTO especialidad VALUES(null, :nomesp, :carrera)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":nomesp", $nomesp);
            $sentencia->bindParam(":carrera", $carrera);
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

        //funciones noticias
        public function insertarNoticia($tituloNoticia, $descripcion, $foto, $direccion){
            $sql = "INSERT INTO noticias VALUES(null, :titulo, :descripcion, :foto, CURRENT_DATE(), :direccion)";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":titulo", $tituloNoticia);
            $sentencia->bindParam(":descripcion", $descripcion);
            $sentencia->bindParam(":foto", $foto);
            $sentencia->bindParam(":direccion", $direccion);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function editarNoticia($tituloNoticia,$descripcionEditar,$foto,$urlEditar){
            $sql = "UPDATE noticias " .
                "SET descripcion = '" . $descripcionEditar . "'," .
                "url = '" . $urlEditar . "'," .
                "imagen = '" . $foto . "'," .
                "fecha = CURRENT_DATE()" .
                "WHERE titulo = '" . $tituloNoticia . "'";
            if ($this->conexion->query($sql) === TRUE) {
                return 0;
            } else {
                return 1;
            }
        }

        public function editarNoticiaSinFoto($tituloNoticia,$descripcionEditar, $urlEditar){
            $sql = "UPDATE noticias " .
                "SET descripcion = '" . $descripcionEditar . "'," .
                "url = '" . $urlEditar . "'," .
                "fecha = CURRENT_DATE()" .
                "WHERE titulo = '" . $tituloNoticia . "'";
            if ($this->conexion->query($sql) === TRUE) {
                return 0;
            } else {
                return 1;
            }
        }

        public function eliminarNoticia($eliminarn){
            $sql = "DELETE FROM noticias WHERE titulo=:titulo";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":titulo", $eliminarn);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function mostEspecialidades($carrera){
            $sql = "SELECT Nombre FROM especialidad WHERE Carrera=:carrera";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->execute();
            $sentencia->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $sentencia->fetchAll();
            return $resultado;
        }

        public function mostReticula($carrera,$especialidad){
            $sql = "SELECT * FROM materias WHERE carrera=:carrera and (tipo=:tipo or tipo='Tronco Comun')";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam(":carrera", $carrera);
            $sentencia->bindParam(":tipo", $especialidad);
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
