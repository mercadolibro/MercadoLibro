<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompraControl
 *
 * @author Gilmar
 */
class CompraControl extends Controlador {
    //put your code here
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
    }
    
     public function compra($valores)
    {
        $this->modelo = new Compra();
        $this->modelo->setCedula($valores[0]);
        $this->modelo->setTotal($valores[1]);
        
        $cli = new Clientes();
        $fondoAct = $cli->Fondo($valores[0]);
        $a = $fondoAct - $valores[1];
        if($fondoAct < $valores[1])
        {
            $this->vista->set('mensaje',"Error al Realizar la Compra,Sus fondos son insuficientes, Por favor Recargue su tarjeta.");
            $this->vista->set('titulo',"-- Error --");
            $this->vista->set('link',"./Accion.php?controlador=Clientes&accion=inicio");
        }
        else
        {
            $estado = $this->modelo->super_factura();
            if($estado == false)
            {
                $this->vista->set('mensaje',"Error al Guardar,ha ocurrido un error durante el proceso de la compra, por favor Intente mas tarde.");
                $this->vista->set('titulo',"-- Error --");
                $this->vista->set('link',"./Accion.php?controlador=Libro&accion=carro");
            }
            else
            {
                session_start();
                $max = $this->modelo->max();
                $Li = new Libros();
                
                foreach ($_SESSION['clave'] as $item)
                {
                    $canti_act = $Li->cantidad($item);
                    $cant_new = $canti_act - $_SESSION['cart'][$item];
                    if($cant_new <= 0)
                    {
                        $this->vista->set('mensaje',"Error al Guardar,La cantidad de libros que desea Comprar, es mayor a la del catalogo de Libros, por Favor Verifique ese dato.");
                        $this->vista->set('titulo',"-- Error --");
                        $this->vista->set('link',"./Accion.php?controlador=Libro&accion=carro");
                        return $this->vista->Mostrar();
                    }
                }
                
                foreach ($_SESSION['clave'] as $item)
                {
                    $canti_act = $Li->cantidad($item);
                    $cant_new = $canti_act - $_SESSION['cart'][$item];
                        $valor = $this->modelo->valor($item);
                        $est = $this->modelo->factura($max,$item,$valor,$_SESSION['cart'][$item]);
                        $Li->Actualizar_cat($item, $cant_new);
                        
                }
                if($est == false)
                {
                    $this->vista->set('mensaje',"Error al Guardar,ha ocurrido un error durante el proceso de la compra, por favor Intente mas tarde.");
                    $this->vista->set('titulo',"-- Error --");
                    $this->vista->set('link',"./Accion.php?controlador=Libro&accion=carro");
                }
                else
                {
                    $cli->actualizar_fondos($valores[0], $a);
                    $this->vista->set('mensaje',"La compra se ha realizado correctamente, Gracias por Comprar en Mercado-Libro.");
                    $this->vista->set('titulo',"-- Felicitaciones --");
                    $this->vista->set('link',"./Accion.php?controlador=Clientes&accion=inicio");
                
                    
                    unset($_SESSION["clave"]); 
                    unset($_SESSION["cart"]);
                    unset($_SESSION["items"]);
                    unset($_SESSION["total"]);
                    //session_destroy();
                }
            }
        }
        
        
        return $this->vista->Mostrar();
    }
    
}

?>
