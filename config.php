<?php
   $pdo = new PDO('mysql:host=localhost','root','toor');
   $sql = "CREATE DATABASE IF NOT EXISTS `projet`";
   $pdo->prepare($sql)->execute();

	
	try {
    $req = $pdo->prepare($sql)->execute();


	$bdd= new PDO('mysql:host=localhost;dbname=projet;charset=utf8' ,'root', 'toor');
	//echo "connection effectué base de donnée utilisateur<br/>";
	
	}

	catch(Exception $e){
	//echo "connection échoué ";

	}
    if($bdd){
        $sql = "CREATE TABLE IF NOT EXISTS projet.utilisateur (
                        `id` INT(11) NOT NULL AUTO_INCREMENT ,
                        `pseudo` varchar(40) NOT NULL,
                        `password` varchar(40) NOT NULL,
                        PRIMARY KEY (`id`)) Engine=InnoDB";
        $bdd->prepare($sql)->execute();
        $sql = "CREATE TABLE IF NOT EXISTS projet.msg (
                        `id` INT(11) NOT NULL AUTO_INCREMENT ,
                        `pseudo` varchar(40) NOT NULL,
                        `titre` varchar(40) NOT NULL,
                        `article` TEXT NOT NULL,
                        `identifi_article` varchar(60) NOT NULL,
                        PRIMARY KEY (`id`)) Engine=InnoDB";
        $bdd->prepare($sql)->execute();
        $sql= "CREATE TABLE IF NOT EXISTS projet.commentaire (
                        `id` INT(11) NOT NULL AUTO_INCREMENT ,
                        `pseudo` varchar(40) NOT NULL,
                        `commentaire` TEXT NOT NULL,
                        `id_article` varchar(60) NOT NULL,
                        `id_com_article` varchar(80) NOT NULL,
                        PRIMARY KEY (`id`)) Engine=InnoDB";
        $bdd->prepare($sql)->execute();
    }

	?>
