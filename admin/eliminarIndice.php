<?php
    require_once("DB.php");
    if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){
        foreach($_POST as $indice => $valor){
            $_POST[$indice] = htmlspecialchars($valor);
        }
        extract($_POST);
        //falta eliminar el archivo
        if($eliminarindice!=""){
            $conexion = new DB();
            $resultado = $conexion->eliminarIndice($carrera, $periodo, $fecha);
            session_start();
            if($resultado>0){
                $_SESSION['result'] = 'eliminado';
                header('Location: reticula_admin.php');        
            } else {
                $_SESSION['result'] = 'error';
                echo "Error de consulta";
            }
        }   
    } else {
        echo "se genero un error";
    }
?>