<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
<!--
.contenedor{
		height: 400px;
		width: 500px;
		overflow:scroll;
		overflow-x:hidden;
		visibility:visible;
}
-->
</style>
<title>Web Site CFS-LV</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="menu.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="866" border="0" align="center">
  <tr>
    <td colspan="3"> <div align="center"><img src="cintillo.png" width="860" height="75"></div></td><br>
  </tr>
  <tr>
    <td colspan="3"><br>
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
	
    <td width="400 " >
    <div style class="contenedor">
     <div align="center">
	<div id="" style="text-align:justify; font-size:17;" face="colonna MT"> 
	<form action="validacion.php" method="post" onSubmit="javascript:return verifica()" enctype="multipart/form-data" name="form2" id="form2">
	
										<center><b>OBJETIVOS ESTRATÉGICOS DEL INCES</b></center></br>	
<hr width=90% size=5 color="#B40404"></br>										
											
<b>Institucionales</b></br></br>

<li>Incrementar los niveles de efectividad de la gestión en la asignación y uso de los recursos institucionales. </li></br>
<li>Coordinar lineamientos, acciones y recursos, a través de acuerdos interinstitucionales para el desarrollo 
de la formación y capacitación productiva.</li></br>
<li>Vincular las acciones de formación y capacitación integral a través de nuevos diseños curriculares adaptados 
al Plan Estratégico de Desarrollo Económico y Social de la Nación.</li> </br>
<li>Consolidar alianzas estratégicas nacionales e internacionales para el intercambio de conocimientos, experiencias 
y tecnologías que aseguren la actualización y perfeccionamiento de los programas de educación, formación y capacitación </li></br>
<li>Desarrollar programas de formación dirigidos a los trabajadores del sector público, a los fines de fortalecer sus 
capacidades, en el cumplimiento eficaz de los objetivos institucionales. </li></br>
<li>Desarrollar programas de formación, con tecnologías actualizadas en oficios relacionados con los procesos de la 
actividad principal de “la o el empleador” obligado al PNA o servicios asociados a la misma, bajo la estrategia de 
desarrollo de aprendizaje en la empresa. </li></br>
<li>Establecer con las instituciones competentes un sistema de reconocimiento al estudio y acreditación, que permita
 a los egresados del Inces incorporarse a diversos programas educativos en la consecución de estudios superiores.</li>

</br></br>
											

</form>
</div>
</div>
	</div></td>
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
