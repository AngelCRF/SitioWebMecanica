<?php 
    session_start();
    if($_SESSION['result'] == 'guardado'){
        echo '<script>alert("Guardado exitosamente!");</script>';
    }
    if($_SESSION['result'] == 'editado'){
        echo '<script>alert("Editado exitosamente!");</script>';
    }
    if($_SESSION['result'] == 'eliminado'){
        echo '<script>alert("Eliminado exitosamente!");</script>';
    }
    if($_SESSION['result'] == 'error'){
        echo '<script>alert("Error, vuelva a intentarlo");</script>';
    }
    $_SESSION['result']= "";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mec�nica</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="icon" href="img/icon.png"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/admin.js"/></script>
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
    <body>
    <!--ENCABEZADO Y MENU-->
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
                <li><a href="indices_admin.php"><i class="material-icons">Índices</i></a></li>
            </ul>
        </div>
    </nav>
     <!-- SECCION PARA AGREGAR LOS INDICES DE REPROBACION -->
     <div class="Cprincipal_index card-panel grey lighten-4">
        <h1>Agregar Índice</h1>
        <form action="subirIndice.php" method="post" enctype="multipart/form-data" id="agregarIndiceForm">
            <div class="input-field col s12">
                <select id="carrera" name="carrera">
                    <option value="Mecanica">Mec&aacutencia</option>
                    <option value="Mecatronica">Mecatr&oacutenica</option>
                </select>
                <label>Carrera</label>
            </div>
            <div class="input-field col s12">
                <select id="periodo" name="periodo">
                    <option value="ENE-JUN">ENERO-JUNIO</option>
                    <option value="AGO-DIC">AGOSTO-DICIEMBRE</option>
                </select>
                <label>Periodo</label>
            </div>
            <div class="input-field col s12">
                <select id="fecha" name="fecha">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2041">2041</option>
                    <option value="2042">2042</option>
                    <option value="2043">2043</option>
                    <option value="2044">2044</option>
                    <option value="2045">2045</option>
                </select>
                <label>Año</label>
            </div>
            <label for="archivo">Seleccione un archivo para subir</label>  
            <br>
            <div class="file-field input-field">
                <div class="btn">
                    <span>Índice</span>
                    <input type="file"  accept="application/pdf" name="archivo" id="archivo">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                <i class="material-icons right">save</i>
            </button>
        </form>
    </div>
    <!-- SECCION PARA ELIMINAR INDICES DE REPROBACION -->
    <div class="Cprincipal_index card-panel grey lighten-4">
        <h1>Eliminar Índice</h1>
        <form action="eliminarIndice.php" method="post" enctype="multipart/form-data" id="eliminarIndiceForm">
        <div class="input-field col s12">
                <select id="carreraeliminar" name="carreraeliminar">
                    <option value="mecanica">Mec&aacutencia</option>
                    <option value="mecatronica">Mecatr&oacutenica</option>
                </select>
                <label>Carrera</label>
            </div>
            <div class="input-field col s12">
                <select id="periodoeliminar" name="periodoeliminar">
                    <option value="ENE-JUN">ENERO-JUNIO</option>
                    <option value="AGO-DIC">AGOSTO-DICIEMBRE</option>
                </select>
                <label>Periodo</label>
            </div>
            <div class="input-field col s12">
                <select id="fechaeliminar" name="fechaeliminar">
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <option value="2035">2035</option>
                    <option value="2036">2036</option>
                    <option value="2037">2037</option>
                    <option value="2038">2038</option>
                    <option value="2039">2039</option>
                    <option value="2040">2040</option>
                    <option value="2041">2041</option>
                    <option value="2042">2042</option>
                    <option value="2043">2043</option>
                    <option value="2044">2044</option>
                    <option value="2045">2045</option>
                </select>
                <label>Año</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar
                <i class="material-icons right">delete_forever</i>
            </button>
            </form>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Derechos Reservados. © 2018 Instituto Tecnológico de Morelia.
        </div>
    </div>
    </body>
</html> 