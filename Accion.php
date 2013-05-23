<?php

    define('DS', DIRECTORY_SEPARATOR);
    define('HOME', dirname(__FILE__));
    
    require_once './Vistas/Vista.php';
    require_once './ConexionBD/conexion.php';
    require_once './Modelos/Clientes.php';
    require_once './Modelos/Libros.php';
    require_once './Controlador/Controlador.php';
    require_once './Controlador/ClientesControl.php';
 
    
    $controlador = "";
    $accion = "";
    $consulta = null;
    
    if(isset($_GET['controlador']))
    {
        $controlador = $_GET['controlador'];
    }
    
    if(isset($_GET['consulta']))
    {
        $consulta = $_GET['consulta'];
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
