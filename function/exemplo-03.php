<?php 
	//PHP7 - é possível colocar valor padrão em argumentos de funções como visto abaixo.
	
	function ola($texto = "mundo", $periodo = "Bom dia"){
		echo "Olá $texto! $periodo!<br>";
	}

	echo ola();
	echo ola("Pedro", "Boa noite");
	echo ola("Bernardete", "Boa tarde");
?>