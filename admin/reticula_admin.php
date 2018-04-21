<?php 
    session_start();
    if($_SESSION['result'] == 'guardado'){
        echo "<h2 style=\"background-color: green;\">Guardado exitosamente<h2>";
    }
    if($_SESSION['result'] == 'editado'){
        echo "<h2 style=\"background-color: green;\">Editado exitosamente<h2>";
    }
    if($_SESSION['result'] == 'eliminado'){
        echo "<h2 style=\"background-color: green;\">Eliminado exitosamente<h2>";
    }
    if($_SESSION['result'] == 'error'){
        echo "<h2 style=\"background-color: red;\">Error, vuelva a intentarlo<h2>";
    }
    $_SESSION['result']= "";
?>
<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->
<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mec�nica</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <!-- Materialized libraries -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="icon" href="img/icon.png"/>
        <!--Import jQuery before materialize.js-->
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/admin.js"/></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/agregarPersonal.js"/></script>
        <style type="text/css">
            body{
                background: #dddddd;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
            }
        </style>
    </head>
    <body>  
        <!--Encabezado y menus-->
        <nav>
            <div class="nav-wrapper grey darken-1">
                <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only left"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo center"><h5>Metal Mecánica</h5></a>
            </div>
        </nav>
        <nav class="hide-on-med-and-down">
            <div class="nav-wrapper grey darken-1 center-align">
                <ul class="center hide-on-med-and-down">
                    <li><a href="prueba_admin.php"><i class="material-icons">Personal</i></a></li>
                    <li><a href="reticula_admin.php"><i class="material-icons">Reticula</i></a></li>
                </ul>
            </div>
        </nav>
        <!-- SECCION PARA AGREGAR LAS MATERIAS -->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Agregar Materia</h1>
            <form action="subirMateria.php" method="post" enctype="multipart/form-data">
                <input type="text" name= "nombremateria" id="nombremateria" placeholder="Nombre de la materia">
                <input type="number"  min="0" max="11" name= "creditosmateria" id="creditosmateria" placeholder="Creditos de la materia">
                <input type="text" name= "tiposmateria" id="tipomateria" placeholder="Tipo de la materia">
                <input type="number"  min="1" max="12" name= "semestremateria" id="semestremateria" placeholder="Semestre de la materia">
                <div class="input-field col s12">
                    <select id="carrera" name="carrera">
                        <option value="mecanica">Mec&aacutencia</option>
                        <option value="mecatronica">Mecatr&oacutenica</option>
                    </select>
                    <label>Carrera</label>
                </div>
                <label for="archivo">Seleccione un archivo para subir</label>  
                <br>
                <input type="file"  accept="application/pdf" name="archivo" id="archivo">
                <br>
                <br>
                <input type="submit" value="Guardar">
            </form>
        </div>
        <!-- SECCION PARA EDITAR LAS MATERIAS -->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Editar Materia</h1>
            <form action="editarMateria.php" method="post" enctype="multipart/form-data">
                <div class="input-field col s12">
                    <select id="nombremateriaeditar" class="nombremateriaeditar" name="nombremateriaeditar">
                        <option value="" disabled selected>Elija una Materia</option>
                        <?php
                            //Conexion a la base de datos
                            require_once("DB.php");
                            $db = new DB();
                            $SQL = "SELECT nombre FROM materias";
                            $resultado = $db->ejecutar($SQL);
                            foreach($resultado as $fila){
                                $json= json_decode($fila[0]);
                        ?>
                        <option value="<?=$fila[0]?>">
                            <?=$fila[0]?>
                        </option>  
                        <?php
                            }
                        ?>
                    </select>
                    <label>Profesor</label>
                </div>
                <input type="text" name= "nombremateriaeditar" id="nombremateriaeditar" placeholder="Nombre de la materia">
                <input type="number"  min="0" max="11" name= "creditosmateriaeditar" id="creditosmateriaeditar" placeholder="Creditos de la materia">
                <input type="text" name= "tiposmateriaeditar" id="tipomateriaeditar" placeholder="Tipo de la materia">
                <input type="number"  min="1" max="12" name="semestremateriaeditar" id="semestremateriaeditar" placeholder="Semestre de la materia">
                <div class="input-field col s12">
                    <select id="carreraeditar" name="carreraeditar">
                        <option value="mecanica">Mec&aacutencia</option>
                        <option value="mecatronica">Mecatr&oacutenica</option>
                    </select>
                    <label>Carrera</label>
                </div>
                <label for="archivo">Seleccione un archivo para subir</label>  
                <br>
                <input type="file"  accept="application/pdf" name="archivoeditar" id="archivoeditar">
                <br>
                <br>
                <input type="submit" value="Guardar">
            </form>
        </div>
        <!-- SECCION PARA ELIMINAR A LAS MATERIAS -->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <h1>Eliminar Materia</h1>
            <form action="eliminarMateria.php" method="post" enctype="multipart/form-data">
                <div class="input-field col s12">
                    <select id="eliminarmateria" name="eliminarmateria">
                        <option value="" disabled selected>Elija una Materia</option>
                        <?php
                            //Conexion a la base de datos
                            require_once("DB.php");
                            $db = new DB();
                            $SQL = "SELECT nombre FROM materias";
                            $resultado = $db->ejecutar($SQL);
                            foreach($resultado as $fila){
                                $json= json_decode($fila[0]);
                        ?>
                        <option value="<?=$fila[0]?>">
                            <?=$fila[0]?>
                        </option>  
                        <?php
                            }
                        ?>
                    </select>
                    <label>Eliminar</label>
                </div>
                <input type="submit" name="submit" value="Eliminar">
            </form>
        </div>
        <!--Pie de pagina, datos de contato-->
        <div id="feet" class="feet">
            <script type="text/javascript">
                $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html> 