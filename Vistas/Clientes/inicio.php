<?php 
    if($estado == false)
    { ?>
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
       		<div class="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="index.php">Volver</a></li>
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
                 <td width="385"><div align="center" class="Titulo"><h1><?php echo $titulo; ?></h1></div></td>
               </tr>
               <tr>
                 <td class="right">
                 <p><?php echo $mensaje; ?></p></td>
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
    else
    {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MercadoLibro</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image: url(images/fondo1.jpg);
}
</style>
</head>
<body bgcolor="#D6D6D6">
<div id="wrap">

       <div class="header">
       		<div class="logo"><a><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li class="selected"><a>Inicio</a></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=libros">Libros</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=carro">Carro de compras</a></li>
            <li><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php echo $_SESSION['cliente.id'] ?>">Mi Cuenta</a></li>
            <li></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
        	
          <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Nuestros Recomendados</div>
        
        	<div class="feat_prod_box">
            
            	<div class="prod_img"><a href="./Accion.php?controlador=Libro&accion=detalles&consulta=<?php echo $datos3->getCodigo();?>"><img src="<?php echo $datos3->getPortada(); ?>" alt="" width="130" height="188" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title"><?php echo $datos3->getNombre(); ?></div>
                    <p class="details"> <?php echo $datos3->getDescripcion(); ?></p>
                    <a href="./Accion.php?controlador=Libro&accion=detalles&consulta=<?php echo $datos3->getCodigo();?>" class="more">- M&aacute;s detalles-</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>
       	   <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>Nuevos Libros</div> 
           
           <div class="new_products">
               <?php $cont = 0?>
           <?php foreach ($datos2 as $item) 
           {
               if($cont <3)
               {
               ?>
                    <div class="new_prod_box">
                        <a><?php echo $item->getNombre(); ?></a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" width="70" height="100"  title="" /></span>
                        <a href="./Accion.php?controlador=Libro&accion=detalles&consulta=<?php echo $item->getCodigo();?>"><img src="<?php echo $item->getPortada(); ?>" alt="" width="60" height="90" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
           <?php 
                $cont = $cont + 1;
               }
           }?>          
                 <!--   
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>          
            -->
            </div> 
          
            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php echo $datos->getCedula();?>"><?php echo $datos->getNombre(); ?></a></div>
            
            <a href="./Accion.php?controlador=Clientes&accion=salir" class="view_cart">Salir</a> </div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          
                       
            	
        
        
             
             <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>MercadoLibro</div> 
             <div class="about">
             <p>
             <img src="images/about.gif" alt="" title="" class="right" />
             MercadoLibro tiene como objetivo, satisfacer a nuestros clientes a partir de la operaci&oacute;n de compras online.</p>
             
             </div>
        </div><!--end of right content-->
        
        
       
       
       <div class="clear">
         <p>&nbsp;</p>
         <p>&nbsp;</p>
         <p>&nbsp;</p>
       </div>
       </div><!--end of center content-->
       
              
       <div class="footer">
         <div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br />
           <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
         <p>&nbsp;</p>
       	<p>&nbsp;</p>
       	<p>&nbsp;</p>
  </div>
    

</div>

</body>
</html>
    <?php }?>