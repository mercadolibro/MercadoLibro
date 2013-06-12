<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MercadoLibro Cuenta</title>
<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<style type="text/css">
	body {
	background-image: url(images/fondo1.jpg);
}
    </style>
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <script>
    function Validar()
    {
        if(document.register.txtNombre.value == "" ||
           document.register.txtApellido.value == "" ||
           document.register.txtCorreo.value == "" ||
           document.register.txtTelefono.value == "" ||
           document.register.txtDireccion.value == "" ||
           document.register.txtCuenta.value == "" ||
           document.register.txtFondos.value == "")
        {
        
                alert("Campos Vacios");
        }
        else
        {
                register.submit();
        }
    }
    function soloNumeros(evt)
    {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
    }
    function sololetras(e)
    {
       tecla = (document.all) ? e.keyCode : e.which;
       if (tecla==8) return true;
       patron =/[A-Za-z\s]/;
       te = String.fromCharCode(tecla);
       return patron.test(te); 
    }
</script>
</head>
<body>
<div id="wrap">

<div class="header">
       		<div class="logo"><a href="./Accion.php?controlador=Clientes&accion=inicio&consulta=<?php echo $datos->getCedula();?>/<?php echo $datos->getContrasena();?>"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li><a href="./Accion.php?controlador=Clientes&accion=inicio&consulta=<?php echo $datos->getCedula();?>/<?php echo $datos->getContrasena();?>">Inicio</a></li>
            <li></li>
            <li><a href="./Accion.php?controlador=Libro&accion=libros">Libros</a></li>
            <li><a href="./Accion.php?controlador=Libro&accion=carro">Carro de compras</a></li>
            <li class="selected"><a>Mi cuenta</a></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
<div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>NOMBRE DEL USUARIO</div>
            <div id="demo" class="demolayout">

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <ul id="demo-nav" class="demolayout">
                <li><a class="active" href="#tab1">Datos del Usuario</a></li>
                <a class="active" href="#tab3">Modificar Datos</a>
                <li></li>
</ul>
    
            <div class="tabs-container">
            
                    <div style="display: block;" class="tab" id="tab1">
                                        <p class="more_details">Identificaci&oacute;n:<?php echo " ".$datos->getCedula(); ?></p>
                                        <p class="more_details">Nombre:<?php echo " ".$datos->getNombre(); ?></p>
                                        <p class="more_details">Apellido:<?php echo " ".$datos->getApellido(); ?></p>
                                        <p class="more_details">Email:<?php echo " ".$datos->getCorreo(); ?></p>
                                        <p class="more_details">Telefono:<?php echo " ".$datos->getTelefono(); ?></p>
                                        <p class="more_details">Direcci&oacute;n:<?php echo " ".$datos->getDireccion(); ?></p>  
                                        <p class="more_details">Numero de Cuenta::<?php echo " ".$datos->getCuenta(); ?></p> 
                                        <p class="more_details">Fondos:<?php echo " ".$datos->getFondos(); ?></p> 
              </div>	
<form name="register" method="post" action="./Accion.php?controlador=Clientes&accion=modificar&consulta=<?php echo $datos->getCedula();?>">
                            <div style="display: none;" class="tab" id="tab2">
                                <br>


                    <div class="form_row">
                    <label class="contact"><strong>Nombres:</strong></label>
                    <input type="text" onkeypress="return sololetras(event)" name="txtNombre" class="contact_input" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Apellidos:</strong></label>
                    <input type="text" onkeypress="return sololetras(event)" name="txtApellido" class="contact_input" />
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" name="txtCorreo" class="contact_input" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Telefono:</strong></label>
                    <input type="text" onkeypress="return soloNumeros(event)" name="txtTelefono" class="contact_input" />
                    </div>
                    
                    
                    <div class="form_row">
                    <label class="contact"><strong>Direcci&oacute;n:</strong></label>
                    <input type="text" name="txtDireccion" class="contact_input" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Numero de Cuenta:</strong></label>
                    <input type="text" name="txtCuenta" class="contact_input" />
                    </div>
                                    
                    <div class="form_row">
                    <label class="contact"><strong>Fondos:</strong></label>
                    <input type="text" name="txtFondos" class="contact_input" />
                    </div>
                                    
                                    <br>
                                        <br>
  <input type="button" onclick="Validar()" name="mod" id="mod" value="Modificar Informacion" />
  </form>


                   
                    <div class="clear"></div>
                            </div>	
            
            </div>


		  </div>
            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
          <div class="cart">
            <div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span><?php echo $datos->getNombre(); ?></div>
            <a href="./Accion.php?controlador=Clientes&accion=salir" class="view_cart">SALIR</a> </div>
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
<script type="text/javascript">

var tabber1 = new Yetii({
id: 'demo'
});

</script>
</html>