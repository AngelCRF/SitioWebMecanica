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
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <nav>
            <div class="nav-wrapper grey darken-1">
                <a href="#" class="brand-logo center">Metal Mecánica</a>
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
        <ul id="slide-out" class="side-nav">
            <li><a href="index.php"><i class="material-icons">home</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="reticulas-movil">RETICULAS<i class="material-icons right" >arrow_drop_down</i></a></li>
            <li><a href="#" class="dropdown-button" data-activates="perfiles-movil">PERFILES<i class="material-icons right" >arrow_drop_down</i></a></li>
            <li><a href="mision.php">QUIENES SOMOS</a></li>
            <li><a href="orga.php">ORGANIGRAMA</a></li>
            <li><a href="material_apoyo.php">MATERIAL DE APOYO</a></li>
            <li><a href="#" class="dropdown-button" data-activates="reprobacion-movil">INDICE DE REPROBACIÓN<i class="material-icons right" >arrow_drop_down</i></a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
        <div>
            <h5 class="center-align">Plan de Estudios</h5>
        </div>
        <div>
            <h5 class="center-align">Retícula para la carrera de Ingeniería Mecatrónica</h5>
        </div>
        <img class="responsive-img materialboxed col s10 m10 l10 offset-l1 offset-m1 offset-s1" src="Imagenes/ReticulaMecánica-1.jpg">
        <br />
        <div class="divider"></div>
        <br />
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
                <h5 class="white-text">Contactanos</h5>
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