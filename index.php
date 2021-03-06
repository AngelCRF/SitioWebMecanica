<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mec�nica</title>
        <meta charset="utf-8"/>
       
        <meta name="keywords" content="pagina de IGE"/>
        
        <meta name="author" content="Neri Gonzalez Lopez"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>

        <!-- Materialized libraries -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         
        <style type="text/css">
            body{
                background: #dddddd;
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
            }
            #sombra{
                -webkit-text-stroke: 0.70px black;
            }
            #sombrah5{
                /*-webkit-text-fill-color: white;*/
                -webkit-text-stroke: 0.40px black;
            }
            .Cprincipal_index{
                width: 90%;
                height: auto;
                margin-top: 5%;
                margin-left: 5%;  
                border-bottom: solid iem*
            }
           
        </style>
       </head>


<body >
        <script type="text/javascript">
            $(document).ready(function(){
                $(".dropdown-button").dropdown();
                $('.materialboxed').materialbox();
                $(".button-collapse").sideNav();
                $('select').material_select();
                $('.carousel.carousel-slider').carousel({fullWidth: false});
                $('.slider').slider({fullWidth: false});     
                function autoplay() {
                   // $('.carousel').carousel('next');
                  $('.slider').slider('next');
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
        <div id="navbar" class="navbar">
            <script type="text/javascript">
                    $("#navbar").load("navbar.html");
            </script> 
        </div>
      
  <div class="Cprincipal_index card-panel grey lighten-4">
    <div>
      <img class="responsive-img" src="Imagenes/head.png" alt="header pagina quienes somos" height="90px" width="3000px">
    </div>
   
    <br />

    <!--Carusel de imagenes -->
    <div class="slider">
      <ul class="slides">
        <?php

            require ("admin/DB.php");
            $conexion = new DB();
            $sql = "SELECT titulo, descripcion, imagen, url FROM noticias ORDER BY fecha DESC LIMIT 3";
            $resultado=$conexion->ejecutar($sql);
            foreach($resultado as $fila){ 
              $admin = "admin/"     ;
              $img = $fila ['imagen']; 

            //Especificar el alto y el ancho con javascript cada vez que devuelva la consulta 
        ?>
        <li>
          <img src="<?php echo $admin . $img ; ?>">
          <div class="caption center-align">
            <div id="sombra">
                <a class="light grey-text text-lighten-3" target="blank" href="http://<?php echo $fila ['url']; ?>"><h3><?php echo $fila ['titulo']; ?></h3></a>
            </div>
                <h5 class="light grey-text text-lighten-3"><?php echo $fila ['descripcion']; ?></h5> 
            <a class="waves-effect green accent-4 z-depth-4 btn" target="blank" href="http://<?php echo $fila ['url']; ?>" ><i class="material-icons right">insert_link</i>Ver más</a>
          </div>
        </li>
      
        <?php 
             } 
        ?>
      </ul>
    </div>
  
    <br /><br />
    <div class="sitios_interes2 container">
      <center class="flow-text grey-text ">Sitios de Interés</center><br>
    </div>
             
    <div class="row">
      <div class="col s6 m6 l6">
        <div class="card">
          <div class="card-image">
            <a href="http://www.conacytprensa.mx/"><img src="Pagina/images/logoAICgris.png"></a>
            <span class="card-title">Card Title</span>
          </div>
        </div>
      </div>
      <div class="col s6 m6 l6">
        <div class="card">
          <div class="card-image">
            <a href="http://cacei.org.mx/index.php"><img src="Pagina/images/cacei.png"></a>
          </div>
        </div>
      </div>
      <div class="col s6 m6 l6">
        <div class="card">
          <div class="card-image">
          <a href="https://www.entrepreneur.com/es"><img src="Imagenes/entrepreneur-logo.png"></a>
            <span class="card-title">Card Title</span>
          </div>
        </div>
      </div>
    </div>
            

  </div>

 <!--Pie de pagina, datos de contato-->
 <div id="feet" class="feet">
            <script type="text/javascript">
                    $("#feet").load("footer.html");
            </script> 
        </div>
 </body>
</html> 