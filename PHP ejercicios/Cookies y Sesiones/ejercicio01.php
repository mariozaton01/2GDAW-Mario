<?php

if(isset($_POST["usuario"])){
    setcookie("usuario",$_POST["usuario"],time()+7*24*60*60);
}
else{
    $error= "No se puede dejar el campo vacio";
}
function crearFila(){
    if(isset($_COOKIE["usuario"])){
        $fila= $_COOKIE["usuario"];
    }
    return $fila;
}
$fila= crearFila();


    if (isset($_POST["boton"])){
        if ($_POST["boton"]=="borrar"){
            setcookie("usuario",NULL,-1);
        }
    }


require "ejercicio01.view.php";
