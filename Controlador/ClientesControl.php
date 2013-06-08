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
    private $con1;


    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
    }
    
    public function modiContra($cedula)
    {
        $this->modelo = new Clientes();
        $estado = $this->modelo->actualizar_contrasena($_POST['txtContrasena'],$cedula[0]);
        $this->vista->set('estado',$estado);
        return $this->vista->Mostrar();
    }
    
    public function modificar($cedula)
    {
        $this->modelo = new Clientes();
        //$this->modelo->setCedula($_POST['txtCedula']);
        $this->modelo->setNombre($_POST['txtNombre']);
        $this->modelo->setApellido($_POST['txtApellido']);
        $this->modelo->setDireccion($_POST['txtDireccion']);
        $this->modelo->setTelefono($_POST['txtTelefono']);
        $this->modelo->setCorreo($_POST['txtCorreo']);
        $this->modelo->setCuenta($_POST['txtCuenta']);
        $this->modelo->setFondos($_POST['txtFondos']);
        $estado = $this->modelo->modificar($cedula[0]);
        $this->vista->set('estado',$estado);
        return $this->vista->Mostrar();
    }
    
    public function contra()
    {
        return $this->vista->Mostrar();
    }
    
    private function email(Clientes $Cli)
    {
            $msg1 = "Para cambiar su clave, haga clic en el siguiente enlace:<br>";
            //TODO: Mejor URL Para recuperar clave, por ejemplo, 
            //md5 o sha combinando usuario+mail+salt, etc.
            $msg1 .= "http://localhost/PHP/MercadoLibro/Accion.php?controlador=Clientes&accion=contra&consulta=" . $Cli->getCedula();
            $msg1 .= "<br>El administrador";

            //TODO: se puede encapsular el envio de correos en una clase, para 
            //personalizar mas facil los datos configuracion y las opciones de envio.
            $mailer = new PHPMailer();
            $mailer->SetFrom("mercadolibro123@gmail.com", "MERCADO LIBRO");
            $direccion = $Cli->getCorreo();
            $nombre = $Cli->getNombre() . " " . $Cli->getApellido();
            $mailer->AddAddress($direccion, $nombre);
            $mailer->CharSet = "UTF-8";
            $mailer->SMTPDebug = false;
            $mailer->Subject = "Cambio de contraseña en la aplicación Mercado Libro";
            $mailer->MsgHTML($msg1);
            $mailer->IsSMTP();
            $mailer->Host = "smtp.gmail.com";
            $mailer->Port = 587;
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = "tls";
            $mailer->Username = "mercadolibro123@gmail.com";
            $mailer->Password = "mercadolibro123456";
            if (!$mailer->Send()) {
                $this->vista->set('titulo',"ERROR");
                $this->vista->set("mensaje", "Error al enviar correo! (" . $mailer->ErrorInfo . ")");
                return $this->vista->Mostrar();
            } else {
                $this->vista->set('titulo',"TODO BIEN");
                $this->vista->set('mensaje', 'Se ha enviado la informaci&oacute;n de acceso a su correo.');
                return $this->vista->Mostrar();
            }
    }

        public function enviarEmail()
    {
        $this->modelo = new Clientes();
        $datos = $this->modelo->Verificar_Email($_POST['txtEmail'],$_POST['txtCedula']);
        if($datos != null)
        {  
            $this->email($datos);   
        }
        else
        {
           $this->vista->set('titulo',"ERROR");
           $this->vista->set('mensaje',"Datos Incorrectos, Verifique los datos Ingresados"); 
           $this->vista->Mostrar();
        }
        
    }
    
    public function registro()
    {
        return $this->vista->Mostrar();
    }
    
    public function micuenta()
    {
        return $this->vista->Mostrar();
    }
    
    public function inicio($con)
    {
        session_start();
        
        if(isset($_POST['txtContrasena']) && (isset($_POST['txtUsuario'])))
        {
            $con[1] = sha1($_POST['txtContrasena']);
            $con[0] = $_POST['txtUsuario'];
        }
        else
        {
            if(isset($_SESSION['cliente.id']))
            {
                $a = new Clientes();
                $b = $a->Entrar($_SESSION['cliente.id']);
                $con[0] = $_SESSION['cliente.id'];
                $con[1] = $b->getContrasena();
            }
        }
        
        $cli = new Clientes();
        $datos = $cli->login($con[0],$con[1]);
        if($datos != null)
        {
            //session_start();
            $_SESSION['cliente.id'] = $datos->getCedula();
        }
        else
        {
            $this->vista->set('titulo',"ERROR");
            $this->vista->set('mensaje',"Datos incorrectos");
            $this->vista->set('estado',false);
            return $this->vista->Mostrar();
        }
        $this->vista->set('estado',true);
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
        $cli->setCuenta($_POST['txtCuenta']);
        $cli->setFondos($_POST['txtFondos']);
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
    
    public function perfil($valor)
    {
        $this->modelo = new Clientes();
        $datos = $this->modelo->recibirClientes($valor[0]);
        $this->vista->set('datos',$datos);
        return $this->vista->Mostrar();
    }
    
}

?>
