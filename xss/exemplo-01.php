<form method="POST">
	
	<input type="text" name="busca" />
	<button type="submit">Enviar</button>

</form>

<?php

	$_POST['busca'] = '<a href="#"><strong>Oi</strong></a>';

	if(isset($_POST['busca'])) {

		//echo strip_tags($_POST['busca'], "<strong>");
		echo htmlentities($_POST['busca']);

	}

?>