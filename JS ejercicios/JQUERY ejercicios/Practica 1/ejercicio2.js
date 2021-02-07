$(document).ready(function (){
    let boton = $('button').eq(0);
    let lista = $('ul').eq(0);

    boton.on("click", function (){
        lista.append('<li>Nuevo elemento</li>');
    })
});