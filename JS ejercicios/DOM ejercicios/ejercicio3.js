window.onload = function(){
    let division = document.getElementsByTagName("div")[0];
    let añadirPrincipio = document.getElementById("addPrincipio");
    let borrarPrincipio = document.getElementById("deletePrincipio");
    let añadirFinal = document.getElementById("addFinal");
    let borrarFinal = document.getElementById("deleteFinal");
    let añadirX = document.getElementById("addX");
    let borrarX = document.getElementById("deleteX");

    añadirPrincipio.addEventListener("click",function(){
        let nodo= document.createElement("input");
        nodo.value= "Al principio";
        division.prepend(nodo);
    })

    añadirFinal.addEventListener("click", function (){
        let nodo= document.createElement("input");
        nodo.value= "al final";
        division.appendChild(nodo);
    })

    borrarPrincipio.addEventListener("click", function(){
        division.removeChild(division.firstChild);
    })

    borrarFinal.addEventListener("click", function(){
        division.removeChild(division.lastChild);
    })

    añadirX.addEventListener("click", function (){
        let posicion= Number(prompt("Introduce la posicion"));
        let nodo= document.createElement("input");
        nodo.value= "En la posicion "+posicion;
        division.insertBefore(nodo,division.getElementsByTagName("input")[posicion]);
    })

    borrarX.addEventListener("click", function (){
        let posicion= Number(prompt("Introduce la posicion del elemento a borrar"));

        division.removeChild(division.getElementsByTagName("input")[posicion]);
    })

}