<?php

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Felipe Bruno");
	$cad->setEmail("felipe@email.com");
	$cad->setSenha("12345");

	$cad->registrarVenda();

?>