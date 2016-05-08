<?php
	include('../start.php');
	if($_SESSION['name'] != "invité"){
		$name=$_SESSION['name'];
	}else{
		$name = $_POST['pseudo'];
	}
	
	$commentaire = $_POST['commentaire'];
	$article_name = $_SESSION['article_name'];
	$cpt = 0;
	echo " ".$article_name." ".$name." ".$commentaire." ";
 	$req = $bdd->query("SELECT id_article FROM commentaire");
	while($donnee = $req->fetch()){
		if($donnee['id_article'] == $article_name){
			$cpt = $cpt + 1;
		}
	}
	$req->closeCursor();
	$id_com = $article_name."_".$cpt;
	echo " ".$id_com;
	$sql = "INSERT INTO commentaire (pseudo,commentaire,id_article,id_com_article,date_envoye) values ('".$name."','".$commentaire."','".$article_name."','".$id_com."', NOW())";
	echo $sql;
	$rez = $bdd->prepare($sql);
	$res = $rez->execute();
	
	header('Location:http://localhost/projet/index.php');
?>
