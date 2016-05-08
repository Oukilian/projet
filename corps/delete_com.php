<?php	include('../start.php');
	$id_com= $_GET['id_com'];
	$sql = "DELETE FROM commentaire WHERE id_com_article='".$id_com."'";
	$req = $bdd->prepare($sql);
	$req->execute();
	echo $sql." ".$id_com;
	header('Location:http://localhost/projet/index.php');

?>
