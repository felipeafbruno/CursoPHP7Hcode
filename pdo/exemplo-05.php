<?php 
	$conn = new PDO("mysql:dbname=dbphp7;host:localhost:3306", "root", "root");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE id_usuario = ?");

	$id = 2;

	$stmt->execute(array($id));

	//$conn->rollback();
	$conn->commit();
	
	echo "Deletado OK!!!";
?>