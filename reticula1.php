<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

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
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
            });            
        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                $("#navbar").load("navbar.html");
            </script> 
        </div>
        <!--Cuerpo de la pagina-->
        <div class=" Cprincipal_index card-panel grey lighten-4">
            <div class="row">
                <div class="cajaS col s12 m6 l3"><img class="responsive-img" src="Imagenes/logoSEP.png"></div>
                <div class="col s12 m12 l6 hide-on-med-and-down">
                    <div>
                        <h5 class="center-align">Plan de Estudios</h5>
                    </div>
                    <div>
                        <h5 class="center-align">Retícula para la carrera de Ingeniería Mecánica</h5>
                    </div>
                </div>
                <div class="cajaT col s12 m6 l3"><img class="responsive-img right" src="Imagenes/logoTEC.png"></div>
                <div class="col s12 m12 hide-on-large-only">
                    <div>
                        <h5 class="center-align">Plan de Estudios</h5>
                    </div>
                    <div>
                        <h5 class="center-align">Retícula para la carrera de Ingeniería Mecánica</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#especialidad1" class="active">Especialidad 1</a></li>
                        <li class="tab col s3"><a href="#especialidad2">Especialidad 2</a></li>
                    </ul>
                </div>
                <div id="especialidad1" class="col s12">
                    <div id="espec1">
                        <script type="text/javascript">
                            $("#espec1").load("retEspec1Mecanica.php");
                        </script> 
                    </div>
                </div>
                <div id="especialidad2" class="col s12">
                    <div id="espec2">
                        <script type="text/javascript">
                            $("#espec2").load("retEspec2Mecanica.php");
                        </script> 
                    </div>
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