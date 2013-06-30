<form name="tipo" method="post" action="registrartipo1.php">
<table align="center" width="300">
	<tr>
		<th colspan="2" style="background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">REGISTRAR TIPO</font></th>
	</tr>
	<tr>
		<td ><font>Tipo: </font></td>
		<td><input name="tipo" type="text" size="22"></td>
	</tr>
	
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Registrar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
</form>


<div align="center">
<?php
if (!isset($_GET['res'])){
	}else{
if($_GET['res']==1) echo "Registro Exitoso";
else if ($_GET['res']==2) echo "Ocurrio un error al registrar";
	}
?>
<br>
 <input type="button" value="Cerra y Actualizar" onClick="window.opener.location.reload(); window.close()"/>
</div>
