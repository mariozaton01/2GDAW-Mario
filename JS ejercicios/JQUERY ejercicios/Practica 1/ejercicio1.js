$(document).ready(function (){
    let enlaces = $("a");

    alert("numero de enlaces"+enlaces.length);

    alert("Penultimo enlace:"+ enlaces[enlaces.length -1].href);

    alert("enlaces a prueba: "+ $('[href="http://prueba"]').length);

    alert("enlaces del segundo parrafo: "+ $('p:nth-child(2) a').length);
})