<?php 

	//Atividade número 6
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva

	//Aplicativo que recebe duas notas de seis alunos, calcula e mostra:
	//a. A média aritmética das duas notas de cada aluno;
	//b. A mensagem que está na tabela...
	//c. O total de alunos aprovados;
	//d. O total de alunos de exame;
	//e. Total de alunos reprovados;
	//f. A média da classe.


	$aluno1 = "João";
	$aluno2 = "Maria";
	$aluno3 = "Ana";
	$aluno4 = "José";
	$aluno5 = "Arnaldo";
	$aluno6 = "Monica";

	$nota1 = 9.0;
	$nota2 = 8.5;

	$media = 0.0;

	$reprovados = 0;
	$exame = 0;
	$aprovados = 0;

	function calc($nota1, $nota2){
		return($nota1 + $nota2);
	}

	$soma = calc($nota1, $nota2);

	$media = $soma/2;

	$somaTotal = 0.0;

	for ($i=1; $i <= 6; $i++) {
		if($i == 1){
			$aluno = $aluno1;
		}else if($i == 2){
			$aluno = $aluno2;
		}else if($i == 3){
			$aluno = $aluno3;
		}else if($i == 4){
			$aluno = $aluno4;
		}else if($i == 5){
			$aluno = $aluno5;
		}else{
			$aluno = $aluno6;
		} 


		if($media < 3.0){
			echo ("$aluno<br /> Média: $media - REPROVADO <br /><br />");
			$reprovados++;
		}else if($media <= 7.0){
			echo ("$aluno<br /> Média: $media - EXAME <br /><br />");
			$exame++;
		}else{
			echo ("$aluno<br /> Média: $media - APROVADO <br /><br />");
			$aprovados++;
		}

		$somaTotal = $somaTotal + $media;	
	}

	echo ("APROVADOS: $aprovados <br />");
	echo ("EXAME: $exame <br />");
	echo ("REPROVADOS: $reprovados <br />");

	$mediaTotal = 0.0;

	$mediaTotal = $somaTotal/($aprovados+$reprovados+$exame);

	echo ("<br />A média da classe é $mediaTotal");

 ?>