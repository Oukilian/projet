<article>
<form method="post" action="corps/fonc_env_com.php">
	<?php	
		if($_SESSION['name'] == "invité"){
			echo "<input type='text'" ."name='pseudo'"."value='pseudo' /><br/>";
		}
	?>
	<textarea name="commentaire" id="commentaire" rows="10" cols="40">commenter ici ...</textarea>
	<?php echo "<br />"; ?>
	<input type="submit" id="envoyer" value="commenter" />

</form>
</article>