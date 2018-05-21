<?php 
#inicio de sesión para variables de verificación 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>ITMORELIA| Dept. Metal-Mecánica</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Mecanica"/>
        <meta name="author" content="Jorge Cervantes Ramirez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
        <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
        <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
        <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>  
        <link rel="stylesheet" type="text/css" href="index.css" />
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <style type="text/css">
            body{
                background: #dddddd;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
           }
        </style> 
        <script>
            $(document).ready(function() {
                $('select').material_select();
                $(".button-collapse").sideNav();
                $(".button-collapse").sideNav();
            });
        </script>
    </head>
    <body >
        <!--encabezado y menus-->  
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                $("#navbar").load("navbar.html");
            </script> 
        </div>
        <?php 
            #condiciones para veerificiar que las peticiones fueron aceptadas o rechazadas
            if($_SESSION['result'] == 'guardado'){
                echo '<script>alert("Noticia guardada exitosamente!");</script>';
                //echo "<nav><div class=\"nav-wrapper light-green accent-4\"><H2>Guardado exitosamente</H2></div></nav>";
            }
            if($_SESSION['result'] == 'editado'){
                echo '<script>alert("Noticia editada exitosamente!");</script>';
            }
            if($_SESSION['result'] == 'eliminado'){
                echo '<script>alert("Noticia eliminada exitosamente!");</script>';
            }
            if($_SESSION['result'] == 'error'){
                echo '<script>alert("Error, vuelva a intentarlo más tarde!");</script>';
            }
            if($_SESSION['result'] == 'errorFoto'){
                echo '<script>alert("Error al cargar la foto, selecciona otra o vuelva a intentarlo más tarde!");</script>';
            }
            $_SESSION['result']= "";
        ?>
        <!-- SECCION PARA AGREGAR NOTICIAS-->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Agregar Noticia</h1>
            <form action="subirNoticia.php" method="post" enctype="multipart/form-data" id="agregarNoticiaForm">
                <input type="text" name= "tituloNoticia" id="tituloNoticia" placeholder="Titulo de la noticia">
                <input type="text" name= "descripcion" id="descripcion" placeholder="Descripción de la noticia">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file" accept="image/jpeg" name="archivoFoto" id="archivoFoto">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Image de la noticia">
                    </div>
                </div>
                <input type="text" name="url" id="url" placeholder="URL de la noticia completa">
                <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                    <i class="material-icons right">save</i>
                </button>
            </form>
        </div>
        <!-- SECCION PARA EDITAR NOTICIAS -->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Editar Noticias</h1>
            <form action="editarNoticia.php" method="post" enctype="multipart/form-data" id="editarNoticiasForm">
                <div class="input-field col s12">
                    <label>Noticia</label><br>
                    <select id="tituloNoticia" name="tituloNoticia">
                        <option value="" disabled selected>Selecciona una noticia</option>
                        <?php
                        //Conexion a la base de datos
                        require_once("DB.php");
                        $db = new DB();
                        $SQL = "SELECT titulo FROM noticias";
                        $resultado = $db->ejecutar($SQL);
                        foreach($resultado as $fila){
                            $json= json_decode($fila[0]);
                        ?>
                            <option value="<?php echo $fila[0]?>"><?php echo $fila[0]?></option>  
                            <?php
                        }
                        ?>
                    </select>
                    <br>
                </div>
                <input type="text" name= "descripcionEditar" id="descripcionEditar" placeholder="Descripción de la noticia">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file" accept="image/jpeg" name="archivoFotoEditar" id="archivoFotoEditar">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Image de la noticia">
                    </div>
                </div>
                <input type="text" name="urlEditar" id="urlEditar" placeholder="URL de la noticia completa">
                <button class="btn waves-effect waves-light" type="submit" name="action">Editar
                    <i class="material-icons right">system_update_alt</i>
                </button>
            </form>
        </div>
        <!-- SECCION PARA ELIMINAR NOTICIAS-->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Eliminar Noticias</h1>
            <form action="eliminarNoticia.php" method="post" enctype="multipart/form-data" id="eliminarNoticiasForm">
                <div class="input-field col s12">
                    <label>Eliminar</label><br>
                    <select id="tituloNoticia" name="tituloNoticia">
                        <option value="" disabled selected>Selecciona una noticia</option>
                        <?php
                        //Conexion a la base de datos
                        require_once("DB.php");
                        $db = new DB();
                        $SQL = "SELECT titulo FROM noticias";
                        $resultado = $db->ejecutar($SQL);
                        foreach($resultado as $fila){
                            $json= json_decode($fila[0]);
                        ?>
                            <option value="<?php echo $fila[0]?>"><?php echo $fila[0]?></option>  
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                    <i class="material-icons right">delete_forever</i>
                </button>
            </form>
        </div>
    </body>
</html> 