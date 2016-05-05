
<?php
	include('../start.php');
	$req = $bdd->prepare("SELECT * FROM msg where id = ?");
	$id = $_SESSION['id'];
	$req->execute(array($id));
	while($donnee = $req->fetch()){
		echo $donnee['titre']."<br/><br/>".$donnee['article'];
	}
	echo "<br/><br/>";
	$req->closeCursor();
?>

