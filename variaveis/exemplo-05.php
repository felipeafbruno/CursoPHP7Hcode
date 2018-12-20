<?php
	//Variáveis de Escopo.
	//variável $nome Escopo Local.
	$nome = "Felipe";

	function teste(){
		global $nome;//palavra reservada global indica que a variável pode ser acessada em outro local
		echo $nome;
	}

	function teste_02(){
		$nome = "Pedro";
		echo $nome." agora no teste 2";
	}

	teste();
	teste_02();
?>