<?php
	
	$ver = $bdd->query("SELECT * FROM msg");
	while($donnee = $ver->fetch()){
		$line = $donnee['id'];
		echo "$line";
	}
?>
