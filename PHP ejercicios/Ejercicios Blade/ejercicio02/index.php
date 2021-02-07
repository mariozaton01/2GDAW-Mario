<?php

require "vendor/autoload.php";
use duncan3dc\Laravel\Blade;
use Ejercicio02\Models\Zapatillas;

$zapatillas= new Zapatillas("Nike", "TZ-50","Baloncesto","250€");
echo Blade::render("zapas", ["zapatilla"=>$zapatillas]);
