<?php
	$ver = $bdd->query('SELECT * FROM msg ORDER BY id DESC');
	echo("<br />");
	while($donnee = $ver->fetch()){
		
		$title = $donnee['titre'];
		echo("<br/>".$title);

	}
	
?>
