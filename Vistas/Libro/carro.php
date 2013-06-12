<?php
if(isset($_SESSION['cart']))
{
if ($_SESSION['cart']&&array_count_values($_SESSION['cart']))
{
    $obj = new Libros();
    $total = 0;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MercadoLibro Carro de compras</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image: url(images/fondo1.jpg);
}
</style>
</head>
<body>
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="./Accion.php?controlador=Clientes&accion=inicio"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="./Accion.php?controlador=Clientes&accion=inicio">Inicio</a></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=libros">Libros</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="selected"><a>Carro de compras</a></li>
                  <li><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php echo $_SESSION['cliente.id'] ?>">Mi cuenta</a></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Mi carro</div>
        
        	<div class="feat_prod_box_details">
            
            <table class="cart_table">
            	<tr class="cart_title">
                	<td width="87">Portada</td>
                	<td width="90">Nombre</td>
                    <td width="90">Precio $</td>
                    <td width="65">Cantidad</td>
                    <td width="84">Total</td>               
                </tr>
                <?php

                    foreach ($_SESSION['clave'] as $isbn)//Empieza Bucle ForEach
                    {
                          //Para Cada Libro en el Carro obtenemos su detalle.
                      
                      $libro = $obj->deta($isbn);	
                ?>
                
            	<tr>
                    <td><a href=""><img src="<?php echo $libro->getPortada(); ?>" alt="" width="25" height="35" title="" border="0" class="cart_thumb" /></a></td>
                    <td><?php echo $libro->getNombre(); ?></td>
                    <td><?php echo $libro->getValor(); ?></td>
                    <td><?php echo $_SESSION['cart'][$libro->getCodigo()]; ?></td>
                    <td><?php echo $_SESSION['cart'][$libro->getCodigo()] * $libro->getValor(); ?></td>
                    <?php $total = $total + $_SESSION['cart'][$libro->getCodigo()] * $libro->getValor(); ?>
                </tr>         
                
                
            	<?php
                    }//Termina Bucle ForEach
                ?>

                <tr>
                <td colspan="4" class="cart_total"><span class="red">TOTAL COMPRA:</span></td>
                <td> <?php echo $total ?></td>                
                </tr>  
                    
            
            </table>
            <a href="./Accion.php?controlador=Libro&accion=libros" class="continue">&lt;Seguir</a>
            <a href="./Accion.php?controlador=Compra&accion=compra&consulta=<?php echo $datos->getCedula();  ?>/<?php echo $total ?>" class="checkout">Comprar &gt;</a>
            

             
            
            </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php echo $datos->getCedula();?>"><?php echo $datos->getNombre(); ?></a></div>
            <a href="./Accion.php?controlador=Clientes&accion=salir" class="view_cart">Salir</a></div>
          <p>&nbsp;</p>
          
             <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>MercadoLibro</div> 
             <div class="about">
             <p>
             <img src="images/about.gif" alt="" title="" class="right" />MercadoLibro tiene como objetivo, satisfacer a ti por ser nuestro clientes a partir de la operaci&oacute;n de compras online.</p>
             
             </div>
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
       </div>
    

</div>

</body>
</html>
<?php
}
}
else
{ ?>
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
            <li><a href="./Accion.php?controlador=Clientes&accion=inicio">Volver</a></li>
            <li></li>
            <li class="selected"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div>
       <!-- TemplateBeginEditable name="EditRegion1" -->
       <div class="asdfg">
         <!--end of left content-->
         <!--end of right content-->
         <div class="clear">
 
           <div align="center">
             <p>&nbsp;</p>
             <table width="391" height="15" border="0">
               <tr>
                 <td width="385"><div align="center" class="Titulo"><h1>!! ATENCION !!</h1></div></td>
               </tr>
               <tr>
                 <td class="right">
                 <p>En estos momentos, Usted no posee libros en el carrito de compras, Por favor, Seleccione los libros que usted desee en el catalogo de libros. </p></td>
               </tr>
             </table>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
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
<?php }
?>