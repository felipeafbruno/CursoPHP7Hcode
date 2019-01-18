<?php 

	//$data = ["nome" => "Felipe"]; 

	/*
		Paramêtros:
			1 - 1º paramêtro o formato binario para conversão. 
			2 - 2º paramêtro é a string que deseja converter.

		//pack(): função para conversão de dados tipo string em dados do tipo binário.
		define('SECRET', pack('a16', 'senha'));	
	*/

	/*
		//MCRYPT(depreciado apartir da version 7.2.* do PHP) :
		//função mcrypt_encrypt precisa de uma chave de 16 bits.
		$mcrypt = mcrypt_encrypt(
			MCRYPT_RIJNDAEL_128,
			SECRET,
			json_encode($data),
			MCRYPT_MODE_ECB
		);
		
		var_dump(base64_encode($mcrypt));
	*/


	/*
		//CRYPT:

		$hash = password_hash(json_encode($data), PASSWORD_DEFAULT);

		$crypt = crypt(json_encode($data), $hash);

		function check($data, $hash){
			return (crypt(json_encode($data), $hash) === $hash);
		}

		if(check($data, $hash) == true){
			echo "ok";
		} else {
			echo "erro";
		}
	*/

	//OPENSSL
	define('SECRET_IV', pack(('a16'), 'senha'));
	define('SECRET', pack('a16', 'senha'));

	$data = ["nome" => "Felipe"];

	$openssl = openssl_encrypt(
		json_encode($data),
		'AES-128-CBC',
		SECRET,
		0,
		SECRET_IV
	);

	echo $openssl;

	$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

	var_dump(json_encode($string, true));

 ?>