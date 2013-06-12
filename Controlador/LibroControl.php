<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LibroControl
 *
 * @author Gilmar
 */
class LibroControl extends Controlador {
    //put your code here
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
    }
    
    public function libros()
    {
        $this->modelo = new Libros();
        $datos = $this->modelo->libros();
        $this->vista->set('datos',$datos);
        
        return $this->vista->Mostrar();
    }
    
    public function carro()
    {
        session_start();
         
        if(isset($_POST['codigo']))
        {
   
            $new = $_POST['codigo'];
            if ($new)
           {

                    if(!isset($_SESSION['cart']))
                    {	
                           $_SESSION['cart']=array();
                           $_SESSION['clave']=array();
                           $_SESSION['items']=0;
                           $_SESSION['total']='0.00';
                    }

                   if (isset($_SESSION['cart'][$new]))
                       $_SESSION['cart'][$new]++;									
                   else
                   {		
                       $_SESSION['cart'][$new]=1;
                       $_SESSION['clave'][$new]= $_POST['codigo'];	
                   }	         
           }
        }
        $this->modelo = new Clientes();
        $datos = $this->modelo->recibirClientes($_SESSION['cliente.id']);
        $this->vista->set('datos',$datos);
        return $this->vista->Mostrar();
    
    }
    public function detalles($val)
    {
        $this->modelo = new Libros();
        $datos = $this->modelo->detalles($val);
        $this->vista->set('datos',$datos);
        
        return $this->vista->Mostrar();
    }
}

?>
