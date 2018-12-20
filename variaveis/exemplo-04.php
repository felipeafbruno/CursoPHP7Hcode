<?php
	//Variáveis predefinidas ou Arrays Super Globais.
	//$_GET receberá todas a variáveis enviadas através da URL.
	$nome = (int) $_GET["a"];
	//var_dump($nome);

	$ip = $_SERVER["REMOTE_ADDR"];

	echo $ip;
?>