
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
            <li><a href="libros.html">Libros</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="carro.html">Carro de compras</a></li>
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
            
            	<div class="prod_img"><a href="detalles.html"><img src="images/51iVafGgxsL._SL500_AA300_.jpg" alt="" width="130" height="188" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">PHP &amp; MySQL</div>
                    <p class="details">Es un libro muy b&aacute;sico que te introduce en el mundo de PHP y el uso del   gestor de base de datos MySQL para almacenar toda la informaci&oacute;n. Tiene   un cap&iacute;tulo dedicado a crear una aplicaci&oacute;n desde cero, en concreto, un   cat&aacute;logo de mascotas online con registro de usuarios. Cabe destacar la   parte dedicada al uso de cookies y sesiones.</p>
                    <a href="detalles.html" class="more">- M&aacute;s detalles-</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div>    
            <div class="clear"></div>
            </div>
       	   <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>Nuevos Libros</div> 
           
           <div class="new_products">
           
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/new_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
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
            
            </div> 
          
            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Usuario:<a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php echo $datos->getCedula();?>"><?php echo $datos->getNombre(); ?></a></div>
            
            <a href="Bienvenido.html" class="view_cart">Salir</a> </div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <div class="currency"><span class="red">Moneda: </span>
            <a href="#">$PESOS COL</a></div>
                
                
              <div class="cart">
                  <div class="title"><span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>Mis compras</div>
                  <div class="home_cart_content">
                  3 x items | <span class="red">TOTAL: 100$</span>
                  </div>
                  <a href="carro.html" class="view_cart">Ver carro</a>
              
              </div>
                       
            	
        
        
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>MercadoLibro</div> 
             <div class="about">
             <p>
             <img src="images/about.gif" alt="" title="" class="right" />
             MercadoLibro tiene como objetivo, satisfacer a ti por ser nuestro clientes a partir de la operaci&oacute;n de compras online.</p>
             
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
