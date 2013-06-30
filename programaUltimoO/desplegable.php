<?php
/* Código que muestra los desplegables... 
 * Si recibe del valor de "desplegableInicial", muestra el primer desplegable
 * Si recibe un valor numerico, es para mostrar el segundo desplegable */
if($_GET["show"]=="desplegableInicial")
{
	echo "<select name='desplegable1' id='desplegable1' onchange=\"javascript:Solicitud(this.value,'desp2')\">
		<option value='' selected>Selecciona Opción</option>
		<option value='1'>Solo una fecha</option>
		<option value='2'>Por Rango de Fecha</option>
		</select>";
}else{
	switch($_GET["show"])
	{
		case 1:?>
       
<table align="center" width="300">
	<tr>
	<th colspan="2"  style=" background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CONSULTA DE TRASLADO</font></th>
	</tr>
  				<tr valign="top">
					<td >
						<font >Ingrese la Fecha:&nbsp;</font></td>
					<td>
					<input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, traslado1.desp.dateArrival, 'yyyy-mm-dd');" size="10">
					</td>
				</tr> 
        
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
	
		<?php
			break;
		case 2:?>

 <form name="traslado1" method="post" action="trasladoporfecha1.php">
<table align="center" width="300">
	<tr>
	<th colspan="2"  style=" background-image:url(imagenes/Sin_titulo.png);"><font color="#FFFFFF" size="+1">CONSULTA DE TRASLADO</font></th>
	</tr>
  				<tr valign="top">
					<td >
						<font >Ingrese fecha de inicio:&nbsp;</font></td>
                    <td>
					<input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, traslado1.dateArrival, 'yyyy-mm-dd');" size="10">
					</td>
                   
				</tr> 
                <tr valign="top">
					<td >
						<font >Ingrese fecha de Culminaci&oacute;n:&nbsp;</font></td>
        			 <td>
					<input name="fecha" type="text" id="dateArrival" onClick="popUpCalendar(this, traslado1.dateArrival, 'yyyy-mm-dd');" size="10">
                    </td>
                    </tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="enviar" value="Consultar"/>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" name="cancelar" value="Cancelar"/></td>
	</tr>
</table>
	</form>

		<?php
			break;
	}
}
?>
