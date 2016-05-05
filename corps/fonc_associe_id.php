<?php
	include('../start.php');
	$_SESSION['id'] = $_GET['id'];
	$req = $bdd->prepare("SELECT * FROM msg where id = ?");
	$req->execute(array($_SESSION['id']));
	while($donnee = $req->fetch()){
		$_SESSION['article_name'] = $donnee['identifi_article'];
	}
	$req->closeCursor();
	header('Location:http://localhost/projet/index.php');
?>
