<?php 

	//Atividade número 2
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva

	$num1 = 25;

	if($num1 %10 == 0){
		echo "O número informado é divisível por 10.";
	}else if($num1 %5 == 0){
		echo "O número informado é divisível por 5.";
	}else if($num1 %2 == 0){
		echo "O número informado é divisível por 2.";
	}else{
		echo "O número informado não é divisível por 10, 5 e 2.";
	}

 ?>