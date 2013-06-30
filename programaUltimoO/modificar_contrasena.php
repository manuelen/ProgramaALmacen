<html>
<head>
<title>Inventario-CFS Metalminero</title>
<link rel="StyleSheet" href="miestilo.css" type="text/css">
<link rel="stylesheet" href="css/azul.css" type="text/css"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/ddaccordion.js">
/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/
</script>
<script type="text/javascript" src="js/java.js"></script>
<!-- para menú vertical desplegable "FIN" -->
<SCRIPT src="js/top2.js" type=text/javascript></SCRIPT>

<script type="text/javascript" src="js/hora.js"></script>

</head>
<body >
<div id="contenedor">
<div id="top">
  <div id="envoltura">
  <div id="cabecera">
	<div id="sj">
       	  <p class="color_ye" align="center">
          <span id="liveclock" style="position:absolute;left:0;top:0; width:100px;">
</span>

		 <script language="javascript"><!--
new show5('Verdana','2','CDBF1E',' ',' ','','110','0','1','0','0','+1');
//--></script></p>
<!--/sj-->
</div>
<!--/cabecera-->  
</div>
<!--/envoltura-->
</div>
<div id="envoltura">
<div id="principal">
<div id="cabeceras"></div>
<div id="linea">
<?php 
require('barra.php');
?>
		</div>
        
       

<div id="columna3" align="center"></br>
<script> 
		
				
		function modificar_contrasena2(){			
		if($("#clave1").val().toString().length<8){
				alert('Minimo 8 Caracteres');
				$("#clave1").css({"box-shadow": "0px 0px 1px 1px rgba(255, 0, 0, 0.9)"});
				$('#confirmar').toggle('slow');
			 $('#confirmar1').toggle('fast');
			  $('#confirmar2').toggle('fast');
				}else{
		if($("#clave1").val()==$("#clave2").val()){
		
			var tipe = "clave="+$("#clave").val()+"&clave1="+$("#clave1").val()+"&clave2="+$("#clave2").val();
			$.post('modificar_contrasena1.php',tipe, function(result){
				if (result=="Modificacion Exitosa"){
				alert(result);
			    $(location).attr('href',"ingresousuario.html");
				}else{
         	    alert(result)}},'json');
				}else{
				alert("Las Contraseñas no Coinciden")
				}
				}
				}
		$(document).ready(function() {
              $("#clave1").keyup(function(){
			 if($("#clave1").val().toString().length<8){
				 $("#clave1").css({"box-shadow": "0px 0px 1px 1px rgba(255, 0, 0, 0.9)"});
				 if($("#contra").attr("style")=="display:none;color:red; padding:3px;"){
				 $("#contra").toggle('show');}
				 }else{
				 $("#clave1").css({"box-shadow": "0px 0px 0px 0px rgba(0, 0, 0, 0)"});
				  $("#contra").css({"display":"none"});
				 }
			});
            });


</script>
<?php
						if(isset($_REQUEST['contrasena'])){
							$contrasena=$_REQUEST['contrasena'];
							}else{
							$contrasena="";
							}
						?>

							<form name="modificar_contrasena2" action="javascript:modificar_contrasena2();">
<table align="center" width="500">
			<tr>
							<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+2">Recuperar Contraseña</font></th>
	</tr>
    <tr>
		<td ><font>Contraseña Vieja: </font></td>
		<td>  <INPUT id="clave" maxlength="12" value='<?php echo $contrasena; ?>' TYPE="Password" name="clave" required  /></td>
	</tr>
	<tr>
		<td ><font>Contraseña Nueva : </font></td>
		<td><INPUT id="clave1" maxlength="12" TYPE="Password" name="clave1" required /> <br><span id="contra" style="display:none;color:red; padding:3px;">Minimo 8 Carateres</span></td>
	</tr>
    <tr>
		<td ><font>Repetir Contraseña Nueva: </font></td>
		<td><INPUT id="clave2" maxlength="12" TYPE="Password" name="clave2" required /></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>


</div>


<div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
</div>
</div>
<div id="top2"></div>
</div>
</div>



</body>
</html>
