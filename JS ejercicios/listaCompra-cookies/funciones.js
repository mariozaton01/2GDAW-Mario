// Variables globales
let botonAnadir = document.getElementById("banadir");
let nuevoElemento= document.getElementById("canadir");
let listaCompra = document.getElementById("listaCompra");


botonAnadir.addEventListener("click",fanadir);

document.getElementById("resetear").addEventListener("click",resetear);

rellenarContenido();


function fanadir(){
    try {
        if (nuevoElemento.value == "")
            throw "No se pueden añadir elementos a la lista vacíos";
        let lista = document.createElement("li");
        let texto = document.createTextNode(nuevoElemento.value);
        lista.appendChild(texto);
        lista.addEventListener("dblclick", eliminarLi);
        listaCompra.appendChild(lista);
        nuevoElemento.value = "";

        actualizarCookie();
    }
    catch(e)
    {
        alert(e);
        nuevoElemento.focus();
    }
}


function actualizarCookie(){
        //console.log(listaCompra.innerHTML);
        setCookie("compra",listaCompra.innerHTML,7);
}

function resetear(){
        listaCompra.innerHTML ="";
        removeCookie("compra");
}

function rellenarContenido(){
    // Si hay algo en la lista de la compra hay que mostrarlo.
        let i=0;
        if (detectCookie("compra")){
            // mostrar
            listaCompra.innerHTML = getCookie("compra");
            //los elementos añadidos no tienen el comportamientoLi.
            elementosLista = document.getElementsByTagName("li");
            while(i<elementosLista.length){
                elementosLista[i].addEventListener("dblclick",eliminarLi);
                i++;
            }
        }
};

 function eliminarLi(){
     this.parentNode.removeChild(this);
     actualizarCookie();
 }
    