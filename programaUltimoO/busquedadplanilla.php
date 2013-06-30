<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>CAPS</title>
<link href="http://fonts.gogleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="calendar.js"></script>

<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='flecha1.jpg'  class='statusicon' />", "<img src='flecha2.jpg'  class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript">
$(document).ready(function(){
$(".boton").click(function(){
$("#desplegable").slideToggle("slow");
	});
$("#desplegable").css({ display: 'none' });
});
</script>


<script language="JavaScript" type="text/JavaScript">

function borra(form)
{
//alert(form.motivo.value);
  if (form.motivo.value=="Escriba Aqui")
     form.motivo.value="";
}
function validar(numero){
//alert(numero);
    if (!/^([0-9])*$/.test(numero))
      alert("Debe ingresar su cedula");
	  //document.getElementById('ci').focus();
	  //document.getElementById('ci').value="";
	  }	
</script> 


</head>
<form name="cedula" method="post" action="ejemplo.php" action="busquedadplanilla.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">Buscar Planilla</font></th>
	</tr>
	<tr>
		<td ><br><font>Cedula: </font></td>
		<td><input name="cedula" type="text" size="22" onBlur=validar(this.value)></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar" onClick="ejemplo.php"/>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
</table>
</form>
</html>


