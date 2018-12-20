<?php

	$conn = new mysqli("localhost:3306", "root", "root", "dbphp7");

	if($conn->connect_error) {
		echo "Error: " . $conn->connect_error;
	}

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY des_login");

	$data = array();

	while($row = $result->fetch_assoc()) {

		array_push($data, $row);

	}

	echo json_encode($data);

?>