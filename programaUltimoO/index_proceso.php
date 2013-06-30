<?php
function sacar($TheStr, $sLeft, $sRight){ 
      	 	 $pleft = strpos($TheStr, $sLeft, 0); //se coloca los parametros de la derecha y de la izquierda
		
      			  if ($pleft !== false){ //se verifica si los datos ingresados esta bien.. en caso contrario no se imprime nada
           	     $pright = strpos($TheStr, $sRight, $pleft + strlen($sLeft)); 
             	   if ($pright !== false) { 
              	          return (substr($TheStr, $pleft + strlen($sLeft), ($pright - ($pleft + strlen($sLeft))))); 
              	  } 
      			  } 	
     		   return ''; //se retorna vacio
			}
			
require('conexion.php');
if(isset($_REQUEST["busqueda"]))
{
	$valor=$_REQUEST["busqueda"];
	if(isset($valor))
	{
				
		
	$consulta=mysql_query("SELECT codigoequipo FROM equipos WHERE codigoequipo LIKE '".$valor."%' LIMIT 0, 22");
		
		$cantidad=mysql_num_rows($consulta);
		if($cantidad==0)
		{
			/* 0: no se vuelve por mas resultados
			vacio: cadena a mostrar, en este caso no se muestra nada */
			echo "<h1>vacio</h1>";
		}
		else
		{
			$cantidad=1;
			while(($registro=mysql_fetch_row($consulta)) && $cantidad<=20)
			{
echo "<div onClick=\"clickLista(this);\" onMouseOver=\"mouseDentro(this);\">".$registro['0']."</div>";
				// Muestro solo 20 resultados de los 22 obtenidos
				$cantidad++;
			}
		}
	}
}
?>