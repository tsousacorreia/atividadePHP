<?php 

	//Atividade número 1
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva

	$num1 = 10;
	$num2 = 25;

	function calc($num1, $num2){
		return($num1 + $num2);
	}

	$soma = calc($num1, $num2);

	if($soma > 20){
		$res1 = $soma + 8;
		$resultado1 = sprintf("O resultado da soma dos números informados + 8 é: %u", $res1);
		echo $resultado1;
	}else if($soma <= 20){
		$res2 = $soma - 5;
		$resultado2 = sprintf("O resultado da soma dos números informados - 5 é: %u", $res2);
		echo $resultado2;
	}


 ?>