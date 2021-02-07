<?php
require "vendor/autoload.php";
require "Models/Paciente.php";
use Ejercicio02\Models\Paciente;

$paciente= new Paciente("Mario","Zaton","19");
if (isset($_GET["accion"])){

    if($_GET["accion"]=="enfermar"){
        $paciente->enferma();
    }
    else{
        $paciente->cura();
    }

}

echo "<a href='index.php?accion=enfermar'>Voy a enfermar</a> | ";
echo "<a href='index.php?accion=curar'>Me voy a curar</a>";
