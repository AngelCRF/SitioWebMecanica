<!DOCTYPE html>
<?php
    session_start();
    $_SESSION['carrera']='Mecanica';
?>
<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mecánica</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Metal-Mecánica"/>
        <meta name="author" content="Jorge Cervantes Ramirez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <script type="text/javascript" src="js/materialize.min.js"></script>    
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
                $('.tabs').tabs();
            });            
        </script>
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                $("#navbar").load("navbar.html");
            </script> 
        </div>
        <!--Cuerpo de la pagina-->
        <div class=" Cprincipal_index card-panel grey lighten-4">
            <div class="row">
                <header>
                    <img class="responsive-img" src="Imagenes/head.png" alt="header pagina quienes somos" height="90px" width="3000px">         
                </header><br><br><br>
                <div class="col s12 m12 l12 hide-on-med-and-down">
                    <div>
                        <h5 class="center-align">Plan de Estudios</h5>
                    </div>
                    <div>
                        <h5 class="center-align">Retícula para la carrera de Ingeniería Mecánica</h5>
                    </div>
                </div>
                <div class="col s12 m12 hide-on-large-only">
                    <div>
                        <h5 class="center-align">Plan de Estudios</h5>
                    </div>
                    <div>
                        <h5 class="center-align">Retícula para la carrera de Ingeniería Mecánica</h5>
                    </div>
                </div>
            </div>
            <div id="especialidades">
                <script type="text/javascript">
                    $("#especialidades").load("cargar_especialidades.php");
                </script>
                <!--<div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a href="#Ingenieria_De_Software">Ingenieria_De_Software</a></li>
                            <li class="tab col s3"><a href="#Tecnologias_Web">Tecnologias_Web</a></li>
                            <li class="tab col s3"><a href="#Seguridad_Informatica">Seguridad_Informatica</a></li>
                        </ul>
                    </div>
                    <div id='Ingenieria_De_Software' class="col s12">Ingenieria_De_Software</div>
                    <div id='Tecnologias_Web' class="col s12">Tecnologias_Web</div>
                    <div id='Seguridad_Informatica' class="col s12">Seguridad_Informatica</div>
                </div>-->>
            </div>
        </div>
        <div id="feet" class="feet">
            <script type="text/javascript">
                $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html> 