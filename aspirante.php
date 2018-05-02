<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mecánica</title>
        <meta charset="utf-8"/>
        <meta name="keywords" content="pagina de Metal-Mecánica"/>
        <meta name="author" content="Jorge Cervantes Ramirez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
        <!--Cuerpo de la pagina, perfil de egreso-->
    
        <div>
            <h5 class="center-align">Perfil de Egreso</h5><br />
        </div>

        <!--//// Se inserta la imagen de cabcera de a carrera ////-->
        <br />
        <div class="divider"></div>    
        <img class="responsive-img materialboxed col s10 m10 l10 offset-l1 offset-m1 offset-s1" src="Imagenes/cabecera_meca.png">
        <div class="divider"></div> 
        <br />
    

    <div class="container">
        <div style="font-size: 15px">
        <div style="text-align: justify;">
            <ol class="numeric">
             <div class="row">  

                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue ">
                        <div class="card-content white-text">
                            <li>Aplica herramientas matemáticas,
                            computacionales y métodos experimentales en la solución de problemas para formular modelos, analizar procesos y elaborar prototipos 
                            mecánicos.</li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >desktop_windows</i>
                            </div>
                        </div>   
                    </div> 
                </div>  

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red ">
                        <div class="card-content white-text">
                            <li>Selecciona y emplea los materiales adecuados para: el diseño y fabricación de elementos mecánicos; o para su uso en instalaciones industriales con base en el conocimiento de sus propiedades.</li><br />
                            <div class="center-align">
                                <i class="small material-icons" >color_lens</i>
                            </div>
                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #00c853 green accent-4 ">
                        <div class="card-content white-text">
                            <li>Gestiona proyectos de diseño, manufactura, diagnóstico, instalación, operación, control y mantenimiento, tanto de sistemas mecánicos como de sistemas de aprovechamiento de fuentes de energía renovables y no renovables.</li><br />
                            <div class="center-align">
                                <i class="small material-icons" >content_paste</i>
                            </div>

                        </div>   
                    </div> 
                </div>
            </div><!-- ROW-->

            <div class="row"> 
                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue ">
                        <div class="card-content white-text">
                            <li>Participa en servicios de asesoría, peritaje, certificación, capacitación, selección tanto de equipo como maquinarias afines a su profesión. </li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >search</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red ">
                        <div class="card-content white-text">
                            <li>Posee capacidad directiva para administrar eficientemente los recursos humanos, materiales y económicos a su disposición en el ejercicio de su profesión. </li><br />
                            <div class="center-align">
                                <i class="small material-icons" >work</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #00c853 green accent-4">
                        <div class="card-content white-text">
                            <li>Aplica sus conocimientos, habilidades y aptitudes para cursar estudios de posgrado. </li><br /><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >edit</i>
                            </div>

                        </div>   
                    </div> 
                </div>
            </div><!--ROW-->

            <div class="row"> 

                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue">
                        <div class="card-content white-text">
                            <li>Desarrolla una actitud emprendedora para la creación de nuevas empresas, con espíritu creativo, liderazgo y compromiso social. </li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >group</i>
                            </div>
                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red">
                        <div class="card-content white-text">
                            <li>Utiliza el pensamiento crítico en el análisis de situaciones relacionadas con la ingeniería mecánica, para la toma de decisiones de forma objetiva. </li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >lightbulb_outline</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #00c853 green accent-4">
                        <div class="card-content white-text">
                            <li>Elabora, interpreta y comunica eficazmente en su desempeño profesional en forma oral, escrita y gráfica: informes, propuestas, análisis y resultados de ingeniería en al menos dos idiomas. </li><br />
                            <div class="center-align">
                                <i class="small material-icons" >show_chart</i>
                            </div>

                        </div>   
                    </div> 
                </div>
            </div><!--ROW-->

            <div class="row"> 
                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue">
                        <div class="card-content white-text">
                            <li>Crea, innova, transfiere y adapta tecnologías en el campo de la ingeniería mecánica, con actitud emprendedora y de liderazgo, respetando los principios éticos y valores universales, ejerciendo su profesión de manera responsable en un marco legal. </li><br />
                            <div class="center-align">
                                <i class="small material-icons" >star</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red">
                        <div class="card-content white-text">
                            <li>Forma parte de grupos multidisciplinarios en proyectos integrales con una actitud que fortalece el trabajo de equipo, ejerciendo diversos roles que contribuyen con su capacidad profesional al logro conjunto. </li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >group</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #00c853 green accent-4">
                        <div class="card-content white-text">
                            <li>Observa y aplica las normas y especificaciones nacionales e internacionales relacionadas con el tratamiento adecuado de las materias primas, los productos terminados, así como los materiales residuales, generados en los procesos industriales con el fin de preservar la integridad del ser humano y el medio ambiente. </li>
                            <div class="center-align">
                                <i class="small material-icons" >gavel</i>
                            </div>

                        </div>   
                    </div> 
                </div>
            </div><!--ROW-->

            <div class="row"> 
                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue">
                        <div class="card-content white-text">
                            <li>Participa en proyectos tecnológicos y de investigación científica encaminados a la conservación del medio ambiente fomentando un desarrollo sustentable. </li><br />
                            <div class="center-align">
                                <i class="small material-icons" >filter_vintage</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red">
                        <div class="card-content white-text">
                            <li>Implementa sistemas de control automático de procesos industriales y gestiona sistemas de calidad para mejorar los estándares de producción.</li><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >settings</i>
                            </div>

                        </div>   
                    </div> 
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #00c853 green accent-4">
                        <div class="card-content white-text">
                            <li>Reflexiona acerca del contexto histórico, geográfico y socioeconómico de su región, para proponer soluciones congruentes con la realidad del país en un entorno globalizado.</li><br />
                            <div class="center-align">
                                <i class="small material-icons" >public</i>
                            </div>

                        </div>   
                    </div> 
                </div> 
                </div><!-- ROW -->
            </ol>
          </div>
         </div><!-- JUSTIFY -->
           </div>      

        <!--//// Se inserta la imagen de cabcera de a carrera [SE CAMBIARÁ POR UNA DEL MISMO TAMAÑO QUE LA DE MECÁNICA] -->
        <div class="divider"></div> 
        <img class="responsive-img materialboxed col s10 m10 l10 offset-l1 offset-m1 offset-s1" src="Imagenes/cabecera_mecat.png">
        <div class="divider"></div> 
        <br />

        <div class="container">
        <div style="font-size: 15px">
         <div style="text-align: justify;">
          <ol type="numeric">    

            <div class="row">
                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue">
                        <div class="card-content white-text">
                            <p><li>Ejerce su profesión legal y responsablemente para cumplir con las normas nacionales e internacionales que apliquen. </li></p><br /><br /><br />
                            <div class="center-align">
                                <i class="small material-icons" >gavel</i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #f44336 red">
                        <div class="card-content white-text">
                            <li><p>Analiza, sintetiza, diseña, simula, construye e innova productos, procesos, equipos y sistemas mecatrónicos, para impactar positivamente en su entorno con una actitud investigadora, de acuerdo a las necesidades tecnológicas, sociales actuales y emergentes. </p></li><br />
                            <div class="center-align">
                                <i class="small material-icons" >settings</i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue">
                        <div class="card-content white-text">
                           <li>Instala, opera, optimiza, controla y mantiene sistemas mecatrónicos integrando tecnologías mecánicas, eléctricas, electrónicas y herramientas computacionales.</li><br /><br />
                           <div class="center-align">
                                <i class="small material-icons" >lightbulb_outline</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col s12 m12 l4">
                    <div class="card small #03a9f4 light-blue ">
                        <div class="card-content white-text">
                           <li>Planifica, evalúa, genera, administra y transfiere proyectos industriales y de carácter social para el desarrollo tecnológico del país. </li><br /><br /><br />
                           <div class="center-align">
                                <i class="small material-icons" >show_chart</i>
                            </div>
                        </div>
                    </div>
                </div>
           
                <div class="col s12 m12 l4">
                    <div class="card  small #f44336 red">
                        <div class="card-content white-text">
                             <li>Participa, coordina y/o dirige grupos multidisciplinarios a través del trabajo en equipo para asegurar la calidad, eficiencia, productividad y rentabilidad en la implementación de proyectos mecatrónicos con sentido de responsabilidad de su entorno social y cultural para un desarrollo sustentable. </li><br />
                             <div class="center-align">
                                <i class="small material-icons" >group</i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l4">
                    <div class="card  small #03a9f4 light-blue">
                        <div class="card-content white-text">
                            
                             <li>Posee capacidades de liderazgo, comunicación, interrelaciones personales para transmitir ideas, facilitar conocimientos y trabajar con responsabilidad colectiva para la solución de problemas y desarrollo de proyectos con un sentido crítico y autocrítico. </li><br />
                             <div class="center-align">
                                <i class="small material-icons" >assignment_ind</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card  small #00c853 green accent-4">
                        <div class="card-content white-text">

                           <li>Desarrolla proyectos con un espíritu innovador, emprendedor y comprometido con su actualización profesional continua y autónoma, para estar a la vanguardia en los cambios científicos y tecnológicos que se dan en el ejercicio de su profesión.</li><br />
                           <div class="center-align">
                                <i class="small material-icons" >cached</i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m12 l6">
                    <div class="card  small #00c853 green accent-4">
                        <div class="card-content white-text">
                           <li>Interpreta información técnica de las áreas que componen la Ingeniería Mecatrónica para la transferencia, adaptación, asimilación e innovación de tecnologías de vanguardia. </li><br /><br /><br />
                           <div class="center-align">
                                <i class="small material-icons" >info_outline</i>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>

        </ol>
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
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/IGE-ITMorelia-Oficial-137692846975721/" target="_blank"><img src="Imagenes/face.jpg"> Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/itmoficial" target="_blank"> <img src="Imagenes/twitter.jpg"> Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/user/ITMoreliaOficial/" target="_blank"> <img src="Imagenes/youtube.jpg"> Youtube</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/edu/instituto-tecnol%C3%B3gico-de-morelia-173011" target="_blank"><img src="Imagenes/link.jpg"> Linkedin</a></li>
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
