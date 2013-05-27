<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MercadoLibro Registro</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image: url(images/fondo1.jpg);
}
</style>
<script>
    function Validar()
    {
        if(document.register.txtCedula.value == "" ||
           document.register.txtContrasena.value == "" ||
           document.register.txtNombre.value == "" ||
           document.register.txtApellido.value == "" ||
           document.register.txtCorreo.value == "" ||
           document.register.txtTelefono.value == "" ||
           document.register.txtDireccion.value == "")
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
       		<div class="logo"><a href="index.html"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            <ul>                                                                       
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="selected"><a href="registro.html">Registro</a></li>
            <li></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Registro</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">&nbsp;</p>
            
              	<div class="contact_form">
                <div class="form_subtitle">Crear nueva cuenta</div>
                 <form name="register" method="post" action="./Accion.php?controlador=Clientes&accion=mensajeGuardado">          
<!--                    <div class="form_row">
                    <label class="contact"><strong>Usuario:</strong></label>
                    <input type="text" class="contact_input" />
                    </div>  -->

                    <div class="form_row">
                    <label class="contact"><strong>Identificaci&oacute;n:</strong></label>
                    <input type="text" onkeypress="return soloNumeros(event)" name="txtCedula" class="contact_input" />
                    </div>

                    <div class="form_row">
                    <label class="contact"><strong>Contrase&ntilde;a:</strong></label>
                    <input type="password" name="txtContrasena" class="contact_input" />
                    </div> 

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
                      <div class="terms">
                        <input type="checkbox" name="terms" />
                        He le&iacute;do los 
                        <a href="#">Terminos &amp; Condiciones</a>                        </div>
                    </div> 

                    
                    <div class="form_row">
                        <input type="button" onclick="Validar()"  class="registrar" value="Registro" />
                    </div>   
                  </form>     
                </div>  
            
          </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content"><a href="#"><strong></strong></a>
          <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>MercadoLibro</div> 
             <div class="about">
             <p><img src="images/about.gif" alt="" title="" class="right" /> MercadoLibro tiene como objetivo, satisfacer a ti por ser nuestro clientes a partir de la operaci&oacute;n de compras online.</p>
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