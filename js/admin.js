$(document).ready(
    function(){
        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav();   
    });

    function agregarpersonal(){
        var xhr= new XMLHttpRequest();
        xhr.open('GET', 'agregarPersonal.html', true);
        xhr.onreadystatechange= function() {
            if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                    document.getElementById('contenedor').innerHTML= this.responseText;
            };
        xhr.send();
        $('select').material_select();
    }

    $(function(){
        $('#agregarPersonalForm').submit(function() {
            var validated =0;
            if($('#nombreprofesor').val().length == 0 ){
                $("#nombreprofesor").css('background-color', '#fbc7c7');
                validated = validated +1;
            }
            if($('#archivo').get(0).files.length === 0){
                $("#archivo").css('background-color', '#fbc7c7');
                validated = validated +2;
            }
            if($('#archivoFoto').get(0).files.length === 0){
                $("#archivoFoto").css('background-color', '#fbc7c7');
                validated = validated +7;
            }
            if(validated>=1){
                switch(validated){
                    case 1: alert("Favor de ingresar un nombre valido"); break;
                    case 2: alert("Favor de ingrear un archivo PDF en curriculum"); break;
                    case 4: alert("Favor de ingresar una imagen para el perfil del profesor"); break;
                    case 5: alert("Favor de ingresar un nombre y fotografía valiada"); break;
                    case 6: alert("Favor de ingresar una foto y archivo PDF validos"); break;
                    case 7: alert("Favor de llenar todos los campos"); break;
                    default: ;break;
                }
                return false;
            } else {
                return true;
            }
        });

        $('#eliminarPersonalForm').submit(function() {
            if(jQuery('#eliminarp').val() == "x" ){
                alert("Favor de elegir un profesor para eliminar");
                return false;
            } else {
                return true;
            }
        });

        $('#agregarMateriaForm').submit(function() {
            var validated = 0;
            if($('#nombremateria').val().length == 0 ){
                $("#nombremateria").css('background-color', '#fbc7c7');
                validated = validated +1;
            }
            if($('#abreviacionmateria').val().length == 0 ){
                $("#abreviacionmateria").css('background-color', '#fbc7c7');
                validated = validated +3;
            }
            if($('#archivo').get(0).files.length === 0){
                $("#archivo").css('background-color', '#fbc7c7');
                validated = validated +5;
            }
            if(validated>=1){
                switch(validated){
                    case 1: alert("Favor de ingresar un nombre valido"); break;
                    case 3: alert("Favor de ingrear una abreviacion valida"); break;
                    case 4: alert("Favor de ingresar un nombre y abreviacion validos"); break;
                    case 6: alert("Favor de ingresar un nombre y archivo PDF validos"); break;
                    case 8: alert("Favor de ingresar una abreviacion y archivo PDF validos"); break;
                    case 9: alert("Favor de llenar todos los campos"); break;
                    default: ;break;
                }
                return false;
            } else {
                return true;
            }
        });

        $('#eliminarMateriaForm').submit(function() {
            if(jQuery('#eliminarmateria').val() == "x" ){
                alert("Favor de elegir una materia para eliminar");
                return false;
            } else {
                return true;
            }
        });
    });