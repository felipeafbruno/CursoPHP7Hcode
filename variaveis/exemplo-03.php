<?php
	//Variáveis do tipo básico:
	/*
		- String
		- Inteiro
		- Booleano
		- Ponto Flutuante
	*/
	$nome = "Felipe";
	$site = "www.udemy.com.br";

	$ano = 1994;
	$salario = 5500.99;
	$bolqueado = false;
///////////////////////////////////
	//Variáveis do tipo composto:
	/*
		- Array
		- Objetos
	*/
	$frutas = array("abacaxi", "laranja", "manga");

	//Retornar o valor da posição 2 do array frutas.
	//echo $frutas[2];

	//Criação de um Objeto do tipo DateTime.
	$nascimento = new DateTime();
	//var_dump($nascimento);
////////////////////////////////////////////////////
	//Variáveis do tipo Especial:
	/*
		- Resource
		- Null
	*/
	//Exemplo de como abrir um arquivo
	$arquivo = fopen("exemplo-03.php", "r");

	//var_dump($arquivo);

	$nulo = NULL;//Nulo significa ausência de valor.

?>
