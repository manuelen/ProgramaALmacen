<span id="usuario" style="position:absolute;right:0;top:0; width:300px;">
<?php

include('funciones.php');
//uso de la funcion verificar_usuario()
if (verificar_usuario()){
error_reporting(0); 
	//si el usuario es verificado puede acceder al contenido permitido a el
	print "<div class='usuario'> <a class='menuitem submenuheader' href='central.php' style='text-align:left'>Hola $_SESSION[nombre] $_SESSION[apellido]</a>
		<div class='submenu'>
				<ul>
					<li><a href='modificardatos.php?cedula=".$_SESSION['cedula']."' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-Modificar</a></li>
					<li><a href='salir.php' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-Desconectarse</a></li>
				</ul>
			</div>
			</div>";

} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	header('Location:ingresousuario.html');
}
?> </span>
<!-- COMIENZA A COPIAR AQUI EN TODAS LAS PAGINAS... ABAJO TE APARECERA DONDE TERMINA-->
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
<SCRIPT src="js/top.js" type=text/javascript></SCRIPT>
<script type="text/javascript" src="js/hora.js"></script>
<script type="text/javascript" src="js/validacion.js"></script>
<script type="text/javascript" src="js/popcalendar.js"></script>
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
<script>
		$('#procesadas1').live('click',function(){
			 $('#procesadas').toggle();
			});
			$('#finalizadas1').live('click',function(){
			 $('#finaliza').toggle();
			});
			$('#caducadas1').live('click',function(){
			 $('#caducadas').toggle();
			});
			$(document).ready(function(e) {
				
			//Codigo de Confirmación de Traslado
				var i;
				var total= $('#cantidadT').val();
				for(i=0;i<total;i++){
				 $('#traslado'+i).live('click',function(){
					 var e = $(this).attr("numero");
					 var codigo= $(this).attr("codigo")
						var tipe = 'codigoconfirmacion='+$("#traslados"+e).val()+"&codigo="+codigo;
				 $.post('confirmar_traslado.php',tipe,function(result){
					 alert(result);},'json');
					   $("#fondo").load("administrador2.php");
					   });
					   }
			//Codigo de Confirmación de Mantenimiento		   
				var i;
				var total= $('#cantidadM').val();
				for(i=0;i<total;i++){
				 $('#mantenimiento'+i).live('click',function(){
					 var e = $(this).attr("numero");
					 var codigo= $(this).attr("codigo");
						var tipe = 'codigoconfirmacion='+$("#mantenimientos"+e).val()+"&codigo="+codigo;
				 $.post('confirmar_mantenimiento.php',tipe,function(result){
					 alert(result);},'json');
					 $("#fondo").load("administrador2.php");
				 });
				 }
            });
	
</script>
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
        
       
<div id="columna1" >
	
<?php 
require('menu.php');
?>
<!----COPIA HASTA AQUI LEO EN TODAS LAS PAGINAS---->
<div id="columna2" align="center">
<div id="Titulo" align="center"><marquee width="600px" height="30px" align="center"><h6>BIENVENIDOS AL CONTROL DE INVENTARIO DEL CFS METALMINERO DE LA VICTORIA</h6></marquee> </div>
<br><div id="fondo">
<script>
		function backups(){
			var tipe = "contrasena="+$("#clave").val();

			$.post('buscador3.php',tipe, function(result){
				if (result!="Disponible"){
				$(location).attr('href',"backup_rest.php");
				alert(result);
				}else{
					var valor = "importar="+$("#importar").val();
					alert(valor);
         	   $.post('backup_rest1.php',valor, function(result){ 
				alert(result);
			   },"json");
			   }},'json');
				
		}
</script>
<br><br><br><br><br>
<form  enctype="multipart/form-data" method="post" action="backup_rest1.php" >
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">Importar Base de Datos</font></th>
	</tr>
		<td ><font>Datos a Importar</font></td>
		<td><input name="importar"  id="importar" type="file" size="22" required></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input id="BACKUP" type="submit" value="BACKUP" />
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>
<?php
if(isset($_GET['resul'])){
	?>
	<script>
    alert('<?php echo $_GET['resul']; ?>');
    </script>
	<?php
	}
 ?> 
 </div>
</div>



</div><div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
<div id="top2"></div>
</div>
</div>
</div>
</body>
</html>
