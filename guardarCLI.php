<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('HOME', dirname(__FILE__));

    include './ConexionBD/conexion.php';
    include './Modelos/Clientes.php';
    include './Controlador/Controlador.php';
    include './Controlador/ClientesControl.php';
    include './Vistas/Vista.php';

    $modelo = "Clientes";
    $accion = "volver";
    $carga = new ClientesControl($modelo, $accion);
    if($carga->guardar())
    {
        $carga->volver();
    }
?>
