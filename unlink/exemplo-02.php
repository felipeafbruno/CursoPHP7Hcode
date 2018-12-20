<?php

	if(!is_dir("images")) {

		mkdir("images");
	
	}

	//scandir() - scannear diretório e retornar um array do conteúdo.
	foreach (scandir("images") as $item) {
		if(!in_array($item, array(".", ".."))) {

			unlink("images/" . $item);

		}

	}

	echo "OK";

?>