$(document).ready(function (){
   let div= $("div").eq(0);
   let anadirPrin= $("#addprincipio");
   let borrarPrin= $("#deletePrincipio");
   let anadirFin= $("#addFinal");
   let borrarFin= $("#deleteFinal");

   anadirPrin.on("click", function (){
       div.prepend('<input type="text" value="Al principio">');
   });
    borrarPrin.on("click", function (){
        $("div input:first").remove();
    });
    anadirFin.on("click", function (){
        div.append('<input type="text" value="Al Final">');
    });
    borrarFin.on("click", function (){
        $("div input:last").remove();
    });

});