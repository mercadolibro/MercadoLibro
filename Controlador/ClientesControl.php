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
        return $this->vista->Mostrar();
    }
    
    public function registro()
    {
        return $this->vista->Mostrar();
    }
    
    public function login()
    {
        $cli = new Clientes();
        $datos = $cli->login($_POST['txtUsuario'],$_POST['txtContrasena']);
        $mensaje;
        $titulo;
        if($datos == null)
        {
            $mensaje = "No se pudo Iniciar Sesion, Verifique si el Usuario 'Existe' o si los datos ingresados son Correctos";
            $titulo = "ERROR";
        }
        else
        {
            $mensaje = "Inicio sesion Correctamente";
            $titulo = "PERFECTO";
        }
        $this->vista->set('mensaje',$mensaje);
        $this->vista->set('titulo',$titulo);
        return $this->vista->Mostrar();
    }

    public function mensaje()
    {
        $cli = new Clientes();
        $cli->setCedula($_POST['txtCedula']);
        $cli->setNombre($_POST['txtNombre']);
        $cli->setApellido($_POST['txtApellido']);
        $cli->setDireccion($_POST['txtDireccion']);
        $cli->setTelefono($_POST['txtTelefono']);
        $cli->setContrasena($_POST['txtContrasena']);
        $estado = $cli->registrar_cliente();
        $mensaje;
        $titulo;
        if($estado == false)
        {
            $mensaje = "No se pudo Guardar los datos del Cliente";
            $titulo = "ERROR AL GURDAR";
        }
        else
        {
            $mensaje = "Guardado Correctamente";
            $titulo = "PERFECTO";
        }
        $this->vista->set('mensaje',$mensaje);
        $this->vista->set('titulo',$titulo);
        return $this->vista->Mostrar();
    }
    
    public function volver()
    {
        return $this->vista->Mostrar();
    }
    
    public function lista()
    {
        $this->modelo = new Clientes();
        $datos = $this->modelo->recibirClientes();
        $this->vista->setDatos($datos);
        return $this->vista->Mostrar();
    }
    
}

?>
