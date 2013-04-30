<?php
/**
 * Representa la Identidad "clientes" del proyecto "Mercado-Libro"
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */
class Clientes{
  
    private $BD;
    
    public function __construct() {
        $this->BD = new conexion();
    }
    
    // ##### Atributs ####
    
    /**
     * Es la identificacion del Cliente
     * @var Long
     */
    private $cedula; 
    
    /**
     * Nombre del Cliente
     * @var String
     */
    private $nombre;
    
    /**
     * Apellido del cliente
     * @var String
     */
    private $apellido;
    
    /**
     * Ubicacion donde se encuetra viviendo el Cliente
     * @var String
     */
    private $direccion;
    
    /**
     * Numero telefonico del Cliente
     * @var Long
     */
    private $telefono;
    
    
    // ##### Metodos SET #####
    
    /**
     * se asigna el valor de la Cedula
     * @param type Long
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }
    
    /**
     * Se le asigna el valor del nombre
     * @param type String
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    /**
     * Se le asigna el valor del apellido
     * @param type String
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    
    /**
     * Se le asigna el valor de la direccion
     * @param type String
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    
    /**
     * Se le asigna el valor del telefono
     * @param type Long
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    
    
    // ##### Metodos GET #####
    
    /**
     * Se devuelve el valor de la cedula
     * @return Long
     */
    public function getCedula()
    {
        return $this->cedula;
    }
    
    /**
     * Se devuelve el valor del nombre
     * @return String
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * Se devuelve el valor del apellido
     * @return String
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    
    /**
     * Se devuelve el valor de la direccion
     * @return String
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    
    /**
     * Se devuelve el valor del telefono
     * @return Long
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function recibirClientes() 
    {
        $this->BD->conectar();
        $sql = "SELECT cedula, nombre, apellido, direccion, telefono FROM mercadolibro.Clientes";
        $resultado = mysql_query($sql);
        $clientes = array();
        while($d = mysql_fetch_object($resultado))
        {
              $CLI = new Clientes();
              $CLI->setCedula($d->cedula);
              $CLI->setNombre($d->nombre);
              $CLI->setApellido($d->apellido);
              $CLI->setDireccion($d->direccion);
              $CLI->setTelefono($d->telefono);
              $clientes[$CLI->getCedula()] = $CLI;
        }
        $this->BD->desconectar();
        return $clientes;
    }

}

?>
