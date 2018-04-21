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
