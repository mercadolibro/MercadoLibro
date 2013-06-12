<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>MercadoLibro Libros</title>
<!-- TemplateEndEditable -->
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image: url(images/fondo1.jpg);
}
</style>
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>
<body>
<div id="wrap">

  <div class="header">
       		<div class="logo"><a href="./Accion.php?controlador=Clientes&accion=inicio"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="./Accion.php?controlador=Clientes&accion=inicio">Inicio</a></li>
            <li></li>
            <li class="selected"><a>Libros</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=carro">Carro de compras</a></li>
             <li><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php session_start(); echo $_SESSION['cliente.id'] ?>">Mi Cuenta</a></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div>
       <!-- TemplateBeginEditable name="EditRegion1" -->
       <div class="asdfg">
         <!--end of left content-->
         <!--end of right content-->
         <div class="clear">
           <p>&nbsp;</p>
           <div class="title"><span class="title_icon"></span> Lista de Libros</div>
           <p>&nbsp;</p>
           <div align="center">
             <p>&nbsp;</p>
             <table width="200" border="0" id="tabla">
               <tr>
                 <td>&nbsp;</td>
                 <?php foreach ($datos as $item) { ?>
                
                    <td id="portada"><a href="./Accion.php?controlador=Libro&accion=detalles&consulta=<?php echo $item->getCodigo();?>"><img style="border-radius:5px;" src="<?php echo $item->getPortada(); ?>"  alt="" width="169" height="181" /></a></td>
                
                 <?php } ?>
                 
                 <td>&nbsp;</td>
               </tr>
             </table>
           </div>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
         </div>
       </div>
       <!-- TemplateEndEditable -->
       <!--end of center content-->
       
              
       <div class="footer">
         <div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> 
         <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
  </div>
    

</div>

</body>
</html>