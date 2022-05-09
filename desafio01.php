<?php
	function reversoImpar(){
		$contador=0;
		$reversoImpar=array();
		for ($i=11;$i<1000000;$i++){
			if ($i%10!=0){
				$j=strrev($i);
				$soma=$i+$j;
				if($soma%2==1){
					array_push($reversoImpar, $i);
					$contador++;
				} 
			}
		}		
		echo "$contador <br><br>";
		print_r($reversoImpar);
	}
	reversoImpar();
?>