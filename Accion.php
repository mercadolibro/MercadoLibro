<?php

    define('DS', DIRECTORY_SEPARATOR);
    define('HOME', dirname(__FILE__));
    
    require_once './Vistas/Vista.php';
    require_once './ConexionBD/conexion.php';
    require_once './Modelos/Clientes.php';
    require_once './Modelos/Libros.php';
    require_once './Modelos/Compra.php';
    require_once './Controlador/Controlador.php';
    require_once './Controlador/ClientesControl.php';
    require_once './Controlador/LibroControl.php';
    require_once './Controlador/CompraControl.php';
    require_once './utiles/class.phpmailer.php';
    require_once './utiles/class.pop3.php';
    require_once './utiles/class.smtp.php';
 
    
    $controlador = "";
    $accion = "";
    $consulta = null;
    
    if(isset($_GET['controlador']))
    {
        $controlador = $_GET['controlador'];
    }
    
    if(isset($_GET['consulta']))
    {
        $parametros = array();
        $parametros = explode("/", $_GET['consulta']);
        $consulta = $parametros;
    }
    $modelo = $controlador;
    $accion = $_GET['accion'];
    $controlador .='Control';
    $carga = new $controlador($modelo, $accion);
    
    if(method_exists($carga, $accion))
    {
        $carga->$accion($consulta);
    }
    else
    {
        die('Metodo no valido. por favor verificar la URL');
    }
?>
