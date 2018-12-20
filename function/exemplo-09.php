<?php

	function teste($callback){
		//Processo Lento

		$callback();
	}

	teste(function(){
		echo "Terminou";
	});
?>