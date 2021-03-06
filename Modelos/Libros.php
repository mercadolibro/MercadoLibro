<?php

/**
 * Representa la Identidad "Libros" del proyecto "Mercado-Libro"
 * 
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */

class Libros {
    
    private $BD;
    
    public function __construct() {
        $this->BD = new conexion();
    }
    
    // ##### Atributos #####
    
    /**
     * Es la identificacion del Libro
     * @var String
     */
    private $codigo;
    
    /**
     * El nombre de los Libros
     * @var String
     */
    private $nombre;
    
    /**
     * Es la categoria de los libros (genero)
     * @var String
     */
    private $categoria;
    
    /**
     * Es el nombre de la persona que escribio el Libro
     * @var String
     */
    private $autor;
    
    /**
     * Compania que administria el Libro
     * @var String
     */
    private $editorial;
    
    /**
     * numero continuacion del Libro
     * @var Integer
     */
    private $edicion;
    
    /**
     * ano en que se creo el Libro
     * @var Date
     */
    private $ano;
    
    // ##### Metodos SET #####
    
    /**
     * Se asigna el valor del codigo
     * @param type String
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    /**
     * Se asigna el valor del nombre
     * @param type String
     */
       private $valor;
    
    // ##### Metodos SET #####
    
    /**
     * Se asigna el valor del libro
     * @param type Integer
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    /**
     * Se asigna el valor del nombre
     * @param type String
     */
 
    public function getValor()
    {
        return $this->valor;
    }
    
    /**
     * devuelve el nombre del libro
     * @return String
     */
    private $portada;
    
    // ##### Metodos SET #####
    
    /**
     * Se asigna la portada del libro
     * @param type longblob
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;
    }
    
    /**
     * Se asigna el valor de la portada
     * @param type longblob
     */
 
    public function getPortada()
    {
        return $this->portada;
    }
    
    /**
     * devuelve el nombre de la portada
     * @return String
     */
    private $descripcion;
    
    // ##### Metodos SET #####
    
    /**
     * Se asigna el valor del libro
     * @param type Integer
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    
    /**
     * Se asigna el valor del nombre
     * @param type String
     */
 
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    /**
     * devuelve el nombre del libro
     * @return String
     */
    private $cantidad;
    
    // ##### Metodos SET #####
    
    /**
     * Se asigna el valor del libro
     * @param type Integer
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    
    /**
     * Se asigna el valor del nombre
     * @param type String
     */
 
    public function getCantidad()
    {
        return $this->cantidad;
    }
    
    /**
     * devuelve el nombre del libro
     * @return String
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    /**
     * Se asigna el valor de la categoria
     * @param type String
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    
    /**
     * Se asigna el nombre del Autor
     * @param type String
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    
    /**
     * Se asigna el valor de la editorial
     * @param type String
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }
    
    /**
     * Se asigna el numero de la Edicion
     * @param type Integer
     */
    public function setEdicion($edicion)
    {
        $this->edicion = $edicion;
    }
    
    /**
     * Se asigna el ano de la creacion del libro
     * @param type Date
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    
    // ##### Metodos GET #####
    
    /**
     * devuelve el codigo del libro
     * @return String
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    
    /**
     * devuelve el nombre del libro
     * @return String
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * devuelve la categoria del libro
     * @return String
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    
    /**
     * devuelve el nombre del autor del libro
     * @return String
     */
    public function getAutor()
    {
        return $this->autor;
    }
    
    /**
     * devuelve la editorial del libro
     * @return String
     */
    public function getEditorial()
    {
        return $this->editorial;
    }
    
    /**
     * devuelve el numero de la edicion del libro
     * @return Integer
     */
    public function getEdicion()
    {
        return $this->edicion;
    }
    
    /**
     * devuelve el anio de la creacion del libro
     * @return Date
     */
    public function getAno()
    {
        return $this->ano;
    }
    
    public function libros()
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "SELECT * FROM libro;";
            $resultado = mysql_query($sql);
            $libro= array();
            while($d = mysql_fetch_object($resultado))
            {
              $LI = new Libros();
              $LI->setPortada($d->portada);
              $LI->setCodigo($d->codigo);
              $libro[$LI->getCodigo()] = $LI;
            }
            return $libro;
        }
    }
    
    public function detalles($codigo)
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "SELECT * FROM libro WHERE codigo = '$codigo[0]';";
            $resultado = mysql_query($sql);
            $CLI = null;
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = new Libros();
              $CLI->setCodigo($d->codigo);
              $CLI->setNombre($d->nombre);
              $CLI->setPortada($d->portada);
              $CLI->setValor($d->valor);
              $CLI->setAutor($d->autor);
              $CLI->setCategoria($d->categoria);
              $CLI->setEditorial($d->editorial);
              $CLI->setAno($d->anio);
              $CLI->setEdicion($d->edicion);
              $CLI->setDescripcion($d->descripcion);
              $CLI->setCantidad($d->cantidad);
            }
            return $CLI;
        }
    }
    
    public function deta($codigo)
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "SELECT * FROM libro WHERE codigo = '$codigo';";
            $resultado = mysql_query($sql);
            $CLI = null;
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = new Libros();
              $CLI->setCodigo($d->codigo);
              $CLI->setNombre($d->nombre);
              $CLI->setPortada($d->portada);
              $CLI->setValor($d->valor);
              $CLI->setAutor($d->autor);
              $CLI->setCategoria($d->categoria);
              $CLI->setEditorial($d->editorial);
              $CLI->setAno($d->anio);
              $CLI->setEdicion($d->edicion);
              $CLI->setDescripcion($d->descripcion);
              $CLI->setCantidad($d->cantidad);
            }
            return $CLI;
        }
    }
    
    public function cantidad($codigo)
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "SELECT cantidad FROM libro WHERE codigo = '$codigo';";
            $resultado = mysql_query($sql);
            $CLI;
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = $d->cantidad;
            }
            return $CLI;
        }
    }
    
    public function Actualizar_cat($codigo,$cant)
    {
         if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "UPDATE mercadolibro.libro SET cantidad='$cant' WHERE codigo = '$codigo';";
            $sentencia = mysql_query($sql);
            return $sentencia;
        }
    }
    
     public function inicio()
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "SELECT * FROM libro;";
            $resultado = mysql_query($sql);
            $libro = array();
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = new Libros();
              $CLI->setCodigo($d->codigo);
              $CLI->setNombre($d->nombre);
              $CLI->setPortada($d->portada);
              $CLI->setValor($d->valor);
              $CLI->setAutor($d->autor);
              $CLI->setCategoria($d->categoria);
              $CLI->setEditorial($d->editorial);
              $CLI->setAno($d->anio);
              $CLI->setEdicion($d->edicion);
              $CLI->setDescripcion($d->descripcion);
              $CLI->setCantidad($d->cantidad);
              $libro[$CLI->getCodigo()] = $CLI;
            }
            return $libro;
        }
    }
    
}

?>
