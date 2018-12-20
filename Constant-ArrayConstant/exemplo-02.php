<?php
	//paramêtro permite que a constante seja chamada com letras maiusculas ou minusculas
	define ("BANCO_DE_DADOS", [
		'127.0.0.1',
		'root',
		'password',
		'teste'
	], true);

	print_r(BANCO_DE_DADOS);
?>