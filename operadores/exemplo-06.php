<?php
	//Operador NULL Coalesce
	/*
		Função:
			- retornar o primeiro valor que exista que não seja NULL dentre os valores passados
	*/
	$a = NULL;
	$b = 8;
	$c = 10;

	echo $a ?? $b ?? $c;
?>