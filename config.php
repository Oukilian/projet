<?php
	
	$admit= root;
	$password= toor;
	$host= localhost;
	$db= utilisateur;	
	$db=projet;
	try {
	$bdd= new PDO('mysql:host=localhost;dbname=projet;charset=utf8' ,'root', 'toor');
	//echo "connection effectué base de donnée utilisateur<br/>";
	
	$bdd_com= new PDO('mysql:host=localhost;dbname=projet_article_blog;charset=utf8' ,'root', 'toor');
	//echo "connection effectué base de donnée commentaire";
	}

	catch(Exception $e){
	//echo "connection échoué ";

	}

	?>
