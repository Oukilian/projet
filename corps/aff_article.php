
<?php
	$req = $bdd->prepare("SELECT * FROM msg where id = ?");
	$id = $_SESSION['id'];
	$req->execute(array($id));
	while($donnee = $req->fetch()){
		echo "<h1>".$donnee['titre']."</h1><br/><br/><p>".$donnee['article']."</p>";
	}
	echo "<br/><br/>";
	$req->closeCursor();
?>

