<?php
    require_once("DB.php");
    if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){
        foreach($_POST as $indice => $valor){
            $_POST[$indice] = htmlspecialchars($valor);
        }
        extract($_POST);
        session_start();
        if(isset($archivo)){
            $targetfolder = "ProgramasMaterias/";
            $targetfolder = $targetfolder . basename( $_FILES['archivo']['name']) ;
           if(move_uploaded_file($_FILES['archivo']['tmp_name'], $targetfolder)){
                //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
            } else {
                //echo "Problem uploading file";
            }
            $archivo = $targetfolder;
            $conexion = new DB();
            $file = $conexion->obtenerArchivo($nombremateriaEditar);
            unlink($file['ProgramasMaterias']);
            $resultado = $conexion->editarMateria($nombremateria, $creditosmateria, $tipomateria, $semestremateria, $carrera, $archivo, $abreviacionmateria);
            $_SESSION['result'] = 'editado';
            if($resultado>0){
                header('Location: reticula_admin.php');
            } else {
                header('Location: reticula_admin.php');
                $_SESSION['result'] = 'error';
            }
        } else {
            //En caso de no estar el archivo, solo se cambiará el resto de los datos
            $conexion = new DB();
            $resultado = $conexion->editarMateriaElse($nombremateria, $creditosmateria, $tipomateria, $semestremateria, $carrera, $abreviacionmateria);
            $_SESSION['result'] = 'editado';
            if($resultado>0){
                header('Location: reticula_admin.php');
            } else {
                header('Location: reticula_admin.php');
                $_SESSION['result'] = 'error';
            }
        }   
    } else {
        echo "se genero un error";
    }
?>
