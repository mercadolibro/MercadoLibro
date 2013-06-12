<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compra
 *
 * @author Gilmar
 */
class Compra {
    
    private $BD;
    
    public function __construct() {
        $this->BD = new conexion();
    }
    
    private $cedula;
    private $total;
    private $codigo;
    private $valor;
    private $cantidad;
    
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }
    
    public function getCedula()
    {
        return $this->cedula;
    }
    
    public function setTotal($total)
    {
        $this->total = $total;
    }
    
    public function getTotal()
    {
        return $this->total;
    }
    
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    public function getCodigo()
    {
        return $this->codigo;
    }
    
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor()
    {
        return $this->valor;
    }
    
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    
    public function getCantidad()
    {
        return $this->cantidad;
    }
    
    private function parametros1()
    {
        $parametros = array(
            1=> $this->getCedula(),
            2=> $this->getTotal()    
        );
        return $parametros;
    }
    
    public function max()
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "select max(n_factura) as maximo from mercadolibro.super_factura;";
            $resultado = mysql_query($sql);
            $CLI;
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = $d->maximo;
            }
            return $CLI;
        }
    }
    
    public function valor($clave)
    {
        if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $sql = "select valor from mercadolibro.libro where codigo = '$clave';";
            $resultado = mysql_query($sql);
            $CLI;
            while($d = mysql_fetch_object($resultado))
            {
              $CLI = $d->valor;
            }
            return $CLI;
        }
    }
    
    
    public function super_factura()
    {
         if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $parametros = $this->parametros1();
            $sql = "insert into mercadolibro.super_factura values ('','$parametros[1]',$parametros[2],NOW());";
            $sentencia = mysql_query($sql);
            return $sentencia;
        }
    }
    
    public function factura($id_factura,$cod_libro,$valor,$cantidad)
    {
         if($this->BD->conectar() == false || $this->BD->seleccionarBD() == false)
        {
            throw new RunTimeException("No se puede conectar con el servidor");
        }
        else
        {
            $parametros = $this->parametros1();
            $sql = "insert into mercadolibro.factura values ($id_factura,'$cod_libro',$valor,$cantidad);";
            $sentencia = mysql_query($sql);
            return $sentencia;
        }
    }
    
    
}

?>
