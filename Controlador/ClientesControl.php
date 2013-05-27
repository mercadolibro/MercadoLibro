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
    
    public function enviarEmail()
    {
        $this->modelo = new Clientes();
        $datos = $this->modelo->Verificar_Email($_POST['txtEmail'],$_POST['txtCedula']);
        if($datos != null)
        {
            $destino = $_POST['txtEmail'];
            $asunto = "Restaurar Contrasena";
            $mensaje = "En el siguiente Link, podra resturar su contrasena de su Cuenta 'Mercado Libro'";
            $desde = "Mercado Libro";
            mail($destino,$asunto, $mensaje, $desde);
            $this->vista->set('titulo',"CORRECTO");
            $this->vista->set('mensaje',"Correo Enviado");   
        }
        else
        {
           $this->vista->set('titulo',"ERROR");
           $this->vista->set('mensaje',"Datos Incorrectos, Verifique los datos Ingresados"); 
        }
        $this->vista->Mostrar();
    }
    
    public function registro()
    {
        return $this->vista->Mostrar();
    }
    
    public function micuenta()
    {
        return $this->vista->Mostrar();
    }
    
    public function inicio()
    {
        $cli = new Clientes();
        $datos = $cli->login($_POST['txtUsuario'],$_POST['txtContrasena']);
        if($datos != null)
        {
            session_start();
            $_SESSION['cliente.id'] = $datos->getCedula();
        }
        else
        {
            $this->vista->set('titulo',"ERROR");
            $this->vista->set('mensaje',"Datos incorrectos");
        }    
        $this->vista->set('datos',$datos);
        return $this->vista->Mostrar();
    }

    public function mensajeGuardado()
    {
        $cli = new Clientes();
        $cli->setCedula($_POST['txtCedula']);
        $cli->setNombre($_POST['txtNombre']);
        $cli->setApellido($_POST['txtApellido']);
        $cli->setDireccion($_POST['txtDireccion']);
        $cli->setTelefono($_POST['txtTelefono']);
        $cli->setContrasena($_POST['txtContrasena']);
        $cli->setCorreo($_POST['txtCorreo']);
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
