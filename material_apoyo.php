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
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
                $('select').material_select();
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
        <!--Cuerpo de la pagina-->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
            <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            <br>
            <br>
            <div id="wrapper">
            <div >
              <div class="row">
                <div class="col s10 m5 l5 offset-s1 offset-m1 offset-l1">
                  <div class="divider"></div>
                  <div>
                    <h5 class="center-align">Documentación</h5>
                  </div>
                  <div>
                    <h6 class="center-align">Docentes</h6>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="PDF/Recursos/Docentes/Reporte_Avance_2016.docx">Reporte Avance</option>
                            <option value="PDF/Recursos/Docentes/Investigaciones.pdf">Investigaciones</option>
                          </select>
                          <label>Documentos</label>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="PDF/Recursos/Documentos Normativos/Ley_del_ISSSTE.pdf" >Ley del ISSSTE</option></a>
                            <option  value="PDF/Recursos/Documentos Normativos/LEY_FEDERAL_DE_LOS_TRABAJADORES_AL_SERVICIO_DEL_ESTADO.pdf">Ley Federal de los Trabajadores al Servicio del Estado</option>
                            <option value="PDF/Recursos/Documentos Normativos/LEY_FEDERAL_DEL_TRABAJO.pdf">Ley Federal del Trabajo</option>
                            <option value="PDF/Recursos/Documentos Normativos/Manual_de_Lineamientos_TecNM2016.pdf">Manual de Lineamientos TecNM 2016</option>
                            <option value="PDF/Recursos/Documentos Normativos/Marco_de_Referencia_CACEI_2014.pdf" >Marco de Referencia CACEI 2014</option>
                            <option value="PDF/Recursos/Documentos Normativos/POLITICA_EQUIDAD_DE_GENERO.pdf">Política de Equidad de Genero</option>
                            <option value="PDF/Recursos/Documentos Normativos/REGLAMENTO_DE_AFILIACION_VIGENCIA_DE_DERECHOS_Y_COBRANZA_%20DEL%20ISSSTE.pdf">Reglamento de Afiliación Vigencia de Derechos y Cobranza del ISSSTE</option>
                            <option value="PDF/Recursos/Documentos Normativos/REGLAMENTO_DE_LAS_CONDICIONES_GENERALES_DEL_PERSONAL_DE_LA_SEP.pdf"> Reglamento de las Condiciones Generales del Personal de la SEP</option>
                            <option value="PDF/Recursos/Documentos Normativos/Reglamento_de_las_condiciones_generales_de_trabajo_de_los_trabajadores_de_la_SEP.pdf">Reglamento de las Condiciones Generales de Trabajo de los Trabajadores de la SEP</option>
                            <option value="PDF/Recursos/Documentos Normativos/Reglamento_del_Personal_Docente.pdf" >Reglamento del personal Docente</option>
                            <option value="PDF/Recursos/Documentos Normativos/REGLAMENTO_DE_PRESTACIONES_ECONOMICAS_Y_VIVIENDA_DEL_ISSSTE.pdf">Reglamento de Prestaciones Económicas y Vivienda del ISSSTE</option>
                            <option value="PDF/Recursos/Documentos Normativos/Diagnostico_ITMorelia[2014].pdf">Diagnóstico Oferta Educativa 2014</option>
                            <option value="PDF/Recursos/Documentos Normativos/CODIGO DE ETICA.pdf">Código de Etica</option>        
                          </select>
                          <label>Normativos</label>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div>
                    <h6 class="center-align">Alumnos</h6>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="PDF/Recursos/Alumnos/Reglamento_de_los_Alumnos_del_Sistema_Nacional_de_Institutos_Tecnologicos.pdf">Reglamento para Alumnos del Sistema Nacional de Institutos Tecnológicos</option>
                            <option value="PDF/Recursos/Alumnos/RESIDENCIAS PROFESIONALES ENERO-JUNIO 2017.xlsx">Residencias Profesionales ENE-JUN 2017</option>
                            <option value="PDF/Recursos/Alumnos/RESIDENCIAS PROFESIONALES AGOSTO- DICIEMBRE 2017.xlsx">Residencias  Profesionales AGO-DIC 2017</option>
                            <option value="PDF/Recursos/Alumnos/listado titulacion ENE-JUN2017.xlsx">Titulaciones ENE-JUN 2017</option>
                            <option value="PDF/Recursos/Alumnos/listado titulacion AGOSTO-DIC 2017.xlsx">Titulaciones AGO-DIC 2017</option>
                          </select>
                          <label>Reglamento</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col s10 m5 l5">
                  <div class="divider"></div>
                  <div >
                    <h5 class="center-align">Material de Apoyo</h5>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="PDF/Recursos/Materias/Presentación JMANCERA Y GARENAS.pptx"> 5° Congreso Contaduría - Jesús Mancera Macedo </option>
                            <option value="PDF/Recursos/Materias/Introducción  al Mercado de Valores.ppt">introducción al MV - Jesús Mancera Macedo</option>
                          </select>
                          <label>Materias</label>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="PDF/Recursos/Ceneval/GUIA_EXANI_II.PDF">Guía EXANI-II</option>
                          </select>
                          <label>Ceneval</label>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s12" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                          <select id="Lista" name=" Lista" class="combo">
                            <option value="Imagenes/Triptico1.jpg">Exterior</option>
                            <option value="Imagenes/Triptico2.jpg">Interior</option>
                          </select>
                          <label>Tríptico</label>
                        </div>
                      </div>
                    </form>
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