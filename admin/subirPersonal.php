<?php
require_once("DB.php");
header('Content-type: application/json');
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

    foreach($_POST as $indice => $valor){
        $_POST[$indice] = htmlspecialchars($valor);
    }

    extract($_POST);
                if($nombreprofesor!=""){
                    echo "Entro al primer if";
                    //agregar archivos al sitioWeb
                    $targetfolder = "CV/";
                    $targetfoto = "foto/";
                    $targetfolder = $targetfolder . basename( $_FILES['archivo']['name']) ;
                   if(move_uploaded_file($_FILES['archivo']['tmp_name'], $targetfolder))
                    {
                        //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
                    }
                    else {
                        $response_array['status'] = 'errorArchivo';
                        echo json_encode($response_array);
                        exit;     
                    }
                    if(!file_exists($_FILES['archivoFoto']['tmp_name']) || !is_uploaded_file($_FILES['name']['tmp_name'])){
                        $targetfoto = $targetfoto . basename( $_FILES['archivoFoto']['name']) ;
                        if(move_uploaded_file($_FILES['archivoFoto']['tmp_name'], $targetfoto))
                        {
                            //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
                        }
                        else {
                            $response_array['status'] = 'errorFoto';
                            echo json_encode($response_array);
                            exit;
                        }
                    }
                    else{
                        $targetfoto= "foto/default.jpg";
                    }
                    
                    $archivo = $targetfolder;
                    $foto = $targetfoto;
                    $conexion = new DB();
                    $resultado = $conexion->insertarProfesor($nombreprofesor, $puesto, $carrera, $archivo, $foto);
                    //$_SESSION['result'] = 'guardado';
                    if($resultado>0){
                        $response_array['status'] = 'success';
                        echo json_encode($response_array);
                        //header('Location: prueba_admin.php');
                    }
                    else{
                        $response_array['status'] = 'errorConsulta';
                        echo json_encode($response_array);
                        exit;
                    }
            }   
}
else{
    
    $response_array['status'] = 'errorConsulta';
    echo json_encode($response_array);
}
?>