<?php

	//scandir() função para scannear diretório.
	$images = scandir("images");

	$data = array();

	foreach ($images as $img) {
		
		if(!in_array($img, array(".", ".."))) {

			$filename = "images" . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			//filesize() retorna o tamanho do arquivo do como paramêtro em bytes. 
			$info["size"] = filesize($filename);
			//date() recebe a função filemtime() que retorna a data da ultima modificação do arquivo informado como paramêtro.
			$info["modified"] = date("d/m/Y, H:i:s", filemtime($filename));

			$info["url"] = "http://localhost:8081/DIR/" . str_replace("\\", '/', $filename);

			array_push($data, $info);

		}

	}

	echo json_encode($data);

?>