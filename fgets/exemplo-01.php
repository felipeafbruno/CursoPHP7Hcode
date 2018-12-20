<?php

	$filename = "usuarios.csv";

	if(file_exists($filename)) {

		$file = fopen($filename, "r");

		$headers = explode(",", fgets($file));	

		$data = array();

		//fgets() dentro do while retorna a linha do arquivo se ainda existir caso contrario retorna FALSE.
		while($row = fgets($file)){

			$rowData = explode(",", $row);

			$linha = array();

			for($i = 0; $i < count($headers); $i++) {

				$linha[$headers[$i]] = $rowData[$i];

			}

			array_push($data, $linha);

		}

		fclose($file);

		echo json_encode($data);

	}

?>