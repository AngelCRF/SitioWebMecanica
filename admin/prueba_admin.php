<!DOCTYPE html>
<!-- Artesania y loza Mexicana -->

<html lang="es">
    <head>
        <title>ITMORELIA| Dept. Metal-Mec�nica</title>
        <meta charset="utf-8"/>
        <link rel="icon" type="image/ico" href="Imagenes/icotec.ico"/>

       <!-- Materialized libraries -->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/index.css" />
        <link rel="icon" href="img/icon.png"/>
        <!--Import jQuery before materialize.js-->
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/admin.js"/></script>
        <script type="text/javascript" src="/SitioWebMecanica/js/agregarPersonal.js"/></script>
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
            <li><a href="index.php"><i class="material-icons">Personal</i></a></li>
            <li><a href="index.php"><i class="material-icons">Reticula</i></a></li>
        </ul>
    </div>
</nav>
        
  <div class="Cprincipal_index card-panel grey lighten-4">
    <h1>Personal</h1>
    <div class="sitios_interes2 container">
      <center class="flow-text grey-text ">Agregar curriculum de profesor</center><br>
    </div>

    <form action="subirPersonal.php" method="post" enctype="multipart/form-data">
        <input type="text" name= "nombreprofesor" id="nombreprofesor" placeholder="Nombre del profesor">
        <div class="input-field col s12">
          <select id="puesto">
            <option value="Profesor">Profesor</option>
            <option value="Jefe de departamento">Jefe de departamento</option>
            <option value="presidente de academia">Presidente de academia</option>
            <option value="secretario de academia">Secretario de academia</option>
            <option value="coordinador de carrera">coordinador de carrera</option>
            <option value="coordinador de programa de tutorias">coordinador de programa de tutorias</option>
            <option value="Jefe de proyecto de docencia">Jefe de proyecto de docencia</option>
            <option value="Jefe de proyecto de vinculacion">Jefe de proyecto de vinculaci&oacuten</option>
            <option value="Jefe de proyecto de investigacion">Jefe de proyecto de investigaci&oacuten</option>
          </select>
          <label>Puesto</label>
        </div>

        <div class="input-field col s12">
          <select id="carrera">
            <option value="mecanica">Mec&aacutencia</option>
            <option value="mecatronica">Mecatr&oacutenica</option>
          </select>
          <label>Carrera</label>
        </div>
        <label for="archivo">Seleccione un archivo para subir</label>  
        <br>
        <input type="file" name="archivo" id="archivo">
    </form>


  </div>

    <div class="Cprincipal_index card-panel grey lighten-4">
        <div class="sitios_interes2 container">
        <center class="flow-text grey-text ">Editar </center><br>
        </div>
    </div>

    <div class="Cprincipal_index card-panel grey lighten-4">
        <div class="sitios_interes2 container">
        <center class="flow-text grey-text ">Edición de Tercer sitio</center><br>
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