<?php

if (isset($_POST["idioma"])){
    setcookie("idioma",$_POST["idioma"],time()+1*60);
}
$idioma= $_COOKIE["idioma"];
require "ejercicio03.view.php";