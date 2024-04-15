<?php 
	
	//Atividade número 4
	//Dupla: Thiago de Sousa Correia / Silvio Moiano Silva

	$num1 = 3;
	$num2 = 2;
	$num3 = 1;

	if ($num1 >= $num2 && $num1 >= $num3) {
	    if ($num2 >= $num3) {
	        echo "$num1 <br />";
	        echo "$num2 <br />";
	        echo "$num3 <br />";
	    } else {
	        echo "$num1 <br />";
	        echo "$num3 <br />";
	        echo "$num2 <br />";
	    }
	} elseif ($num2 >= $num1 && $num2 >= $num3) {
	    if ($num1 >= $num3) {
	        echo "$num2 <br />";
	        echo "$num1 <br />";
	        echo "$num3 <br />";
	    } else {
	        echo "$num2 <br />";
	        echo "$num3 <br />";
	        echo "$num1 <br />";
	    }
	} elseif ($num3 >= $num1 && $num3 >= $num2) {
	    if ($num1 >= $num2) {
	        echo "$num3 <br />";
	        echo "$num1 <br />";
	        echo "$num2 <br />";
	    } else {
	        echo "$num3 <br />";
	        echo "$num2 <br />";
	        echo "$num1 <br />";
	    }
	}
	
 ?>