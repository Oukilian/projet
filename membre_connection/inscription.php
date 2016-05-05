
<br/>
<?php
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
	<input type=image align=middle border=0 src="css/image/inscription.png" width=140px height=103.5px  value="Inscription"/>

</form>



