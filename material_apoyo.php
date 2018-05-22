<?php

require_once ("admin/DB.php");
$conexion = new DB();
 
?>
<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mecánica</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Metal-Mecánica"/>
        <meta name="author" content="Jorge Cervantes Ramirez/Yael Revuelta"/>
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
          <div id="navbar" class="navbar">
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
          </div>
        <!--Cuerpo de la pagina-->
        <div class="Cprincipal_index card-panel grey lighten-4">
            <div class="cajaS"><img src="Imagenes/logoSEP.png"></div>
            <div class="cajaT"><img src="Imagenes/logoTEC.png"></div>
            <br>
            <br>
            <div id="wrapper">
            <div>
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
                            <option value="<?php echo $ruta.$nombre; ?>"><?php echo $nombre; ?></option>
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
                        <?php  
                                $sql = "SELECT nombre FROM material_apoyo WHERE seccion = 'Documentos'";
                                $resultado=$conexion->ejecutar($sql);
                                foreach($resultado as $fila){ 
                                     $ruta = "admin/material/";
                                     $nombre = $fila ['nombre'];
                            ?> 
                          <select id="Lista" name=" Lista" class="combo" onchange="window.open(this.options[this.selectedIndex].value,'_blank')">
                            <option value="<?php echo $ruta.$nombre; ?>"><?php echo $nombre; ?></option>
                          </select>
                                <?php } ?>
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

       <div id="feet" class="feet">
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
    </body>
</html> 