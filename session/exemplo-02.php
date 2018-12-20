<?php

	require_once("config.php");

	/*
		'session_unset();' - limpar todas as variáveis de sessão.
		session_unset(variável); - limpar uma variável específica da sessão passando como
		parametro no método.
		'session_destroy();' - limpar a variável e remover o usúario.  	
	*/
	session_unset();

	echo $_SESSION["nome"];

?>