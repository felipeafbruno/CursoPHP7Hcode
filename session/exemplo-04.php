<?php
	
	//recuperar o id de uma sessão já criada
	session_id('vshl4cvv9d8d4uup4e35jv9h35');

	require_once("config.php");

	//gera novamente um id de session
	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);
?>