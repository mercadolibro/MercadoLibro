<?php

/**
 * Representa la comunicacion entre el modelo "Clientes" y la vista
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */

class ClientesControl extends Controlador{
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
    }
    
    public function detalle()
    {
        $this->modelo = new Clientes();
        $datos = $this->modelo->recibirClientes();
        $this->vista->setDatos($datos);
        return $this->vista->Mostrar();;
    }
    
}

?>
