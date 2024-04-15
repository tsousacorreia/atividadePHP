<?php 

	//Atividade número 6
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva
	
	//Sistema de reservas de mesas em uma casa de espetáculo.

	$totalMesas = 40;
	$totalLugares = 240;

	$mesa = 0;
	$lugares = 6;

	for ($i=1; $i < 40; $i++) { 
		if ($mesa !== 0) {
			$totalMesas--;
			$totalLugares = $totalLugares - $lugares;
		}else{
			$i = 0;
		}
	}

	echo "<br \> Ainda há $totalMesas mesas disponíveis e $totalLugares lugares.";
?>