<?php

	$conn = new PDO("mysql:dbname=dbphp7;host:localhost:3306", "root", "root");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES(:LOGIN, :PASSWORD)");


	$login = "Felipe";
	$password = "felipe@felipe";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();

	echo "Inserido OK!!!";

?>