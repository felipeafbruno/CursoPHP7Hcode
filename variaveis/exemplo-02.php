<?php
	//$anoNascimento = 1990;
	//$nomeCompleto = "";

	//Na linha de baixo temos uma variável com nome.
	$nome1 = "Felipe";

	echo $nome1."<br/>";

	$sobreNome = "Bruno";

	//Concatenação de Strings.
	$nomeCompleto = $nome1 ." ".$sobreNome;

	echo $nomeCompleto;

	echo "<br/>";
	
	//Método para limpar variáveis da memória.
	unset($nome1);

	//$if(isset($nome1)) verifica se a variável existe na memória.
	if(isset($nome1)){
		echo "$nome1";
	}
?>