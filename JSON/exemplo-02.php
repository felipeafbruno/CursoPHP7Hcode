<?php
	//json_decode
	/*
		json_decode - trnsformar um array em objeto,
		colocar o segundo paramêtro do método como true para 
		retorna um array e não um objeto.
	*/
	$json = '[{"nome":"Felipe","idade":24},{"nome":"Pedro","idade":56}]';
	$data = json_decode($json, true);

	var_dump($data);

?>