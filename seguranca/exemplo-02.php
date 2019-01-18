<?php

	$id = (isset($_GET["id_usuario"])?$_GET["id_usuario"]:1);

	if(!is_numeric($id) || strlen($id) > 5) {

		exit("Pegamos você!");

	}	

	$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

	$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";

	$exec = mysqli_query($conn, $sql);

	while($resultado = mysqli_fetch_object($exec)) {

		var_dump($resultado);

	}	

?>