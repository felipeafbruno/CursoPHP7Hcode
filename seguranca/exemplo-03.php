<?php

	$pasta = "arquivo";

	$permição = "0775";

	if(!is_dir($pasta)) mkdir($pasta, $permissão);

	echo "Diretório criado com sucesso";

?>