<?php

	$conn = new PDO("mysql:dbname=dbphp7;host:localhost:3306", "root", "root");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID");

	$login = "Felipe";
	$password = "felipe@felipe";
	$id = 3;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Alterado OK!!!";

?>