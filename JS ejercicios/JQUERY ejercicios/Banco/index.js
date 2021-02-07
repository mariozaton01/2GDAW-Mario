$(document).ready(function (){
    mostrarCajaNumeros();
    colocarNumero();
    comprobarLogin()

})

function comprobarLogin(){
    $('input[type=submit]').on('click',function(e) {
        let dniUsuario = "72756384R";
        let claveUsuario = 1234;
        validarDatos();

        if (dniUsuario != $('input[name=nif]').val() || claveUsuario != $('input[name=clave]').val()) {
            alert("Usuario o contraseña incorrecto");
            e.preventDefault();
        }
    });

}
function validarDatos(){
    $('input[type=submit]').on('click',function(){
        let dni=$('input[name=nif]').val();

        var letras= ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
        if(dni.length>9 || dni.length<9){
            alert("El DNI tiene 9 digitos");
        }
        else{
            for(let x=0;x<letras.length;x++) {
                if (dni % 23 == x) {
                    dniCompleto = dni + letras[x];

                }
            }
        }
        let clave=$('input[name=clave]').val();
        if (clave.length>4 ||clave.length<4){
            alert("La clave es de 4 digitos");
        }


    })

}

function mostrarCajaNumeros(){
    let numeros = $('input[name=clave]');
    let contador= 0;
    numeros.on('click',function (){
        contador++;
        if (contador %2 ==0){
            $('#num_clave').css('display', 'none');
            $('.numeros').remove();
        }
        else{
            $('#num_clave').css('display', 'flex');
            generarNumAleatorios();




        }
        //Cerrar cuadrode botones al clickar fuera de el, NO FUNCIONA
        /*$(document).on('click', function (event){
            clic= event.target();
            if($('#num_clave').css('display','flex') && clic != $('#num_clave')){
                $('#num_clave').css('display','none');
            }
        });*/

    });
}

function generarNumAleatorios() {

    var numerosAleatorios = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    numerosAleatorios = numerosAleatorios.sort(function () {
        return Math.random() - 0.5;

    });
    for (x=0;x<numerosAleatorios.length;x++) {
        let boton = document.createElement('button');
        boton.innerHTML=numerosAleatorios[x];
        boton.setAttribute('class', 'numeros');
        boton.value=numerosAleatorios[x];
        $('#num_clave').append(boton);
    }

}
function colocarNumero(){
    $('.numeros').on('click',function(){
        let valor= $(this).val();
        console.log($(this).innerText());
        $('input[name=clave]').innerText=valor;
    });
}