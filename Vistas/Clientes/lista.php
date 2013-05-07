<?php
	$datos = Vista::getDatos();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css"> 
<!-- 
body  {
	font: 100% Verdana, Arial, Helvetica, sans-serif;
	background: #666666;
	margin: 0; /* es recomendable ajustar a cero el margen y el relleno del elemento body para lograr la compatibilidad con la configuración predeterminada de los diversos navegadores */
	padding: 0;
	text-align: center; /* esto centra el contenedor en los navegadores IE 5*. El texto se ajusta posteriormente con el valor predeterminado de alineación a la izquierda en el selector #container */
	color: #000000;
}
.thrColLiqHdr #container { 
	width: 80%;  /* esto creará un contenedor con el 80% del ancho del navegador */
	background: #FFFFFF;
	margin: 0 auto; /* los márgenes automáticos (conjuntamente con un ancho) centran la página */
	border: 1px solid #000000;
	text-align: left; /* esto anula text-align: center en el elemento body. */
} 
.thrColLiqHdr #header { 
	background: #DDDDDD; 
	padding: 0 10px;  /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen bajo él. Si se utiliza una imagen en el #header en lugar de texto, es posible que le interese quitar el relleno. */
} 
.thrColLiqHdr #header h1 {
	margin: 0; /* el ajuste en cero del margen del último elemento del div de #header evita la contracción del margen (un espacio inexplicable entre divs). Si el div tiene un borde alrededor, esto no es necesario, ya que también evita la contracción del margen */
	padding: 10px 0; /* el uso de relleno en lugar de margen le permitirá mantener el elemento alejado de los bordes del div */
}

/* Sugerencias para barras laterales:
1. Dado que está trabajando en porcentajes, es conveniente no utilizar relleno lateral en las barras laterales. Se añadirá al ancho en el caso de navegadores que cumplen los estándares, creando un ancho real desconocido. 
2. El espacio entre el lado del div y los elementos que contiene puede crearse colocando un margen izquierdo y derecho en dichos elementos, como se observa en la regla ".thrColLiqHdr #sidebar1 p".
3. Dado que Explorer calcula los anchos después de mostrarse el elemento padre, puede que ocasionalmente encuentre errores inexplicables con columnas basadas en porcentajes. Si necesita resultados más predecibles, puede optar por cambiar a columnas con tamaño en píxeles.
*/
.thrColLiqHdr #sidebar1 {
	float: left; /* este elemento debe preceder en el orden de origen a cualquier elemento que desee situar junto a */
	width: 22%; /* dado que este elemento es flotante, debe asignarse un ancho */
	background: #EBEBEB; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
	padding: 15px 0; /* el relleno superior e inferior crea un espacio visual dentro de este div  */
}
.thrColLiqHdr #sidebar2 {
	float: right; /* este elemento debe preceder en el orden de origen a cualquier elemento que desee situar junto a */
	width: 23%; /* dado que este elemento es flotante, debe asignarse un ancho */
	background: #EBEBEB; /* el color de fondo se mostrará a lo largo de todo el contenido de la columna, pero no más allá */
	padding: 15px 0; /* el relleno superior e inferior crea un espacio visual dentro de este div */
}
.thrColLiqHdr #sidebar1 p, .thrColLiqHdr #sidebar1 h3, .thrColLiqHdr #sidebar2 p, .thrColLiqHdr #sidebar2 h3 {
	margin-left: 10px; /* deben asignarse los márgenes izquierdo y derecho de cada elemento que vaya a colocarse en las columnas laterales */
	margin-right: 10px;
}

/* Sugerencias para mainContent:
1. El espacio entre el mainContent y las barras laterales se crea con los márgenes izquierdo y derecho del div mainContent.
2. para evitar la caída de un elemento flotante con una resolución mínima admitida de 800 x 600, los elementos situados dentro del div mainContent deben tener un tamaño de 300px o inferior (incluidas las imágenes).
3. en el siguiente comentario condicional de Internet Explorer, la propiedad zoom se utiliza para asignar a mainContent "hasLayout." Esto evita diversos problemas específicos de IE.
*/
.thrColLiqHdr #mainContent { 
	margin: 0 24% 0 23.5%; /* los márgenes derecho e izquierdo de este elemento div crean las dos columnas externas de los lados de la página. Con independencia de la cantidad de contenido que incluyan los divs de las barras laterales, permanecerá el espacio de la columna. Puede quitar este margen si desea que el texto del div #mainContent llene el espacio de las barras laterales cuando termine el contenido de cada una de ellas. */
}

.thrColLiqHdr #footer { 
	padding: 0 10px; /* este relleno coincide con la alineación izquierda de los elementos de los divs que aparecen por encima de él. */
	background:#DDDDDD;
} 
.thrColLiqHdr #footer p {
	margin: 0; /* el ajuste en cero de los márgenes del primer elemento del pie evitará que puedan contraerse los márgenes (un espacio entre divs) */
	padding: 10px 0; /* el relleno de este elemento creará espacio, de la misma forma que lo haría el margen, sin el problema de la contracción de márgenes */
}

/* Varias clases diversas para su reutilización */
.fltrt { /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase debe colocarse en un elemento div o break y debe ser el último elemento antes del cierre de un contenedor que deba incluir completamente a sus elementos flotantes hijos */
	clear:both;
    height:0;
    font-size: 1px;
    line-height: 0px;
}
--> 
</style><!--[if IE]>
<style type="text/css"> 
/* coloque las reparaciones de css para todas las versiones de IE en este comentario condicional */
.thrColLiqHdr #sidebar2, .thrColLiqHdr #sidebar1 { padding-top: 30px; }
.thrColLiqHdr #mainContent { zoom: 1; padding-top: 15px; }
/* la propiedad zoom propia que se indica más arriba proporciona a IE el hasLayout que necesita para evitar diversos errores */
</style>
<![endif]--></head>

<body class="thrColLiqHdr">

<div id="container">
 <div id="header">
    <h1 align="center">Lista de los Clientes</h1>
  <!-- end #header --></div>
 <p>
   <!-- Este elemento de eliminación siempre debe ir inmediatamente después del div #mainContent para forzar al div #container a que contenga todos los elementos flotantes hijos --></p>
 <form id="form1" name="form1" method="post" action="">
   <table width="1021" border="1">
    <thead>
     <tr>
       <th width="156" scope="row"><div align="center"><strong>Cedula</strong></div></th>
       <td width="227"><div align="center"><strong>Nombre</strong></div></td>
       <td width="206"><div align="center"><strong>Apellido</strong></div></td>
       <td width="208"><div align="center"><strong>Direccion</strong></div></td>
       <td width="208"><div align="center"><strong>Telefono</strong></div></td>
     </tr>
	 </thead>
	 <tbody>
          <?php foreach ($datos as $item) { ?>
                <tr>
                    <td><?php echo $item->getCedula();?></td>
                    <td><?php echo $item->getNombre();?></td>
                    <td><?php echo $item->getApellido();?></td>
                    <td><?php echo $item->getDireccion();?></td>
                    <td><?php echo $item->getTelefono();?></td>
                </tr>
         <?php } ?>
      </tbody>
   </table>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
 </form>
<p>&nbsp;</p>
 <p><br class="clearfloat" />
 </p>
 <div id="footer">
    <p>Gilmar Ocampo Nieves</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>