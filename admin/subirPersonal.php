<?php
require_once("DB.php");
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

    foreach($_POST as $indice => $valor){
        $_POST[$indice] = htmlspecialchars($valor);
    }

    extract($_POST);
                if($nombreprofesor!=""){
                    $targetfolder = "CV/";
                    $targetfoto = "foto/";

                    $targetfolder = $targetfolder . basename( $_FILES['archivo']['name']) ;
                    $targetfoto = $targetfoto . basename( $_FILES['archivoFoto']['name']) ;
                   if(move_uploaded_file($_FILES['archivo']['tmp_name'], $targetfolder))
                    {
                        //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
                    }
                    else {
                        //echo "Problem uploading file";
                    }
                    if(move_uploaded_file($_FILES['archivoFoto']['tmp_name'], $targetfoto))
                    {
                        //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
                    }
                    else {
                        //echo "Problem uploading file";
                    }
                    $archivo = $targetfolder;
                    $foto = $targetfoto;
                    $conexion = new DB();
                    $resultado = $conexion->insertarProfesor($nombreprofesor, $puesto, $carrera, $archivo, $foto);
                    session_start();
                    $_SESSION['result'] = 'guardado';
                    if($resultado>0){
                        header('Location: prueba_admin.php');
                    }
                    else{
                        header('Location: prueba_admin.php');
                        $_SESSION['result'] = 'error';
                    }
            }   
}
else{
    
    echo "se genero un error";
}
?>