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
    protected $datos = array();

    function __construct($archivo) {
        $this->archivo = $archivo;
    }

    public function set($clave,$valor){
        $this->datos[$clave] = $valor;
    }
    
    public function Mostrar()
    {
        extract($this->datos);
        ob_start(); //activa el almacenamiento en búfer de salida
        include ($this->archivo);
        $salida = ob_get_contents();//El contenido de este búfer interno se puede copiar a una variable de tipo string usando ob_get_contents()
        ob_clean();
        echo $salida;
    }
    
}

?>
