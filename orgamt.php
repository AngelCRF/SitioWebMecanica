<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->
<html lang="es">
    <head>
        <title>ITMORELIA| DMM</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Metal-Mecánica"/>
        <meta name="author" content="Kevin Erick Angel Medrano"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <link rel="stylesheet" type="" href="orga.css" />
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
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>    
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
                $('select').material_select();
            });            
        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
        </div>
        <!--Cuerpo de la pagina-->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div>
                <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
                <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            </div>
            <br><br>
            <div id="wrapper">
                <div>
                    <ol class="organizational-chart">
                        <li>
                            <div>
                                <h3>Jefe de Departamento</h3>
                                <?php
                                    //Conexion a la base de datos
                                    require_once("BD.php");
                                    $db = new BD();
                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='presidente_de_academia' AND Carrera='mecatronica'";
                                    $resultado = $db->ejecutar($SQL);
                                    foreach($resultado as $fila){
                                ?>
                                        <h4><?=$fila[0]?></h4>
                                <?php
                                    }
                                ?>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <h4>Presidente de Academia</h4>
                                        <?php
                                            //Conexion a la base de datos
                                            require_once("BD.php");
                                            $db = new BD();
                                            $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='presidente_de_academia' AND Carrera='mecatronica'";
                                            $resultado = $db->ejecutar($SQL);
                                            foreach($resultado as $fila){
                                        ?>
                                                <h5><?=$fila[0]?></h5>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <h5>Secretario de Academia</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='secretario_de_academia' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Coordinador de Carrera</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='coordinador_de_carrera' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Coordinador de Programa de Tutorias</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='coordinador_de_programa_de-tutorias' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Docencia</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_docencia' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Vinculación</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_vinculacion' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Investigación</h5>
                                                <?php
                                                    //Conexion a la base de datos
                                                    require_once("BD.php");
                                                    $db = new BD();
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_investigacion' AND Carrera='mecatronica'";
                                                    $resultado = $db->ejecutar($SQL);
                                                    foreach($resultado as $fila){
                                                ?>
                                                        <h6><?=$fila[0]?></h6>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <h4>Profesores</h4>
                                    </div>
                                    <ol>
                                        <?php
                                            //Conexion a la base de datos
                                            require_once("BD.php");
                                            $db = new BD();
                                            $SQL = "SELECT Nombre FROM profesor WHERE Carrera='mecatronica'";
                                            $resultado = $db->ejecutar($SQL);
                                            foreach($resultado as $fila){
                                        ?>
                                                <li>
                                                    <div>
                                                        <h5><?=$fila[0]?></h5>
                                                    </div>
                                                </li>
                                        <?php
                                            }
                                        ?>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="feet" class="feet">
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html>
