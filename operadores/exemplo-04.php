<?php
	$a = 55.0;
	$b = 55;

	var_dump($a > $b);

	echo "<br />";

	var_dump($a < $b);


	echo "<br />";

	//Operador de compração.
	/*
		- '=='  compara somente ao valor IGUALDADE DE VALOR
		- '===' compara o valor e o tipo do valor (exemplo 55 === 55.0 false)  IGUALDADE DE IDENTIDADE
		- '!==' IGUALDE DE IDENTIDADE para verificar se os valores são diferentes segundo ao valor e o tipo
	*/
    var_dump($a == $b);
    echo "<br />";
	var_dump($a === $b);

	echo "<br />";

	var_dump($a != $b);
	echo "<br />";
	var_dump($a !== $b);	
?>