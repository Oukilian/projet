
<br/>
<?php
	echo('inscription <br/><br/>');
 if($_SESSION['insc'] == 1){

	echo('pseudo déjà pris');
      }elseif($_SESSION['insc'] == 2){
	echo('inscription effectuer ');
	$_SESSION['insc'] = 0;
}
?>
<form method="get" action="membre_connection/fonc_insc.php">
	<input type="text" name="pseudo" value="pseudo"/><br/><br/>
	<input type="password" name="pass" value="pass"/><br/><br/>
	<input type="submit"/>
</form>



