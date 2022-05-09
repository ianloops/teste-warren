<?php
	function cancelaAula($x, $tempoChegada){
		$atrasados=0;
		for($i=0;$i<count($tempoChegada);$i++){
			if($tempoChegada[$i]>0){
				$atrasados++;
			}
		}
		if($atrasados>=$x){
			echo "Aula cancelada";
		}else{
			echo "Aula normal";
		}
	}
	$x=3;//(int)readline('Qual o limite de atrasos?');
	$tempoChegada=array(-2, -1, 0, 1, 2);
	cancelaAula($x, $tempoChegada);
?>