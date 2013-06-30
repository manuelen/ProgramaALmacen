<?php
//funcion para parsear el codigo
	$ip=$_SERVER['REMOTE_ADDR'];

	
   		 	function sacar($ip){ 
			$ipsub=$ip;
				for($i=0;$i<3;$i++) 
			{	
				$ippos=strpos($ipsub,".",0);
				$ip1[$i]=substr($ipsub,0,$ippos);
				$ipsub=substr($ipsub,$ippos+1);
			}
     		   return array ($ip1[0],$ip1[1],$ip1[2],$ipsub); //se retorna vacio
			}
			
			//funcion para verificar el estado por ping

			list($ip1,$ip2,$ip3,$ip4)=sacar($ip);
			$nombreServidor=gethostbyaddr($ip);
		if ($ip!=$nombreServidor){
		$response = array($nombreServidor,$ip1,$ip2,$ip3,$ip4);
		echo json_encode($response);
			}else{
		
		$response = array("Sin Conexion",$ip1,$ip2,$ip3,$ip4);
		echo json_encode($response);

	}
		
		
		?>