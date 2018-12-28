<?php

	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
	imagestring($image, 5, 450, 350, "Felipe Bruno", $titleColor);
	imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ") . date("d/m/Y") , $titleColor);

	header("Content-Type: image/jpeg");

	//Segundo paramêtro nome do arquivo que será gerado.
	//Terceiro paramêtro qualidade da imagem gerada.
	imagejpeg($image, "certificado-" . date("Y-m-d") . ".jpg", 10);

	imagedestroy($image);

?>