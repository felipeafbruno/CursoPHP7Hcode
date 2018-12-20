<?php

	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Felipe',
		'idade' => 24
	));

	array_push($pessoas, array(
		'nome' => 'Pedro',
		'idade' => 56
	));
	
	print_r($pessoas);

	echo "<br/>";

	print_r($pessoas[0]['nome']);
?>