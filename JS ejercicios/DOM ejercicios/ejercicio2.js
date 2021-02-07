window.onload = function(){
    let boton  = document.getElementsByTagName("button")[0];
    let lista = document.getElementsByTagName("ul")[0];

    boton.addEventListener("click", function(){
        let nodo= document.createElement("li");
        let textonodo = document.createTextNode("otro Elemento");

        nodo.appendChild(textonodo);
        lista.appendChild(nodo);
    })
}