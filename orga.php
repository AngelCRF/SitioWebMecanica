<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITM | Departamento Mecánica</title>
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
    <body >
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
                $('.carousel.carousel-slider').carousel({fullWidth: true});     
                function autoplay() {
                    $('.carousel').carousel('next');
                    setTimeout(autoplay, 4500);
                }
                jQuery(document).ready(function() {
                    setTimeout(function() {
                        autoplay()
                    }, 4500);
                });
            });            
        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <!--contenedores para menus desplegables-->
        <ul id="reticulas" class="dropdown-content">
            <li><a href="reticula1.php">Ingeniería Mecánica</a></li>
            <li><a href="reticula2.php">Ingeniería Mecatrónica</a></li>
        </ul>
        <ul id="perfiles" class="dropdown-content">
            <li><a href="aspirante.php">Perfil de Aspirante</a></li>
            <li><a href="egresado.php">Perfil de Egresado</a></li>
        </ul>
        <ul id="reprobacion" class="dropdown-content">
            <li><a href="PDF/Indice_Rep/ENE-JUN 2015.pdf" target="blank">ENE-JUN 2015</a></li>
            <li><a href="PDF/Indice_Rep/AGO-DIC 2015.pdf" target="blank">AGO-DIC 2015</a></li>
            <li><a href="PDF/Indice_Rep/ENE-JUN 2016.pdf" target="blank">ENE-JUN 2016</a></li>
            <li><a href="PDF/Indice_Rep/AGO-DIC 2016.pdf" target="blank">AGO-DIC 2016</a></li>
        </ul>
        <ul id="reticulas-movil" class="dropdown-content">
            <li><a href="reticula1.php">Ingeniería Mecánica</a></li>
             <li><a href="reticula2.php">Ingeniería Mecatrónica</a></li>
        </ul>
        <ul id="perfiles-movil" class="dropdown-content">
            <li><a href="aspirante.php">Perfil de Aspirante</a></li>
            <li><a href="egresado.php">Perfil de Egresado</a></li>
        </ul>
        <ul id="reprobacion-movil" class="dropdown-content">
            <li><a href="PDF/Indice_Rep/ENE-JUN 2015.pdf" target="blank">ENE-JUN 2015</a></li>
            <li><a href="PDF/Indice_Rep/AGO-DIC 2015.pdf" target="blank">AGO-DIC 2015</a></li>
            <li><a href="PDF/Indice_Rep/ENE-JUN 2016.pdf" target="blank">ENE-JUN 2016</a></li>
            <li><a href="PDF/Indice_Rep/AGO-DIC 2016.pdf" target="blank">AGO-DIC 2016</a></li>
        </ul>   
        <ul id="slide-out" class="side-nav">
            <li><a href="index.php"><i class="material-icons">home</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="reticulas-movil">RETICULAS<i class="material-icons right" >arrow_drop_down</i></a></li>
            <li><a href="#" class="dropdown-button" data-activates="perfiles-movil">PERFILES<i class="material-icons right" >arrow_drop_down</i></a></li>
            <li><a href="mision.php">QUIENES SOMOS</a></li>
            <li><a href="orga.php">ORGANIGRAMA</a></li>
            <li><a href="material_apoyo.php">MATERIAL DE APOYO</a></li>
            <li><a href="#" class="dropdown-button" data-activates="reprobacion-movil">INDICE DE REPROBACIÓN<i class="material-icons right" >arrow_drop_down</i></a></li>
        </ul>
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
                    <li><a href="index.php"><i class="material-icons">home</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="reticulas">RETICULAS<i class="material-icons right" >arrow_drop_down</i></a></li>
                    <li><a href="#" class="dropdown-button" data-activates="perfiles">PERFILES<i class="material-icons right" >arrow_drop_down</i></a></li>
                    <li><a href="mision.php">QUIENES SOMOS</a></li>
                    <li><a href="orga.php">ORGANIGRAMA</a></li>
                    <li><a href="material_apoyo.php">MATERIAL DE APOYO</a></li>
                    <li><a href="#" class="dropdown-button" data-activates="reprobacion">INDICE DE REPROBACIÓN<i class="material-icons right" >arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
            <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            <div id="wrapper">
    <div id="container">
        <ol class="organizational-chart">
            <li>
                <div>
                    <h3>Jefe de Departamento</h3>
                </div>
                <ol>
                    <li>
                        <div>
                            <h4>Presidente de Academia</h4>
                        </div>
                        <ol>
                            <li>
                                <div>
                                    <h5>Secretario de Academia</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Jefe de Docencia</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Jefe de Vinculación</h5>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h5>Jefe de Investigación</h5>
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
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br
            ><br><br><br>
        </div>
        <footer class="page-footer grey darken-1">
            <div class="container">
                <div class="row">
                    <div class="col l4 s12">
                        <h5 class="white-text">Redes Sociales</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/IGE-ITMorelia-Oficial-137692846975721/" target="_blank"><img src="Imagenes/face.jpg">Facebook</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://twitter.com/itmoficial" target="_blank"> <img src="Imagenes/tiwter.jpg">Twitter</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/user/ITMoreliaOficial/" target="_blank"> <img src="Imagenes/youtube.jpg">Youtube</a></li>
                            <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/edu/instituto-tecnol%C3%B3gico-de-morelia-173011" target="_blank"><img src="Imagenes/link.jpg">Linkedin</a></li>
                        </ul>
                    </div>
                    <div class="col l4 s12">
                        <h5 class="white-text">Vínculos Académicos</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="http://www.tecnm.mx/" target="_blank">Tecnológico Nacional De México</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://www.ets.org/es/toefl"  target="_blank">Toefl</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://www.ceneval.edu.mx/" target="_blank">Ceneval</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://www.anfei.mx/" target="_blank">Anfei</a></li>
                            <li><a class="grey-text text-lighten-3" href="http://www.conacyt.mx/" target="_blank">Consejo Nacional De Ciencia Y Tecnología</a></li>
                        </ul>
                    </div>
                    <div class="col l4 s12">
                        <h5 class="white-text">Contáctanos</h5>
                        <ul>
                            Teléfonos: 4433121570 Ext.248<br />
                            Email: metal_Mecánica@itmorelia.edu.mx<br />
                            Dirección: Avenida Tecnológico No. 1500. Lomas de Santiaguito, Edificio AA. C.P. 58120 Morelia, Michoacán, México.<br />
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Derechos Reservados. © 2018 Instituto Tecnológico de Morelia.
                </div>
            </div>
        </footer>
    </body>
</html>
