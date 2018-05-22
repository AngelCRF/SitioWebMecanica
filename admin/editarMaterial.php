<?php
session_start();
require_once("DB.php");
header('Content-type: application/json');
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){
    foreach($_POST as $indice => $valor){
        $_POST[$indice] = htmlspecialchars($valor);
    }
    extract($_POST);
    if( (isset($_FILES['archivoMaterialEditar']) && $_FILES['archivoMaterialEditar']['error'] != 4)){ 
        //echo "llegue al primer if donde ambos archivos existen\n"; 
        //se debe cambiar toda la información del profesor
        //asignar las rutas para guardar los archivos de foto(png, jpg, etc) y CV (pdf)
        $targetdoc = "material/";
        $ruta= "";
        $targetdoc = $targetdoc . basename( $_FILES['archivoMaterialEditar']['name']);
        if(move_uploaded_file($_FILES['archivoMaterialEditar']['tmp_name'], $targetdoc)){
            //echo "The file ". basename( $_FILES['archivo']['name']). " is uploaded";
        }
        else {
            $response_array['status'] = 'errorMaterial';
            echo json_encode($response_array);
            exit;
        }
        $doc = $targetdoc;
        //Eliminar el archivo viejo de CV y foto
        $conexion = new DB();
        $oldDoc = $conexion->ejecutar("SELECT ruta FROM material_apoyo WHERE nombre='".$tituloMaterial."'");
        foreach($oldDoc as $fila){
            $ruta = $fila[0];
        }
        unlink($ruta);
        $ruta= "";
        $resultado = $conexion->editarMaterial($tituloMaterial,$doc,$seccion);
        if($resultado>0){
            $response_array['status'] = 'success';
            echo json_encode($response_array);
            $_SESSION['result']='editado';
            header('Location: alta_material.php');
            exit;
        }
        else{
            $response_array['status'] = 'errorConsulta';
            echo json_encode($response_array);
            $_SESSION['result']='error';
            header('Location: alta_material.php');
            exit;
        }
    }
    else{
        //el usuario no ingresó ningun archivo por lo que solo se modificará el nombre, descripcion y url
        //echo "llegue al ultimo if donde no hay archivos";
        $conexion = new DB();
        $resultado = $conexion->editarMaterialSinDoc($tituloMaterial, $seccion); 
        if($resultado>0){
            $response_array['status'] = 'success';
            echo json_encode($response_array);
            $_SESSION['result']='editado';
            header('Location: alta_material.php');
        }
        else{
            $response_array['status'] = 'errorConsulta';
            echo json_encode($response_array);
            $_SESSION['result']='error';
            header('Location: alta_material.php');
        }
    }  
}
else{
    echo "se genero un error";
}
?>
