<?php
	include('../start.php');
	$cpt = 0;
	$req = $bdd->prepare("INSERT INTO msg(pseudo, titre, article, identifi_article) VALUES(?, ?, ?,?)");
	
	$nom = $_SESSION['name'];
	$title = $_POST['title'];
	$article = $_POST['message'];
	$ver = $bdd->query("SELECT * FROM msg");
	while($donnee = $ver->fetch()){
		if($donnee['titre'] == $title){
			$cpt = $cpt + 1;
		}
		
	}
	echo $cpt;
	$id_article = $title."_".$cpt;
	echo " ".$id_article;
	$res = $req->execute(array($nom ,$title, $article,$id_article));	
	header('Location:http://localhost/projet/index.php');
?>
