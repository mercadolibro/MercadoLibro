<?php

/**
 * Clase Vista
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */

class Vista {
    
    private $archivo;
    private static $datos;

    function __construct($archivo) {
        $this->archivo = $archivo;
    }
    
    public function setDatos($datos)
    {
        self::$datos = $datos;
    }
    
    public static function getDatos()
    {
        return self::$datos;
    }

    public function Mostrar()
    {
        include $this->archivo;
    }
    
}

?>
