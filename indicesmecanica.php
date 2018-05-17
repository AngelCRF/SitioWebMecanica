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
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
--><link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div>
            <img class="responsive-img" src="Imagenes/head.png" alt="header pagina quienes somos" height="90px" width="3000px">
            </div>
        </div>
        <div id="feet" class="feet">
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html>
