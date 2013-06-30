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
					<li><a href='modificardatos.php?cedula=".$_SESSION['cedula']."' target='mainFrame' style='text-align:left; font-size:12;'>&nbsp;&nbsp;-´Modificar</a></li>
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

<div id="columna2" align="center">

<br/>

<form name="frmbusqueda" action="javascript:enviar();" method="post">
   
    <div align="center" style="background-image:url(imagenes/Sint%C3%ADtulo.jpg);"><font>Ingrese el Usuario a Consultar:</font>
	<input type="text" name="dato" id="padre">
</div>
</form>

<form name="frmbusqueda" action="javascript:enviar();" method="post">
   
    <div align="center" style="background-image:url(imagenes/Sint%C3%ADtulo.jpg);"><font>Ingrese Acción:</font>
	<input type="text" name="dato" id="padre1">
</div>
</form>
	
		<form name="auditoria1" method="post" action="javascript:enviar();">
		<table align="center" width="300">
		
					<div align="center" style="background-image:url(imagenes/Sint%C3%ADtulo.jpg);"><font>Fecha de Inicio:&nbsp;</font>
					<input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, auditoria1.dateArrival, 'yyyy-mm-dd');" size="10">
					
                   <font>Fecha de Culminación:&nbsp;</font>
					<input name="fecha1" type="text" value="<?php echo date("Y-m-d"); ?>" id="dateArrival1" onClick="popUpCalendar(this, auditoria1.dateArrival1, 'yyyy-mm-dd');" size="10">
					
					<input type="submit" name="enviar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
					
		</div>
		</table>
		</form><br/>
<script>
$(document).ready(function(e) {
  $("#metodo_ajax").load("busqueda(2).php?busqueda=&accion=&fechaini=&fechafin=2016-12-05");

//usuario
$("#padre").keyup(function(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
});

//accion
$("#padre1").keyup(function(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
});

//fechaini
$("#dateArrival").keyup(function(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
});

//fechafin
$("#dateArrival1").keyup(function(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
});
//content
$("#content").mouseleave(function(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
});
function enviar(){
$("#metodo_ajax").load("busqueda(2).php?busqueda="+$("#padre").val()+'&accion='+$('#padre1').val()+'&fechaini='+$('#dateArrival').val()+'&fechafin='+$('#dateArrival1').val());
}
});
</script>

			<div id="metodo_ajax">
            
            </div>
							
							
</div>

 

</div><div id="pie" align="center">
Control de Inventario del Centro de Formación Socialista "Metalmineros De La Victoria", Edo. Aragua
</div>
</div>
<div id="top2"></div>
</div>
</div>

</body>
</html>