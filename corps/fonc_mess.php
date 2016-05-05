<?php
	
	$ver = $bdd->query("SELECT * FROM msg ORDER BY id DESC");
	while($donnee = $ver->fetch()){ 
			$title = $donnee['titre'];
			$message = $donnee['article'];
			echo"<article><a href=","corps/fonc_associe_id.php?id=".$donnee['id']."><br/>".$title."<br/><br /></a>".$message."<br/></article><br/>";	
	}
?>
