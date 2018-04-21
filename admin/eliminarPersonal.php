<?php
require_once("DB.php");
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

    foreach($_POST as $indice => $valor){
        $_POST[$indice] = htmlspecialchars($valor);
    }

    extract($_POST);
                if($eliminarp!=""){
                    $conexion = new DB();
                    $resultado = $conexion->eliminarProfesor($eliminarp);
                    if($resultado>0){
                        session_start();
                        $_SESSION['result'] = 'eliminado';
                        header('Location: prueba_admin.php');
                        
                    }
                    else{
                        echo "Error de consulta";
                    }
            }   
}
else{
    
    echo "se genero un error";
}
?>