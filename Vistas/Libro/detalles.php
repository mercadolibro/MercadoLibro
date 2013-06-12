<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>MercadoLibro</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <script>
        function validar()
        {
            gioc.submit();
        }
    </script>
</head>
<body>
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="./Accion.php?controlador=Clientes&accion=inicio"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li class="selected"><a href="./Accion.php?controlador=Clientes&accion=inicio">Inicio</a></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=libros">Libros</a></li>
            <li></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=carro">Carro de compras</a></li>
            <li><a href="./Accion.php?controlador=Clientes&accion=perfil&consulta=<?php session_start(); echo $_SESSION['cliente.id'] ?>">Mi Cuenta</a></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
        	
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span><?php echo $datos->getNombre(); ?></div>
        
        	<div class="feat_prod_box_details">
            
            	<div class="prod_img"><a href="details.html"><img src="<?php echo $datos->getPortada(); ?>" alt="" width="140" height="181" title="" border="0" /></a>
                <br /><br />
            	</div>
                    <form name="gioc" method="post" action="./Accion.php?controlador=Libro&accion=carro">
                        <div class="prod_det_box">
                	<div class="box_top"></div>
                    <div class="box_center">
                    <div class="prod_title">Detalles</div>
                    <p id="gio"> <?php echo $datos->getDescripcion(); ?> </p>
                    <input value="<?php echo $datos->getCodigo();?>" name="codigo" type="hidden">
                    <div class="price"><strong>PRECIO:</strong> <span class="red">$ <?php echo $datos->getValor(); ?></span></div>
                    <a  class="more"><img onclick="validar()" src="images/order_now.gif" alt="" title="" border="0" /></a> 
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom"></div>
                </div> 
                    </form>
                   
            <div class="clear"></div>
            </div>	
            
              
            <div id="demo" class="demolayout">

                <ul id="demo-nav" class="demolayout">
                <li><a class="active" href="#tab1">M&aacute;s detalles</a></li>
                <li></li>
                </ul>
    
            <div class="tabs-container">
            
                    <div style="display: block;" class="tab" id="tab1">
                                        <p class="more_details">Categoria: <?php echo $datos->getCategoria();?></p>
                                        <p class="more_details">Anio: <?php echo $datos->getAno(); ?></p>
                                        <p class="more_details">Autor: <?php echo $datos->getAutor(); ?></p>
                                        <p class="more_details">Editorial: <?php echo $datos->getEditorial(); ?></p>
                                        <p class="more_details">Edicion: <?php echo $datos->getEdicion();?></p>  
                                        <p class="more_details">Cantidad: <?php echo $datos->getCantidad();?></p> 
                    </div>	
                    
                            <div style="display: none;" class="tab" id="tab2">
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>    

                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>  


                   
                    <div class="clear"></div>
                            </div>	
            
            </div>


			</div>
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          
        
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
        <div class="right_footer">
        <a href="#">home</a>
        <a href="#">about us</a>
        <a href="#">services</a>
        <a href="#">privacy policy</a>
        <a href="#">contact us</a>
       
        </div>
        
       
       </div>
    

</div>

</body>
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>