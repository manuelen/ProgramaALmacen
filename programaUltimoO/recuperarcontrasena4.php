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
                <script>
		function modificaruser(){
			if($("#contrasena").val().toString().length<8){
				alert('Minimo 8 Caracteres');
				$("#contrasena").css({"box-shadow": "0px 0px 1px 1px rgba(255, 0, 0, 0.9)"});
				$('#confirmar').toggle('slow');
			 $('#confirmar1').toggle('fast');
			  $('#confirmar2').toggle('fast');
				}else{
        	if ($("#contrasena").val()!=$("#contrasena2").val()){
				alert("Nueva Contraseña y Confirmar Contraseña son Diferentes");
				}else{
				var datos = "contrasena="+$("#contrasena").val()+"&cedula="+$("#cedula").val();
				
				$.post('recuperar2.php',datos, function(result2){if (result2!="Modificación Exitosa"){alert(result2);}else{alert(result2);$(location).attr('href',"index.php");}},'json');
				}
		}
		}
		$(document).ready(function() {
              $("#contrasena").keyup(function(){
			 if($("#contrasena").val().toString().length<8){
				 $("#contrasena").css({"box-shadow": "0px 0px 1px 1px rgba(255, 0, 0, 0.9)"});
				 if($("#contra").attr("style")=="display:none;color:red; padding:3px;"){
				 $("#contra").toggle('show');}
				 }else{
				 $("#contrasena").css({"box-shadow": "0px 0px 0px 0px rgba(0, 0, 0, 0)"});
				  $("#contra").css({"display":"none"});
				 }
			});
            });
        </script>

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
        
       

<div id="columna3" align="center">

			<?php 
				/*if($_GET['res']==1)  echo "Registro Exitoso";
				else if($_GET['res']==2)  echo "Ocurrio un Error al Registrar";*/
				$img_eli='<img src="imagenes/plus.gif" border="0" align="absmiddle" width="18" height="18" title="Eliminar" />';
				$img_modi='<img src="imagenes/minus.gif" border="0" align="absmiddle" width="18" height="18" title="Actualizar" />';
				require('conexion.php');
		
				
						$cedula=$_REQUEST['cedula'];
						$pregunta=$_REQUEST['pregunta'];
						$respuesta=$_REQUEST['respuesta'];
						$resultado=mysql_query("select * from usuarios where pregunta= '$pregunta' and respuesta='$respuesta' and cedula='$cedula'");
						if(!$resultado)
						{
							echo 'No se pudo ejecutar la consulta';
						}
						else
						{
											$fila=mysql_fetch_array($resultado);
										if (!$fila)
			{?>
				  <script>
					alert("Pregunta o Respuesta secreta no encontrada");
					this.location.href='recuperarcontrasena3.php';
					</script>
			<?php
			}
			else
			{
							echo "<div align='center'>";
							echo "<br>"; ?>
						  <form action="javascript:modificaruser();" method="post" id="form_modiserver">
<table align="center" width="500">
			<tr>
							<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1"> <?php 
							echo "<font size='+1' >Bienvenido   ".$fila['nombre']."  ".$fila['apellido'];
							echo "</font>";
							?></font></th>
	</tr>
                     <tr style="display:none">
                <td>  <input name="cedula" id="cedula" title="cedula" value="<?php echo $fila['cedula'];?>"  autocomplete="off" required/> </td>
                </tr>
	<tr>
		<td ><font>Ingrese Nueva Contraseña: </font></td>
		<td><input name="contrasena"  id="contrasena"  maxlength="16"  type="password" size="22" required /><br/> <span id="contra" style="display:none;color:red; padding:3px;">Minimo 8 Carateres</span></td>
	</tr>
    <tr>
		<td ><font>Confirme Contraseña: </font></td>
		<td><input name="contrasena2"  id="contrasena2"  maxlength="16"  type="password" size="22" required /></td>
	</tr>
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Enviar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>
						<?php	echo "</div>";
						}
						}
					
				
			?>	

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
