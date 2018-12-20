<?php

	$conn = new mysqli("localhost:3306", "root", "root", "dbphp7");

	if($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
	}

	//INSTRUÇÃO SQL
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (des_login, des_senha) VALUES (?, ?)");

	$stmt->bind_param("ss", $login, $pass);

	$login = "user";
	$pass = "12345";

	$stmt->execute();

?>