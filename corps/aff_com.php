

<?php
	$req = $bdd->prepare("SELECT * FROM commentaire WHERE id_article=? ORDER BY id DESC");
	$name = $_SESSION['article_name'];
	$req->execute(array($name));	
	while ($donnees = $req->fetch()){
			echo "<article><br/><br/>".$donnees['pseudo']." : ".$donnees['commentaire']." "."<br/></br></article></br>";
	}
?>
