<?php

	require_once("config.php");

	echo session_save_path();

	echo "<br />";

	var_dump(session_status());

	switch(session_status()){
		case PHP_SESSION_DISABLE:
			echo "as sessões eestiverem desabilidatas";
			break;
		case PHP_SESSION_NONE:
			echo "as sessões esteverem habilitadas, mas nenhuma existir";
			break;
		case PHP_SESSION_ACTIVE:
			echo "as sessões estiverem habilitadas, e uma existir";
			break;	
	}

?>