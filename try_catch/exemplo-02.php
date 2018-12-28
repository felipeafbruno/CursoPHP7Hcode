<?php

	function trataNome($name) {

		if(!$name) {

			throw new Exception("Nenhum nome foi informado" . "<br />",1);

		}

		echo ucfirst($name)."<br />";

	}

	try {

		trataNome("felipe");
		trataNome("");

	} catch(Exception $ex) {

		echo $ex->getMessage();

	} finally {

		echo "Executou bloco try";

	}

?>