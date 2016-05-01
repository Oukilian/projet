<br />
<p> Connexion : </p> <br />
<?php echo "Bienvenu :".$_SESSION['name']; ?>
<form method="post" action="verifconnexion.php">
	Pseudo : <input type="text" name="pseudoconnexion" /> <br />
	Mot de passe : <input type="password" name="mdpconnexion" /> <br />
	<input type="submit" value="Valider"/>
</form>
