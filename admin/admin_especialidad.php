<?php 
#inicio de sesión para variables de verificación 
    session_start();
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
        <script type="text/javascript" src="/SitioWebMecanica/js/admin_esp.js"/></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/agregarPersonal.js"/></script>
        <style type="text/css">
            body{
                background: #dddddd;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
           }
        </style>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       </head>


<body >
      
      
    
  <!--encabezado y menus-->
  <nav>
    <div class="nav-wrapper grey darken-1">
      <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only left"><i class="material-icons">menu</i></a>
      <a href="#" class="brand-logo center"><h5>Metal Mecánica</h5></a>
    </div>
  </nav>

  <nav class="hide-on-med-and-down">
        <div class="nav-wrapper grey darken-1 center-align">
            <ul class="center hide-on-med-and-down">
                <li><a href=""><i class="material-icons">Personal</i></a></li>
                <li><a href="reticula_admin.php"><i class="material-icons">Reticula</i></a></li>
            </ul>
        </div>
    </nav>


    <!-- SECCION PARA AGREGAR A LOS PROFESORES -->
    <div class="Cprincipal_index card-panel grey lighten-4">
        <h1>Agregar Especialidad</h1>
        <form action="agregarEspecialidad.php" method="post" enctype="multipart/form-data" id="agregarEspecialidadForm">
            <input type="text" name= "nomesp" id="nomesp" placeholder="Nombre de especialidad">
            <div class="input-field col s12">
                <select id="carrera" name="carrera">
                    <option value="mecanica">Mec&aacutencia</option>
                    <option value="mecatronica">Mecatr&oacutenica</option>
                </select>
                <label>Carrera</label>
            </div>
            <br><br>
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                <i class="material-icons right">save</i>
            </button>
        </form>
    </div>

    <!-- SECCION PARA ELIMINAR A LOS PROFESORES -->
    <div class="Cprincipal_index card-panel grey lighten-4">
        <h1>Eliminar especialidad</h1>
        <form action="eliminarPersonal.php" method="post" enctype="multipart/form-data" id="eliminarEspecialidadForm">
            <div class="input-field col s12">
                <select id="eliminaresp" name="eliminaresp">
                    <option value="x" disabled selected>Elija una especialidad</option>
                    <?php
                    //Conexion a la base de datos
                    require_once("DB.php");
                    $db = new DB();
                    $SQL = "SELECT Nombre FROM especialidad";
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
            <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                <i class="material-icons right">delete_forever</i>
            </button>
            </form>
    </div>
    </body>
</html> 