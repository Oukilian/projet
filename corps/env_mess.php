<?php
	include('../start.php');
	
	$req = $bdd->prepare("INSERT INTO msg(pseudo, titre, article) VALUES(?, ?, ?)");
	
	$nom = $_SESSION['name'];
	$title = $_POST['title'];
	$article = $_POST['message'];
	$res = $req->execute(array($nom ,$title, $article));

	$req_comm = $bdd_com->prepare('CREATE TABLE `projet_article_blog`.`?` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(40) NOT NULL , `title` VARCHAR(40) NOT NULL , `ommentaire` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;');
		//echo "requete préparer";
		$res = $req_comm->execute(array($title));
		//echo "requete executer";	

	header('Location:http://localhost/projet/index.php');
?>
