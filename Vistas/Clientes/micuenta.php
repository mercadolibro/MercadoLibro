<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MercadoLibro Cuenta</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style type="text/css">
body {
	background-image: url(images/fondo1.jpg);
}
</style>
<script>
    function Validar()
    {
        if(document.register.txtEmail.value == "" ||
           document.register.txtCedula.value == "")
        {
            alert("Por favor, Ingrese su Correo y su Usuario (identificacion)");
        }
        else
        {
            register.submit();
        }    
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
            <li class="selected"><a>Mi cuenta</a></li>
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Mi cuenta</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">&nbsp;</p>
            
              	<div class="contact_form">
                <div class="form_subtitle">He olvidado mi contrase&ntilde;a</div>
                 <form name="register" method="post" action="./Accion.php?controlador=Clientes&accion=enviarEmail">          
                    <div class="form_row">
                      <p>
                        <label class="contact"><strong>Email:</strong></label>
                        <input type="text" name="txtEmail" class="contact_input" /><br>
                      </p>
                   </div>
                     <div class="form_row">
                      <p>
                        <label class="contact"><strong>Usuario:</strong></label>
                        <input type="text" name="txtCedula" class="contact_input" /><br>
                      </p>
                   </div>
                    <div class="form_row">
                    <input type="button" onclick="Validar()" class="register" value="Enviar" />
                   </div>   
                    
                  </form>     
                    
              </div>  
            
            </div>	
            
              

            

            
        <div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
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