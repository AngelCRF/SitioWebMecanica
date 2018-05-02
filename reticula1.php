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
                $('select').material_select();
            });            
        </script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
<<<<<<< HEAD
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
=======
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
        </div>
>>>>>>> 3918d997bfcb588c137564e0bb851c3c42a8f19c
        <!--Cuerpo de la pagina-->
        <div class="card-panel grey lighten-4">
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
<<<<<<< HEAD
                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div >
                    <div class="row">
                        <table class="centered hide-on-med-and-down">
                            <thead>
                                <tr>
                                    <th>Semestre 1</th>
                                    <th>Semestre 2</th>
                                    <th>Semestre 3</th>
                                    <th>Semestre 4</th>                                    
                                    <th>Semestre 5</th>
                                    <th>Semestre 6</th>                                    
                                    <th>Semestre 7</th>
                                    <th>Semestre 8</th>                                    
                                    <th>Semestre 9</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text" href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 2</h6></a></div><br />Creditos:<br />Tipo: Especialidad</div><br /></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text" href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 4</h6></a></div><br />Creditos:<br />Tipo: Especialidad</div><br /></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 1</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text" href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 3</h6></a></div><br />Creditos:<br />Tipo: Especialidad</div><br /></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text" href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 5</h6></a></div><br />Creditos:<br />Tipo: Especialidad</div><br /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row hide-on-large-only">
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 1</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 2</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 3</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 4</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 5</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 6</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 6</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 7</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 5</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 1</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 8</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 2</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 3</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="centered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Semestre 9</th>
                                    <th></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 1</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 2</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 3</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                </tr>
                                <tr>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Materia 4</h6></a></div><br />Creditos:<br />Tipo: Tronco Comun<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 4</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                    <td><div class="waves-effect centered waves-light white-text orange darken-3"><div><a class="btn-large orange darken-2 flow-text"  href="PDF/Reticula/mecanica/Calidad.pdf"><h6>Espec... 5</h6></a></div><br />Creditos:<br />Tipo: Especialidad<br /></div></td>
                                </tr>
                            </tbody>
                        </table>
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
                            <li><a class="grey-text text-lighten-3" href="https://twitter.com/itmoficial" target="_blank"> <img src="Imagenes/twitter.jpg">Twitter</a></li>
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
                            Dirección: Avenida Tecnológico No. 1500. Lomas de Santiaguito, Edificio AA. C.P. 58120 Morelia,     Michoacán, México.<br />
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
=======
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
>>>>>>> 3918d997bfcb588c137564e0bb851c3c42a8f19c
    </body>
</html> 