<?php
	include('start.php');

$com = $_POST['com'];
$reponse = $bdd_com->query('SELECT * FROM `première article`');
			$req = $bdd->prepare('INSERT INTO com(commentaire, pse) VALUES(:commentaire, :pse)');
			$req->execute(array(
			'commentaire' => $com,
			'pse' => $_SESSION['pseudo'],
			));
			header('Location:princi.php');


?>
