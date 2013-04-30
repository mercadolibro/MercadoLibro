<?php
    $datos = Vista::getDatos();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title>Practica1</title>
</head>
<body>
    <h1> LISTA DE TODOS LOS CLIENTES </h1>
<form style="height: 442px;" action="" name="principal">
  <div style="text-align: center;"></div>
  <table style="text-align: left; width: 100%;" border="1"
 cellpadding="2" cellspacing="2">
    <thead>
      <tr>
        <td style="text-align: center; width: 80px;">Cedula</td>
        <td style="text-align: center; width: 130px;">Nombre</td>
        <td style="text-align: center; width: 130px;">Apellido</td>
        <td style="text-align: center; width: 130px;">Direccion</td>
        <td style="text-align: center; width: 80px;">Telefono</td>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $item)
            { ?>
                <tr>
                    <td><?php echo $item->getCedula()?></td>
                    <td><?php echo $item->getNombre();?></td>
                    <td><?php echo $item->getApellido();?></td>
                    <td><?php echo $item->getDireccion();?></td>
                    <td><?php echo $item->getTelefono();?></td>
                </tr>
        <?php } ?>
    </tbody>
  </table>
  <br>
  <br>
  <div style="text-align: left; height: 24px;"><br>
  </div>
</form>
</body>
</html>