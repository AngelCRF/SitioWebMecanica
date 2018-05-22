$(document).ready(
    function(){
        $(".dropdown-button").dropdown();
        $(".button-collapse").sideNav(); 
        $('select').material_select();  
    });

    $(function(){
        
        $('#agregarPersonalForm').on("submit", function(e){
            e.preventDefault();
            var f = $(this);
            var formData = new FormData(document.getElementById("agregarPersonalForm"));
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
                validated = validated +3;
            }
            if(validated>=1){
                switch(validated){
                    case 1: alert("Favor de ingresar un nombre valido"); break;
                    case 2: alert("Favor de ingresar un archivo PDF en curriculum"); break;
                    case 4: alert("Favor de ingresar una imagen para el perfil del profesor"); break;
                    case 5: alert("Favor de ingresar un nombre y fotografía valiada"); break;
                    case 6: alert("Favor de ingresar una foto y archivo PDF validos"); break;
                    case 7: alert("Favor de llenar todos los campos"); break;
                    default: ;break;
                }
                return false;
            } else {
                
            $.ajax({
                url: "subirPersonal.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data)   // A function to be called if request succeeds
                {
                    if(data.status == 'success'){
                        alert("Profesor agregado correctamente");
                        document.getElementById("agregarPersonalForm").reset();
                    }else if(data.status == 'errorArchivo'){
                        alert("Error al subir el CV");
                    }else if(data.status == 'errorFoto'){
                        alert("Error al subir la foto");
                    }else if(data.status == 'errorConsulta'){
                        alert("Error de conexión, vuela a intentarlo más tarde");
                    }             
                }
                });
                //return true;
            }
        });

        $('#editarPersonalForm').on("submit", function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("editarPersonalForm"));
            $.ajax({
                url: "editarPersonal.php", // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData:false,        // To send DOMDocument or non processed data file it is set to false
                success: function(data) {   // A function to be called if request succeeds
                    if(data.status == 'success'){
                        alert("Profesor editado correctamente");
                        document.getElementById("agregarPersonalForm").reset();
                    } else if(data.status == 'errorArchivo'){
                        alert("Error al subir el CV");
                    } else if(data.status == 'errorFoto'){
                        alert("Error al subir la foto");
                    } else if(data.status == 'errorConsulta'){
                        alert("Error de conexión, vuela a intentarlo más tarde");
                    }
                }
            });
                //return true;
        });
        
        $('#eliminarPersonalForm').on("submit", function(e){
            e.preventDefault();
            var formData = new FormData(document.getElementById("eliminarPersonalForm"));
            if(jQuery('#eliminarp').val() == "x" ){
                alert("Favor de elegir un profesor para eliminar");
                return false;
            }
            else{
                $.ajax({
                    url: "eliminarPersonal.php", // Url to which the request is send
                    type: "POST",             // Type of request to be send, called as method
                    data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        alert("Profesor eliminado correctamente");
                        document.getElementById("eliminarPersonalForm").reset();
                    }
                    });
                //return true;
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

        $('#agregarIndiceForm').submit(function() {
            var validated = 0;
            if($('#archivo').get(0).files.length === 0){
                $("#archivo").css('background-color', '#fbc7c7');
                validated = validated +1;
            }
            if(validated>=1){
                switch(validated){
                    case 1: alert("Favor de ingresar un archivo valido"); break;
                    default: ;break;
                }
                return false;
            } else {
                return true;
            }
        });

        $('#eliminarIndiceForm').submit(function() {
        });
    })
