<?php

include('funciones.php');?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="js/validacion.js"></script>
<title>Web Site CFS-LV</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="menu.css" rel="stylesheet" type="text/css"/>

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
    if (!/^([0-9])*$/.test(numero))
      alert("El valor de la C.I. no es Numérico");
	  }
	  function validarNumero(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero))
      alert("El valor del Nro Telefónico no es Numérico");
	  }
	   
				
</script>
</head>

<body>
<table width="866" border="0" align="center">
  <tr>
    <td colspan="4"> <div align="center"><img src="cintillo.png" width="860" height="75"></div></td><br>
  </tr>
  <tr>
    <td colspan="4"><br>
		<?php 
		require('menu_p.php');
		?>
      </td>
  </tr>
  <tr>
    <td width="146" valign="top">
		<?php 
		require('sub-1.php');
		?>
	</td>
	
    <td width="500" valign="top"><br>
	<div align="center">

<embed src="https://www.box.com/embed/wthvf9wkb64oylw.swf" width="500" height="420" wmode="opaque" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always">
    <td width="161" valign="top">
	<?php 
		require('sub-2.php');
		?>
	</td>
   </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<div align="center">
    <?php 
		require('pie.php');
		?>
  </div>
</body>
</html>