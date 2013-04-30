<?php


class Controlador {
    protected $modelo;
    protected $accion;
    protected $vista;
    protected $nombreModelo;


    function __construct($modelo,$accion) {
        $this->accion = $accion;
        $this->nombreModelo = $modelo;
        $this->vista = new Vista(HOME.DS.'Vistas'.DS.$this->nombreModelo.DS.$this->accion.'.php');
    }
}

?>
