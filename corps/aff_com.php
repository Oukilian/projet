<?php
	include('start.php');
$reponse = $bdd->query('SELECT * FROM `première article` ORDER BY id DESC');
		while ($donnees = $reponse->fetch()){
			echo $donnees['pse']," : ",$donnees['commentaire']," "; ?> <br/> <?php
		}
?>
