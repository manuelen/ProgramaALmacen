<?php
   require('conexion.php');
   $img_tras='<img src="imagenes/traslado.jpg" border="0" align="absmiddle" width="25" height="25" title="Traslado" />';
   $img_mant='<img src="imagenes/mantenimiento.png" border="0" align="absmiddle" width="25" height="25" title="Mantenimiento" />';
   $img_incor='<img src="imagenes/estado.jpg" border="0" align="absmiddle" width="25" height="25" title="Incorporar/Desincorporar" />';
   $img_eli='<img src="imagenes/eliminar.png" border="0" align="absmiddle" width="25" height="25" title="Eliminar" />';
   $img_modi='<img src="imagenes/modificar.png" border="0" align="absmiddle" width="25" height="25" title="Modificar" />';
   $busqueda=$_REQUEST["busqueda"];
   $accion=$_REQUEST["accion"];
   $fechaini=$_REQUEST["fechaini"];
   $fechafin=$_REQUEST["fechafin"];


                $cadbusca="SELECT * FROM `auditorias` WHERE usuario LIKE '$busqueda%' and accion like '$accion%' and fecha between '$fechaini' and '$fechafin'";

        
		
		$result=mysql_query($cadbusca, $conecta);
		$resulta=mysql_fetch_array($result);
		$numeroRegistros=mysql_num_rows($result);
        $i=1;
		if(!$resulta){
			
			echo "<h1 align='center'> DATOS NO ENCONTRADOS</h1>";
		}else{
		
		if($numeroRegistros<=0){
						echo "<div align='center'>";
						echo "<font face='verdana' size='-2'>No se encontraron resultados</font>";
						echo "</div>";
						}else{
						if(!isset($orden))
							{
							$orden="codigoaudi";
							}
						$tamPag=8;
						//validacion de pàgina
						
						//pagina actual si no esta definida y limites
						if(!isset($_GET["pagina"]))
						{
						$pagina=1;
						$inicio=1;
						$final=$tamPag;
						}else{
						$pagina = $_GET["pagina"];
						}
						//calculo del limite inferior
						$limitInf=($pagina-1)*$tamPag;
						//calculo del numero de paginas
						$numPags=ceil($numeroRegistros/$tamPag);
						if(!isset($_GET["pagina"]))
							{
							$pagina=1;
							$inicio=1;
						$final=$tamPag;
						}else{
						$seccionActual=intval(($pagina-1)/$tamPag);
						$inicio=($seccionActual*$tamPag)+1;
							if($pagina<$numPags)
							{
							$final=$inicio+$tamPag-1;
							}else{
							$final=$numPags;
							}
						}

?>
<table align="center" border="2" bordercolor="#000" cellspacing="1" cellpadding="1">
            <tr>
			<th colspan="10"  style=" background-image:url(imagenes/Sin_titulo.png);" ><font color="#FFFFFF" size="+2">Auditorias</font></th>
			</tr> 
		<tr valign="top">
					<td width="200" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Codigo Auditoria</font>
					</td>
					<td width="200" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1">Usuario</font>
					</td>
					<td width="200" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >Actividad Realizada</font>
					</td>
					<td width="200" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >fecha</font>
					</td>
					<td width="200" align="center"  style=" background-image:url(imagenes/Sin_titulo.png);">
						<font color="#FFFFFF" size="+1" >hora</font>
                  </td>
				
				</tr>
<?php

		                $cadbusca="SELECT * FROM `auditorias` WHERE usuario LIKE '$busqueda%' and accion like '$accion%' and fecha between '$fechaini' and '$fechafin' ORDER BY ".$orden." ASC LIMIT ".$limitInf.",".$tamPag;
			$result=mysql_query($cadbusca);
						
        
        while ($row = mysql_fetch_array($result)){
		echo "
           <tr>
           <td class='titulo'>".$row['0']."</td>
           <td class='autor'>".$row['1']."</td>
           <td class='autor'>".$row['2']."</td>
		   <td class='autor'>".$row['3']."</td>
		   <td class='autor'>".$row['4']."</td>";
		   
					
					
           echo "</tr>";
           $i++;
        }
?>
</table>
<?php
if($pagina>1)
	{
		echo "<a class='p' href='' hreft='busqueda(2).php?busqueda=".$busqueda."&accion=".$accion."&fechaini=".$fechaini."&fechafin=".$fechafin."&pagina=".($pagina-1)."&orden=".$orden."'>";
		echo "<font face='verdana' size='-2' color='#000000'>Anterior</font>";
		echo "</a>&nbsp;";
	}

	for($i=$inicio;$i<=$numPags;$i++)
	{
		if($i==$pagina)
		{
			echo "<font face='verdana' size='-2'><b>".$i."</b>&nbsp;</font>";
		}else{
			echo "<a class='p' href='' hreft='busqueda(2).php?busqueda=".$busqueda."&accion=".$accion."&fechaini=".$fechaini."&fechafin=".$fechafin."&pagina=".$i."&orden=".$orden."'>";
			echo "<font face='verdana' size='-2' color='#000000'>".$i."</font></a>&nbsp;";
		}
	}
	if($pagina<$numPags)
	{
		
		echo "&nbsp;<a class='p' href='' hreft='busqueda(2).php?busqueda=".$busqueda."&accion=".$accion."&fechaini=".$fechaini."&fechafin=".$fechafin."&pagina=".($pagina+1)."&orden=".$orden."'>";
		echo "<font face='verdana' size='-2' color='#000000'>siguiente</font></a>";
	}
	//////////fin de la paginacion	
	}
		}

   
?>
<script>
$(".p").bind("click",function(){
	var culito = $(this).attr("hreft");
	$("#metodo_ajax").load(culito);
	$(this).removeAttr('href');
	});
	</script>&nbsp;
