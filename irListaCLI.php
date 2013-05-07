<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('HOME', dirname(__FILE__));
    
    include './ConexionBD/Conexion.php';
    include './Modelos/Clientes.php';
    include './Controlador/Controlador.php';
    include './Controlador/ClientesControl.php';
    include './Vistas/Vista.php';
    
    $modelo = "Clientes";
    $accion = "lista";
    $carga = new ClientesControl($modelo, $accion);
    $carga->lista();
?>
