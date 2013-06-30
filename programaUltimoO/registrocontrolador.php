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
require('conexion.php');
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
	
	<link rel="stylesheet" href="css/form-field-tooltip.css" media="screen" type="text/css">
	<script type="text/javascript" src="js/rounded-corners.js"></script>
	<script type="text/javascript" src="js/form-field-tooltip.js"></script>

<script language="JavaScript" type="text/JavaScript">
function Cancelar(){
	var confirmar = confirm("Desea Cancelar el Registro?");
	if(confirmar!=0)
	this.location.href='preinscripcion.php';
}
function borra(form)
{
//alert(form.motivo.value);
  if (form.motivo.value=="Escriba Aqui")
     form.motivo.value="";
}
function validarSiNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero)){
      alert("El valor de la C.I. no es Numérico");
	  document.usuario.cedula.focus()
	  return 0; 
	  }}
	  function validarNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero))
      alert("El valor del Nro Telefónico no es Numérico");
	  }			
</script>
<script>
$(document).ready(function(e) {
		$("#equipo_actual").click(function(){ 
			var tipe = "";
				$.post('buscador2.php',tipe, function(result){
					if(result[0]!="Sin Conexion"){
					$("#ip1").val(result[1]);	
					$("#ip2").val(result[2]);
					$("#ip3").val(result[3]);
					$("#ip4").val(result[4]);
					$("#pc").val(result[0]);
					}else{
						alert(result[0]);
							$("#ip1").val(result[1]);	
					$("#ip2").val(result[2]);
					$("#ip3").val(result[3]);
					$("#ip4").val(result[4]);
						}
					},"json");
			});
			
	    $("#buscar").click(function(){ 
		var tipe = "ip1=" +$("#ip1").val()+ "&ip2="+$("#ip2").val()+"&ip3="+$("#ip3").val()+"&ip4="+$("#ip4").val();
			$.post('buscador.php',tipe, function(result){
				if(result!='Equipo no existe en la red'){
					$("#pc").val(result);
					}else{
					alert(result);	
						}
				},"json");
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
        
       
<div id="columna1" >
	
<?php 
require('menu.php');
?>

<div id="columna2" align="center">
<br/>

<form name="usuario" method="post" action="registrocontrolador1.php">
<table align="center" width="370" border="1">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRO EQUIPOS MANEJADORES</font>
		<a href="ayuda.php?ubicar=<?php echo $pagina=12; ?>"><img src="imagenes/ayuda.png" align="right" height="20px" width="30px" title="Ayuda"></a></th>
	</tr>
	<tr>
		<td ><font>IP: </font></td>
		<td><input name="ip1" type="text" size="5" maxlength="3" id="ip1" placeholder="127" required>
            <input name="ip2" type="text" size="5" maxlength="3" id="ip2" placeholder="0" required>
            <input name="ip3" type="text" size="5" maxlength="3" id="ip3" placeholder="0" required>
            <input name="ip4" type="text" size="5" maxlength="3" id="ip4" placeholder="1" required><font color="red">*</font><br><input id="buscar" value="Buscar" type="button"/><input id="equipo_actual" value="Equipo Actual" type="button"/></td>
	</tr>
	<tr>
		<td><font>Nombre PC: </font></td>
		<td><input  type="text" id="pc" name="pc" maxlength="16" size="30" id="lastname" placeholder="Nombre PC" required readonly><font color="red">*</font></td>
        
	</tr>
    
<tr>
		<td><font>Encargado: </font></td>
		<td><select style="width:230"  name="encargado" id="lastname" tooltipText="Seleccione el Encargado del Sistema" required>
        <option value="" onBlur="valida_envia()">----Seleccione el Encargado---</option>
			<?php

		$Encargado=mysql_query("select * from usuarios where cargo='Encargado' order by nombre");
		$opcion=mysql_fetch_array($Encargado);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option value='$opcion[cedula]'>";
		echo $opcion['nombre']." ".$opcion['apellido'];
		$opcion=mysql_fetch_array($Encargado);
		}
	

        ?>
        </select><font color="red">*</font>

        </td>
    
        
	</tr>
    
	<tr>
		<td><font>Ubicación: </font></td>
		<td><select style="width:230" name="ubicacion" id="lastname" tooltipText="Seleccione el laboratorio donde permanecerá dicho equipo" required>
        <option value="" onBlur="valida_envia()">----Seleccione Ubicaci&oacute;n---</option>
			<?php

		$laboratorio=mysql_query("select * from laboratorios order by nombre");
		$opcion=mysql_fetch_array($laboratorio);
				
		for($i=0;$i<$opcion;$i++) 
		{

		echo "<option>";
		echo $opcion['nombre'];
		$opcion=mysql_fetch_array($laboratorio);
		}
	

        ?>
        </select><font color="red">*</font>

        </td>
    
        
	</tr>
	
	<tr>
		<td colspan="2" align="center">
		<input type="submit" name="enviar" value="Registrar" onClick="valida_envia3()"/>&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/>&nbsp;
		</br>
		<font color="red"><h6 style="font-size:12px;">(*) campos obligatorios<h6></font>
		</td>
	</tr>
</table>
</form>

<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1){ 
mysql_query("INSERT INTO `csf`.`auditorias` (`usuario`, `accion`, `fecha`, `hora`) VALUES ('$_SESSION[nombre]', 'Registro de Equipos Manejadores', '".DATE('y/m/d')."', '".DATE('g:i:s a')."')");
?>
	<script>
	alert("Registro Exitoso");
	</script>
<?php
}else if ($_GET['res']==2){?> 	
	<script>
	alert("Error Al Registar Datos");
	</script>
	<?php
    }
	}
?>

</div>

<script type="text/javascript">
var tooltipObj = new DHTMLgoodies_formTooltip();
tooltipObj.setTooltipPosition('right');
tooltipObj.setPageBgColor('#EEEEEE');
tooltipObj.setTooltipCornerSize(15);
tooltipObj.initFormFieldTooltip();
</script>

</div><div id="pie" align="center">
Copyright © 2013 Derechos Reservados - Diseñado por: Rodriguez Juan, Tapias Juan, Mendoza Leonardo.
</div>
</div>
<div id="top2"></div>
</div>
</div>

</body>
</html>
