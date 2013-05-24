
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css"> 
<!-- 
body  {
	background: #666666;
	margin: 0; /* es recomendable ajustar a cero el margen y el relleno del elemento body para lograr la compatibilidad con la configuración predeterminada de los diversos navegadores */
	padding: 0;
	text-align: center; /* esto centra el contenedor en los navegadores IE 5*. El texto se ajusta posteriormente con el valor predeterminado de alineación a la izquierda en el selector #container */
	color: #666;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 100%;
	height: auto;
	width: auto;
	border-top-color: #666;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
}

/* Sugerencias para diseños elásticos 
1. Dado que el tamaño global de los diseños elásticos se basa en el tamaño de fuente predeterminado del usuario, resultan algo más impredecibles. Si se utilizan correctamente, también son más accesibles para aquellas personas que necesitan tamaños de fuentes más grandes, dado que la longitud de línea mantiene la proporcionalidad.
2. La asignación de tamaño a los divs en este diseño se basa en el 100% del tamaño de fuente en el elemento body. Si reduce el tamaño global del texto empleando font-size: 80% en el elemento body o el #container, recuerde que todo el diseño reducirá su tamaño proporcionalmente. Es posible que le interese aumentar los anchos de los diversos divs para compensar este efecto.
3. Si la asignación de tamaño de fuente se modifica de forma distinta en cada div en lugar de hacerse en el diseño global (es decir: a #sidebar1 se le asigna un 70% de tamaño de fuente y a #mainContent se le asigna un 85% de tamaño de fuente), ello hará que se modifique proporcionalmente el tamaño global de cada uno de los divs. Si lo desea, puede realizar el ajuste basándose en la asignación de tamaño de fuente final.
*/
.thrColElsHdr #container { 
	width: 46em;  /* este ancho creará un contenedor que cabrá en una ventana de navegador 800px si el texto se deja con los tamaños de fuente predeterminados del navegador */
	background: #FFFFFF;
	margin: 0 auto; /* los márgenes automáticos (conjuntamente con un ancho) centran la página */
	border: 1px solid #000000;
	text-align: left; /* esto anula text-align: center en el elemento body. */
} 
.thrColElsHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen bajo él. Si se utiliza una imagen en el #header en lugar de texto, es posible que le interese quitar el relleno. */
} 
.thrColElsHdr #header h1 {
	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
	padding: 10px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
}

/* Sugerencias para sidebar1:
1. Tenga en cuenta que, si establece un valor de tamaño de fuente en este div, el ancho global del div se ajustará en función de éste.
2. Dado que está trabajando en ems, es conveniente no utilizar relleno en la barra lateral propiamente dicha. Se añadirá al ancho en el caso de navegadores que cumplen los estándares, creando un ancho real desconocido. 
3. El espacio entre el lado del div y los elementos que contiene puede crearse colocando un margen izquierdo y derecho en dichos elementos, como se observa en la regla ".thrColElsHdr #sidebar1 p".
*/
.thrColElsHdr #sidebar1 {
	float: left; 
	width: 11em; /* dado que este elemento es flotante, debe asignarse un ancho */
	background: #EBEBEB; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
	padding: 15px 0; /* el relleno superior e inferior crea un espacio visual dentro de este div */
}
.thrColElsHdr #sidebar2 {
	float: right; 
	width: 11em; /* dado que este elemento es flotante, debe asignarse un ancho */
	background: #EBEBEB; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
	padding: 15px 0; /* el relleno superior e inferior crea un espacio visual dentro de este div */
}
.thrColElsHdr #sidebar1 h3, .thrColElsHdr #sidebar1 p, .thrColElsHdr #sidebar2 p, .thrColElsHdr #sidebar2 h3 {
	margin-left: 10px; /* deben asignarse los márgenes izquierdo y derecho de cada elemento que vaya a colocarse en las columnas laterales */
	margin-right: 10px;
}

/* Sugerencias para mainContent:
1. Si asigna a este div #mainContent un valor de tamaño de fuente distinto del que tiene el div #sidebar1, los márgenes del div #mainContent se basarán en su tamaño de fuente y el ancho del div #sidebar1 se basará en su tamaño de fuente. Puede que le interese ajustar los valores de estos divs.
2. El espacio entre el mainContent y sidebar1 se crea con el margen izquierdo del div mainContent.  Con independencia de la cantidad de contenido que incluya el div sidebar1, permanecerá el espacio de la columna. Puede quitar el margen izquierdo si desea que el texto del div #mainContent llene el espacio de #sidebar1 cuando termine el contenido de #sidebar1.
3. Para evitar la caída de un elemento flotante, puede que tenga que realizar pruebas con el fin de determinar el tamaño máximo aproximado de la imagen/el elemento, ya que este diseño se basa en el tamaño de fuente del usuario combinado con los valores que usted establezca. Sin embargo, si el usuario tiene configurado un tamaño de fuente inferior al normal, habrá menos espacio disponible en el div #mainContent del que observará al realizar la prueba.
4. En el siguiente comentario condicional de Internet Explorer, la propiedad zoom se utiliza para asignar a mainContent "hasLayout." Esto evita que se produzcan diversos problemas específicos de IE.
*/
.thrColElsHdr #mainContent {
 	margin: 0 12em 0 12em; /* el margen derecho puede asignarse en ems o píxeles. Éste crea el espacio a lo largo de la parte derecha de la página. */
} 
.thrColElsHdr #footer { 
	padding: 0 10px; /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen por encima de él. */
	background:#DDDDDD;
} 
.thrColElsHdr #footer p {
	margin: 0; /* el ajuste en cero de los márgenes del primer elemento del pie evitará que puedan contraerse los márgenes (un espacio entre divs) */
	padding: 10px 0; /* el relleno de este elemento creará espacio, de la misma forma que lo haría el margen, sin el problema de la contracción de márgenes */
}

/* Varias clases diversas para su reutilización */
.fltrt { /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que incluya completamente a un elemento flotante */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
#apDiv1 {
	position:absolute;
	left:157px;
	top:122px;
	width:119px;
	height:188px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:300px;
	top:160px;
	width:176px;
	height:249px;
	z-index:1;
	border-top-color: #666;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
}
#apDiv3 {
	position:absolute;
	left:613px;
	top:126px;
	width:380px;
	height:68px;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	left:540px;
	top:204px;
	width:524px;
	height:233px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:275px;
	top:193px;
	width:244px;
	height:251px;
	z-index:4;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* coloque las reparaciones de css para todas las versiones de IE en este comentario condicional */
.thrColElsHdr #sidebar1, .thrColElsHdr #sidebar2 { padding-top: 30px; }
.thrColElsHdr #mainContent { zoom: 1; padding-top: 15px; }
/* la propiedad zoom propia que se indica más arriba proporciona a IE el hasLayout que necesita para evitar diversos errores */
</style>
<![endif]--></head>
<body class="thrColElsHdr">
<div id="apDiv3">
  <div align="left">Se guardara en la base de datos, los datos que son suministrados para cada Cliente.</div>
</div>
<div id="apDiv4">
  <div align="left"><img src="imagenes/img1.jpg" width="452" height="238" /></div>
</div>
<form name="registrar" method="post" action="./Accion.php?controlador=Clientes&accion=mensaje">    
<div id="apDiv5">
  <p>
    <label>Nombre:
      <input type="text" name="txtNombre" />
    </label>
  </p>
  <p>
    <label>Apellido:
      <input type="text" name="txtApellido"/>
    </label>
  </p>
  <p>
    <label>Cedula:
      <input type="text" name="txtCedula" />
    </label> (sera el Usuario para Entrar)
  </p>
  <p>
    <label>Direccion:
      <input type="text" name="txtDireccion" />
    </label>
  </p>
    <p>
    <label>Telefono:
      <input type="text" name="txtTelefono" />
    </label>
  </p>
        <p>
    <label>Contrasena:
      <input type="text" name="txtContrasena" />
    </label>
  </p>
    <label>
      <input type="submit" name="guardar" id="guardar" value="Enviar" />
    </label>
</div>
</form>
<div id="container">
  <div id="header">
    <h1 align="center">Agregar Clientes</h1>
  <!-- end #header --></div>
  <p align="center">
    <!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos -->
  Formulario de Registro:  </p>
  <p align="center">&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </form>
  <div id="footer">
    <p>Gilmar Ocampo Nieves</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
