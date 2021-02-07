window.onload = function (){
    let enlaces = document.getElementsByTagName("a");

    alert("Numero de enlaces:\n"+enlaces.length);

    alert("Penultimo enlace:\n"+enlaces[enlaces.length -2].href);

    let contador = 0;
    for (let x= 0;x<enlaces.length;x++){
        if (enlaces[x].href== "http://prueba/"){
            contador++;
        }
    }
    alert("Numero de enlaces que redirigen a http://prueba:\n"+contador);

    let tercerparrafo= document.getElementsByTagName("p")[2];
    alert("Enlaces del tercer parrafo:\n"+tercerparrafo.getElementsByTagName("a").length);


}