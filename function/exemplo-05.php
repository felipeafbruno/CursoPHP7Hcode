<?php

	$a = 10;
	//Passagem por referência - para isso é necessario colocar '&' na variável que deseja passar a referência.
	function trocarValor(&$b) {
		$b += 50;
		return $b;
	}

	echo trocarValor($a);
	echo "<br/>";
	echo trocarValor($a);
	echo "<br/>";
	echo $a;
?>