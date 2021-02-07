<?php

namespace Ejercicio02\Models;
use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;
class Paciente
{
    private $nombre, $apellido, $edad, $log;

    public function __construct($nombre, $apellido, $edad)
    {
        $this-> nombre= $nombre;
        $this->apellido= $apellido;
        $this->edad= $edad;
        $this->log= new Logger("name");
        $this->log->pushHandler(new StreamHandler('app.log', Logger::DEBUG));
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function enferma(){
        $this->log->debug("estoy enfermisimo");
    }
    public function cura(){
        $this->log->debug("toy bueno");


    }
}