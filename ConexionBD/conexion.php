<?php

/**
 * Clase que conecta con la base de datos "MercadoLibro"
 * 
 * @author John de la rosa Bueno  <bueno-2008@hotmail.com>
 * @author Guillermo miranda  <guillesistem93@hotmail.com>
 * @author Gilberto Plata  <plata_gilberto@hotmail.com>
 * @author Gilmar Ocampo Nieves  <giocni@gmail.com>
 * 
 */
class conexion {
    private $conexionBD;
    private $host;
    private $usuario;
    private $pass;
    private $nombreBD;
    
  public function __construct()
  {
      $this->host = "localhost";
      $this->usuario = "root";
      $this->pass = "root";
      $this->nombreBD = "mercadolibro";
  }
  
  public function conectar()
  {
      $this->conexionBD = mysql_connect($this->host, $this->usuario);
      if ($this->conexionBD == false)
      {
          throw new RunTimeException("No se puede conectar con el servidor");
      }
  }
  
  public function seleccionarBD()
  {
        if(mysql_select_db($this->nombreBD,  $this->conexionBD) == false)
        {
            throw new RunTimeException("No se puede conectar con la base de datos");
        }
  }

    public function desconectar()
  {
        return mysql_close($this->conexionBD);
  }
  
}

?>
