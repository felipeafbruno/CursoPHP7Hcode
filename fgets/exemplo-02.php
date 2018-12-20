<?php

	$filename = "logo.png";

	//file_get_contest() lê o conteúdo de uma arquivo e retorna uma String em binário.
	//base64_encode() transforma o tipo do conteúdo passado como paramêtro em base64.
	$base64 = base64_encode(file_get_contents($filename));

	$fileinfo = new finfo(FILEINFO_MIME_TYPE);

	$mimetype = $fileinfo->file($filename);

	$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" targe="_blank">Link para Imagem</a>
<img src="<?=$base64encode?>" alt="logo.png" >