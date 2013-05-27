<?php
    if(!isset($_SESSION['cliente.id']))
    { ?>
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
    function mensaje()
    {
        alert("Datos Incorrectos");
    }
    </script>
</head>

<body onload="mensaje()">
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
       		<div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li class="selected"><a href="index.html">Inicio</a></li>
            <li></li>
            <li><a href="libros.html">Libros</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li><a href="carro.html">Carro de compras</a></li>
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
    <?php } ?>