<?php

	$pessoa = array(
		'nome' => 'Felipe',
		'idade' => 24
	);

	foreach ($pessoa as $key => &$value) {
		if(gettype($value) === 'integer') $value += 10;
		echo $key .": ". $value ."<br/>";
	}

	print_r($pessoa);

?>