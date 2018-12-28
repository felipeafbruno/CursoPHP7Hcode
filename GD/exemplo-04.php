<?php

	header("Content-type: image/jpeg");

	$file = "wallpaper.jpg";

	$new_width = 256;
	$new_height = 256;

	//Método list() - cria uma lista de variáveis.
	list($old_width, $old_height) = getimagesize($file);

	//Thumbnail
	$new_image = imagecreatetruecolor($new_width, $new_height);

	//Imagem original
	$old_image = imagecreatefromjpeg($file);

	/*
		 - VARIÁVEIS:
			dst_image - imagem destino ou nova imagem que será utilizada;
			src_image - imagem de origem;
			dst_x, dst_y - indicam a área que deseja extrair da imagem de destino;
			src_x, src_y - indicam a área que deseja extrair da imagem de origem;
			dst_w, dst_height - nova largura da imagem de destino, nova altura da imagem de destino;
			src_w, src_height - largura da imagem de origem, nova altura da imagem de origem;
	*/
	imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

	imagejpeg($new_image);

	imagedestroy($old_image, $new_image);

?>