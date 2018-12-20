<?php

	$conn = new PDO("mysql:dbname=dbphp7;host:localhost:3306", "root", "root");

	$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE id_usuario = :ID");

	$id = 4;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Deletado OK!!!";

?>