<?php
	
	$ver = $bdd->query("SELECT * FROM msg ORDER BY id DESC");
	while($donnee = $ver->fetch()){
			$title = $donnee['titre'];
			$message = $donnee['article'];
			echo"<article><a href=","corps/fonc_associe_id.php?id=".$donnee['id']."><br/><h1><img  src='css/image/taya.png' width=60px height=60px alt='taya'/> ".$title." <img  src='css/image/tael.png' width=64.5px height=81px alt='taya'/></h1><br/><br /></a><p>".$message."</p><br/></article><br/>";
	}
?>
