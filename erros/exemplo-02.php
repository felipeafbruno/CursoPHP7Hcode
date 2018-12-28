<?php

	//error_reporting - Método para madudar as configurações de error reporting do PHP.
	error_reporting(E_ALL & ~E_NOTICE);

	$nome = $_GET["nome"];

	echo $nome;	

?>