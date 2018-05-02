<<<<<<< HEAD
<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->
<html lang="es">
    <head>
        <title>DMM | ITMORELIA</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de IGE"/>
        <meta name="author" content="Kevin Erick Angel Medrano"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <link rel="stylesheet" type="" href="orga.css" />
        <!-- Materialized libraries -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
           <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css" />
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
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <div id="navbar" class="navbar">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
        </div>
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div>
                <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
                <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            </div>
            <br><br>
            <div class="Cprincipal_index card-panel grey lighten-4">
                <div id="wrapper">
                    <ol class="organizational-chart">
                        <li>
                            <div>
                                <h3>Jefe de Departamento</h3>
                                <?php
                                    //Conexion a la base de datos
                                    require_once("BD.php");
                                    $db = new BD();
                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='presidente_de_academia' AND Carrera='mecanica'";
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
                                            $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='presidente_de_academia' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='secretario_de_academia' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='coordinador_de_carrera' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='coordinador_de_programa_de-tutorias' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_docencia' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_vinculacion' AND Carrera='mecanica'";
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
                                                    $SQL = "SELECT Nombre FROM profesor WHERE Tipo ='Jefe_de_proyecto_de_investigacion' AND Carrera='mecanica'";
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
                                            $SQL = "SELECT Nombre FROM profesor WHERE Carrera='mecanica'";
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
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html>

=======
<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->
<html lang="es">
    <head>
        <title>DMM | ITMORELIA</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de IGE"/>
        <meta name="author" content="Kevin Erick Angel Medrano"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <link rel="stylesheet" type="" href="orga.css" />
        <!-- Materialized libraries -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
           <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="index.css" />
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
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <div id="navbar" class="navbar">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
        </div>
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div>
                <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
                <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            </div>
            <br><br>
            <div class="Cprincipal_index card-panel grey lighten-4">
                <div id="wrapper">
                    <ol class="organizational-chart">
                        <li>
                            <div>
                                <h3>Jefe de Departamento</h3>
                                <h4>M.C. José Nicolás Ponciano Guzmán</h4>
                            </div>
                            <ol>
                                <li>
                                    <div>
                                        <h4>Presidente de Academia</h4>
                                        <h5>Acéfalo</h5>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <h5>Secretario de Academia</h5>
                                                <h6>Acéfalo</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Coordinador de Carrera</h5>
                                                <h6>Acéfalo</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Coordinador de Programa de Tutorias</h5>
                                                <h6>M.I. Gilberto Daniel Conejo Magaña</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Docencia</h5>
                                                <h6>M.C. Moisés García Monroy</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Vinculación</h5>
                                                <h6>Ing. Felipe de Jesús Tena Martínez</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Jefe de Proyecto de Investigación</h5>
                                                <h6>Dr. Juan Crstóbal Camacho Arriaga</h6>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    <div>
                                        <h4>Profesores</h4>
                                    </div>
                                    <ol>
                                        <li>
                                            <div>
                                                <h5>Profesor 1</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <h5>Profesor 2</h5>
                                            </div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div id="feet" class="feet">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html>

>>>>>>> 3918d997bfcb588c137564e0bb851c3c42a8f19c
