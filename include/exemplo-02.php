<?php
	/*
		include ou iclude_once:
		- O arquivo vai funcionar mesmo que existe algum erro.
	*/
	//include "inc/exemplo-01.php";
	/*
		require ou require_once:
		- O arquivo deve obrigatóriamente existir e estar funcionando 
		corretamente.
		
	*/
	require_once "inc/exemplo-01.php";
	require_once "inc/exemplo-01.php";

	$resultado = somar(10, 3);

	echo $resultado;
?>