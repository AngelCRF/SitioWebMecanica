<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mecánica</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Metal-Mecánica"/>
        <meta name="author" content="Jorge Cervantes Ramirez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        
        <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/C9F4FA71-999E-B34A-9850-0A3168C7DFC4/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/3594C5CB-F1F1-7E45-8406-4626D7A232DC/abn/main.css"/>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    </head>
    <body >
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
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
        <!--Cuerpo de la pagina, reticula y materias-->
        <div>
            <h5 class="center-align">Plan de Estudios</h5>
        </div>
        <div>
            <h5 class="center-align">Retícula para la carrera de Ingeniería Mecatrónica</h5>
        </div>
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="Imagenes/ReticulaMecatrónica-1.jpg"><img class="activator" src="Imagenes/ReticulaMecatrónica-1.jpg"></a>
            </div>
        </div>
        <br />
        <div class="divider"></div>
        <br />
        <!--Apartado de menu de materias para escritorio-->
        <nav class="nav-extended grey darken-1 hide-on-med-and-down">
            <div class="nav-wrapper center-align">
                <a href="#" class="brand-logo center-align">Materias</a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#primero">1er Semestre</a></li>
                    <li class="tab"><a href="#segundo">2do Semestre</a></li>
                    <li class="tab"><a href="#tercero">3er Semestre</a></li>
                    <li class="tab"><a href="#cuarto">4to Semestre</a></li>
                    <li class="tab"><a href="#quinto">5to Semestre</a></li>
                    <li class="tab"><a href="#sexto">6to Semestre</a></li>
                    <li class="tab"><a href="#septimo">7mo Semestre</a></li>
                    <li class="tab"><a href="#octavo">8vo Semestre</a></li>
                    <li class="tab"><a href="#noveno">9no Semestre</a></li>
                </ul>
            </div>
        </nav>
        <!--Menu para materias por semestre, para tableta y celular-->
        <nav class="nav-extended grey darken-1 hide-on-large-only">
            <div class="nav-wrapper center-align">
                <a href="#" class="brand-logo center-align">Materias</a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a class="active" href="#primero">1ero</a></li>
                    <li class="tab"><a href="#segundo">2do</a></li>
                    <li class="tab"><a href="#tercero">3er</a></li>
                    <li class="tab"><a href="#cuarto">4to</a></li>
                    <li class="tab"><a href="#quinto">5to</a></li>
                    <li class="tab"><a href="#sexto">6to</a></li>
                    <li class="tab"><a href="#septimo">7mo</a></li>
                    <li class="tab"><a href="#octavo">8vo</a></li>
                    <li class="tab"><a href="#noveno">9no</a></li>
                </ul>
            </div>
        </nav>
        <!--Contenedores para tarjetas de materias, por semestre-->
        <div id="primero" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Primer Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="segundo" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Segundo Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tercero" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Tercero Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cuarto" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Cuarto Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="quinto" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Quinto Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sexto" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Sexto Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="septimo" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Septimo Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="octavo" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Octavo Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="noveno" class="col s12">
            <div class="row col s10 offset-s1">
                <div>
                    <h5 class="center-align">Noveno Semestre</h5>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 1</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 2</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 3</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 4</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 5</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s8 offset-s2">
                    <div class="card horizontal blue lighten-5 waves-effect waves-light">
                        <div class="card-stacked">
                            <div class="card-content center-align">
                                <h5>Materia 6</h5>
                            </div>
                            <div class="card-action center-align">
                                <a href="#">Ver Materia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pie de pagina, datos de contato-->
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
=======
<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Ing. en Gestión Empresarial</title>
        <meta charset="utf-8"/>
       
        <meta name="keywords" content="pagina de IGE"/>
        
        <meta name="author" content="Neri Gonzalez Lopez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
      	<link href="Pagina/styles/custom.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" type="text/css" href="index.css" />
        <style type="text/css">
        body{
          background: #000000;
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
           }
        </style>
       </head>
    <body >
    <div id="header" style = "display: table; width: 500px;">
    <div style = "float: left; width: 104px;">
        <div style = "float: left; height: 100px; width: 100px;">
        <ul class="nav">
            <li><img src="Imagenes/logoch.png"></li>
        </ul>
        </div>
        
    </div>
    
    <div  style = "float: left; height: 100px; width: 100px;">
    	
    	
    	<ul class="titulo_carrera">
			<li>Ingenieria en Gestión Empresarial</li>    	
    	</ul>
    	    	
    </div>
    
    <div style = "height: 50px; width: 1350px;">
    
    <br><br>
    	<ul class="nav">            
            <li><a href="index.php"><font color="white">INICIO</font></a></li>
            <li><a href="reticula2.php#"><font color="white">RETICULA</font></a>
            	<ul>
                    <li><a href="reticula1.php"><font color="white">Especialidad Calidad</font></a></li>
                    <li><a href="reticula2.php"><font color="white">Especialidad Finanzas</font></a></li>
                </ul>
            </li>    
            <li><a href="reticula2.php#"><font color="white">PERFILES</font></a>
                <ul>
                    <li><a href="aspirante.php"><font color="white">Perfil de Aspirante</font></a></li>
                    <li><a href="egresado.php"><font color="white">Perfil de Egresado</font></a></li>
                </ul>
            </li>
            <li><a href="mision.php"><font color="white">QUIENES SOMOS</font></a></li>
            <li><a href="orga.php"><font color="white">ORGANIGRAMA</font></a></li>
            <li><a href="material_apoyo.php"><font color="white">MATERIAL DE APOYO</font></a></li>
          <li><a href="reticula2.php#"><font color="white">INDICE DE REPROBACIÓN</font></a>
                <ul>
                    <li><a href="PDF/Indice_Rep/ENE-JUN&#32;2015.pdf" target="blank"><font color="white">ENE-JUN 2015</font></a></li>
                    <li><a href="PDF/Indice_Rep/AGO-DIC&#32;2015.pdf" target="blank"><font color="white">AGO-DIC 2015</font></a></li>
                    <li><a href="PDF/Indice_Rep/ENE-JUN&#32;2016.pdf" target="blank"><font color="white">ENE-JUN 2016</font></a></li>
                    <li><a href="PDF/Indice_Rep/AGO-DIC&#32;2016.pdf" target="blank"><font color="white">AGO-DIC 2016</font></a></li>
              </ul>       
                    </li>
                
        </ul>
    
    </div>
    
</div>
<br><br><br>



<div class="Creticula">
  <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
     <div class="cajaT"><img src="Imagenes/logoTEC.png"><br></div>
     <br><br><br><br><br>
	 <br><br><br><br>
	 
     <div class="Ctextoa">
		<div class="letrata"><center>Plan de Estudios</center><br></div>
		<div class="letram" align="justify">


				   <!-- <div class="conten-tabla">
          <div class="conten-fila"> -->
        
                  
					


		  <h3><center>Retícula para la especialidad en Ingeniería Económica y Financiera</center></h3>
        
          <div id="aplicacionesI">
            <img src="Imagenes/Reticula_Finanzas.jpg">
            <a id="CalcDif" target="_blank" href="PDF/Reticula/Fundamentos&#32;de&#32;Investigacion.pdf"></a>
            <a id="Quim" target="_blank" href="PDF/Reticula/AC001&#32;Calculo&#32;Diferencial.pdf"></a>
            <a id="ProEst" target="_blank" href="PDF/Reticula/Desarrollo&#32;Humano.pdf"></a>
            <a id="DesHumInt" target="_blank" href="PDF/Reticula/PROGRAMA&#32;FUNDAMENTOS&#32;DE&#32;GESTION&#32;EMPRESARIAL.pdf"></a>
            <a id="FundInv" target="_blank" href="PDF/Reticula/Fundamentos&#32;de&#32;Fisica.pdf"></a>
            <a id="TEtica" target="_blank" href="PDF/Reticula/Fundamentos&#32;de&#32;Quimica.pdf"></a>
            <a id="CalInt" target="_blank" href="PDF/Reticula/softwaredeaplicacionejecutivo.pdf"></a>
            <a id="MecClas" target="_blank" href="PDF/Reticula/AC002&#32;Calculo&#32;Integral.pdf"></a>
            <a id="Electro" target="_blank" href="PDF/Reticula/Contabilidad&#32;orientada&#32;a&#32;los&#32;Negocios.pdf"></a>
            <a id="MedElec" target="_blank" href="PDF/Reticula/Habilidades&#32;Directivas&#32;I.pdf"></a>
            <a id="DibAsisComp" target="_blank" href="PDF/Reticula/Taller&#32;de&#32;Etica.pdf"></a>
            <a id="TecnoMat" target="_blank" href="PDF/Reticula/dinamicasocial.pdf"></a>
            <a id="CalcVec" target="_blank" href="PDF/Reticula/marcolegaldelasorganizaciones.pdf"></a>
            <a id="AlgLin" target="_blank" href="PDF/Reticula/Probabilidad&#32;y&#32;Estadistica&#32;Descriptiva.pdf"></a>
            <a id="CircElecI" target="_blank" href="PDF/Reticula/Costos&#32;Empresariales.pdf"></a>
            <a id="Progra" target="_blank" href="PDF/Reticula/AC003&#32;Algebra&#32;Lineal.pdf"></a>
            <a id="MecFluidTermo" target="_blank" href="PDF/Reticula/AE071&#32;Economia&#32;Empresarial.pdf"></a>
            <a id="ComHuman" target="_blank" href="PDF/Reticula/Legislacion&#32;Laboral.pdf"></a>
            <a id="EcuaDif" target="_blank" href="PDF/Reticula/Ingenieria&#32;Economica.pdf"></a>
            <a id="FisicaMod" target="_blank" href="PDF/Reticula/Estadistica&#32;Inferencial&#32;I.pdf"></a>
            <a id="CircElecII" target="_blank" href="PDF/Reticula/Instrumentos&#32;de&#32;Presupuestacion&#32;Empresarial.pdf"></a>
            <a id="ElectroAnaloga" target="_blank" href="PDF/Reticula/Habilidades&#32;Directivas&#32;II.pdf"></a>
            <a id="TeoElectro" target="_blank" href="PDF/Reticula/Entorno&#32;Macroeconomico.pdf"></a>
            <a id="MetNum" target="_blank" href="PDF/Reticula/Investigacion&#32;de&#32;Operaciones.pdf"></a>
            <a id="ControlI" target="_blank" href="PDF/Reticula/finanzaseenlasorganizaciones.pdf"></a>
            <a id="EquiposMec" target="_blank" href="PDF/Reticula/Estadistica&#32;Inferencial&#32;II.pdf"></a>
            <a id="Transform" target="_blank" href="PDF/Reticula/Ingenieria&#32;de&#32;Procesos.pdf"></a>
            <a id="ElectroDigit" target="_blank" href="PDF/Reticula/AE072&#32;El&#32;emprendedor&#32;y&#32;la&#32;Innovacion.pdf"></a>
            <a id="InstalElec" target="_blank" href="PDF/Reticula/Taller&#32;de&#32;Investigacion&#32;I.pdf"></a>
            <a id="DesSusten" target="_blank" href="PDF/Reticula/Mercadotecnia.pdf"></a>
            <a id="ControlII" target="_blank" href="PDF/Reticula/Administracion&#32;de&#32;la&#32;Salud&#32;y&#32;Seguridad&#32;Ocupacional.pdf"></a>
            <a id="LegisMatElec" target="_blank" href="PDF/Reticula/Gestion&#32;del&#32;Capital&#32;Humano.pdf"></a>
            <a id="MacSincCD" target="_blank" href="PDF/Reticula/Gestion&#32;de&#32;la&#32;Produccion&#32;I.pdf"></a>
            <a id="MotInducEsp" target="_blank" href="PDF/Reticula/disenoorganizacional.pdf"></a>
            <a id="InstalElecInd" target="_blank" href="PDF/Reticula/Taller&#32;de&#32;Investigacion&#32;II.pdf"></a>
            <a id="TInvestI" target="_blank" href="PDF/Reticula/Sistemas&#32;de&#32;Informacion&#32;de&#32;Mercadotecnia.pdf"></a>
            <a id="PrograAplic" target="_blank" href="PDF/Reticula/03&#32;SISTEMAS&#32;DE&#32;GESTION&#32;DE&#32;CALIDAD.pdf"></a>
            <a id="ControlMacElec" target="_blank" href="PDF/Reticula/Cadena&#32;de&#32;Sumunistros.pdf"></a>
            <a id="ModelSistElecPot" target="_blank" href="PDF/Reticula/Plan&#32;de&#32;Negocios.pdf"></a>
            <a id="CentralElec" target="_blank" href="PDF/Reticula/Calidad&#32;Aplicada&#32;a&#32;la&#32;Gestion&#32;Empresarial.pdf"></a>
            <a id="EletroInd" target="_blank" href="PDF/Reticula/gestiondeestrategia.pdf"></a>
            <a id="Instrum" target="_blank" href="PDF/Reticula/02&#32;Metodos&#32;Cuantitativos&#32;para&#32;Decisiones&#32;Economico&#32;Financieras.pdf"></a>
            <a id="TInvestII" target="_blank" href="PDF/Reticula/AE045&#32;Mercadotecnia&#32;Electronica.pdf"></a>
            <a id="RedesComInd" target="_blank" href="PDF/Reticula/05&#32;Ingenieria&#32;Financiera.pdf"></a>
           
            <a id="CostPresProyElec" target="_blank" href="PDF/Reticula/04&#32;Mercados&#32;Financieros.pdf"></a>
            <a id="GestEmpreLider" target="_blank" href="PDF/Reticula/06&#32;Diseno&#32;de&#32;Portafolios&#32;de&#32;Inversion.pdf"></a>
            <a id="ControlLogicProgra" target="_blank" href="PDF/Reticula/Gestion&#32;de&#32;la&#32;Produccion&#32;II.pdf"></a>
            <a id="PruebMantElec" target="_blank" href="http://sagitario.itmorelia.edu.mx/ige/PDF/Reticula/Pruebas_y_Mantenimiento_electrico.pdf"></a>
            <a id="SistemIlum" target="_blank" href="PDF/Reticula/Desarrollo&#32;Sustentable.pdf"></a>
            <a id="ModFin" target="_blank" href="PDF/Reticula/01&#32;Modelos&#32;Financieros.pdf"></a>
            <a id="FinanzasInter" target="_blank" href="PDF/Reticula/03&#32;Finanzas&#32;Internacionales.pdf"></a>
          </div>




		</div>

	</div>







</div>

<div  class="letra_pie">
<div class="Cpie_index">
<div class="CSocial">
<div class="titulos_pie"><center>Redes Sociales</center><br></div>
<div class="CSocial2">
<a id="link" href="https://www.facebook.com/IGE-ITMorelia-Oficial-137692846975721/" target="_blank"> <img src="Imagenes/face.jpg">Facebook<br></a>
<a  id="link" href="https://twitter.com/itmoficial" target="_blank"> <img src="Imagenes/tiwter.jpg">Twitter<br></a>
<a  id="link" href="https://www.youtube.com/user/ITMoreliaOficial/" target="_blank"> <img src="Imagenes/youtube.jpg">Youtube<br> </a>
<a  id="link" href="https://www.linkedin.com/edu/instituto-tecnol%C3%B3gico-de-morelia-173011" target="_blank"><img src="Imagenes/link.jpg">Linkedin<br></a>
</div>
</div>
<div class="CVinculo">
<div class="titulos_pie">Vínculos Académicos</center><br><br></div>
<a  id="link" href="http://www.tecnm.mx/" target="_blank">Tecnológico Nacional De México<br><br></a>
<a   id="link" href="http://www.ets.org/es/toefl"  target="_blank">Toefl<br><br></a>
<a   id="link" href="http://www.ceneval.edu.mx/" target="_blank">Ceneval<BR><br></a>
<a    id="link" href="http://www.anfei.mx/" target="_blank">Anfei<BR><br></a>
<a     id="link" href="http://www.conacyt.mx/" target="_blank">Consejo Nacional De Ciencia Y Tecnología<br><br></a>
</div>
<div class="CContactar">
<div class="titulos_pie">Contactanos</div><br><br>
<a id="link2">Teléfonos:</a><br>
4433121570 Ext.248<br><br>
<a id="link2">Email:</a><br><a id="link" >ige@itmorelia.edu.mx</a><br><br>
<a id="link2">Dirección:</a><br>
Avenida Tecnológico No. 1500. Lomas de Santiaguito, Edificio AA. C.P. 58120 Morelia, Michoacán, México.<br>
</div> 

</div>
Derechos Reservados. © 2017 Instituto Tecnológico de Morelia.
</div>

          


    </body>
    </html>                            
                                