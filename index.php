
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/371578037.ico" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bienvenido a MercadoLibro</title>
<style type="text/css">
#form1 label {
	color: #FFF;
	font-weight: bold;
	font-family: "Comic Sans MS", cursive;
}
#form1 {
	color: #FFF;
	font-weight: bold;
}
#form1 #form1 {
	font-family: "Comic Sans MS", cursive;
}
a {
	font-size: medium;
}
body {
	background-image: url(images/fondo.jpg);
}
.imagen {
	background-image: url(../../../Documents/Sitio%20sin%20nombre%202/logo.png);
}
</style>
<script>
    function Validar()
    {
        if(form1.txtUsuario.value == "" ||
           form1.txtContrasena.value == "")
            {
                alert("Campos vacios, Verifique los datos");
            }
            else
            {
                form1.submit();
            }
    }
    </script>
</head>

<body>
<p><a href="./Accion.php?controlador=Clientes&accion=registro"><img src="images/registro.jpg" width="205" height="46" alt="registro" /></a></p>
<table width="117%" height="331" border="0">
  <tr>
    <td width="62%" height="327"><p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><img src="images/marca.png" width="575" height="130" /></p></td>
    <td width="38%"><div align="left"><img src="images/logo.png" width="340" height="316" /></div></td>
  </tr>
</table>
<form id="form1" name="form1" method="post" action="./Accion.php?controlador=Clientes&accion=inicio">
  <p align="center">
    <label for="Nombre">Usuario (identificacion):</label>
    <input name="txtUsuario" type="text" id="Nombre" value="" size="40" /> 
    <span>Contraseña: </span>
    <input name="txtContrasena" type="password" id="Nombre2" value="" size="24" /> 
    <input name="entrar" value="Entrar" type="button" onclick="Validar()"  /> </p>
  <p align="center"><a href="./accion.php?controlador=Clientes&accion=micuenta">¿Ha olvidado su contraseña?</a></p>
</form>
</body>
</html>