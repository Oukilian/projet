<?php
	
	$ver = $bdd->query("SELECT * FROM msg");
	while($donnee = $ver->fetch()){ 
			$title = $donnee['titre'];
			$message = $donnee['article'];
			echo("<br />$title<br /><br />$message<br /><br />");
	}
?>
