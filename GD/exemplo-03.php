<?php
	
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	//Obs: o caminho da fonte utilizada no método precisa ser o caminho completo.
	//Terceiro paramêtro passado na função imagettftext() é o ângulo no quando será renderizada a imagem;
	//Quarto paramêtro é o caminho da fonte que será utilizada na imagem a ser renderizada.
	imagettftext($image, 32, 0, 320, 250, $titleColor, "C:".DIRECTORY_SEPARATOR."xampp".DIRECTORY_SEPARATOR."htdocs".DIRECTORY_SEPARATOR."GD".
		DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
	imagettftext($image, 32, 0, 375, 350, $titleColor, "C:".DIRECTORY_SEPARATOR."xampp".DIRECTORY_SEPARATOR."htdocs".DIRECTORY_SEPARATOR."GD".
		DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Felipe Bruno");
	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y") , $titleColor);

	header("Content-type: image/jpeg");

	//imagejpeg() - Mostrar imagem no browser.
	imagejpeg($image);

	imagedestroy($image);

?>