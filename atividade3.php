<?php 

	//Atividade número 3
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva

	$nome = "Claudia";
	$sexo = "F";
	$idade = 30;

	if($sexo == "F" && $idade < 25){
		$aceita = sprintf("%s: ACEITA", $nome);
		echo $aceita;
	}else{
		$naoaceita = sprintf("%s: NÃO ACEITA", $nome);
		echo $naoaceita;
	}

 ?>