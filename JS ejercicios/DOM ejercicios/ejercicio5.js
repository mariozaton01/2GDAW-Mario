window.onload= function(){
    var producto= document.getElementById("produc");
    var lista= document.getElementsByTagName("ul")[0];
    var annadir= document.getElementById("añadir");
    var resetearLista= document.getElementById("reset");

    annadir.addEventListener("click", function(){
        let elemento= document.createElement("li");
        let textoElemento= document.createTextNode(producto.value);
        document.cookie = "producto= "+encodeURIComponent(producto.value)+",";
        elemento.style.textDecoration= "none";

        elemento.addEventListener("dblclick", function(event ){
            //console.log(event);
            elemento.parentNode.removeChild(elemento);
            document.cookie = "producto="+encodeURIComponent(event.target.outerText)+";max-age=0";
            //console.log(event.target.outerText);

        });

        elemento.appendChild(textoElemento) ;
        lista.appendChild(elemento);

        producto.value= "";
    });

    resetearLista.addEventListener("click", function (){
        lista.innerHTML = "";
    })
}
