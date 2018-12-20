<?php
	//json_encode
	/*
		json_encode - transforma um array em um objeto json.
	*/
	$pessoas = array();

	array_push($pessoas, array(
		'nome' => 'Felipe',
		'idade' => 24
	));

	array_push($pessoas, array(
		'nome' => 'Pedro',
		'idade' => 56
	));

	echo json_encode($pessoas);

?>