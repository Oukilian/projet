<?php
	include("config.php");
	session_start();
	if(($_SESSION['insc']==NULL) || ($_SESSION['name']==NULL) || ($_SESSION['id']==NULL) || ($_SESSION['article_name']==NULL)){
		$_SESSION['article_name'] = -1;
		$_SESSION['id'] = -1;
		$_SESSION['insc'] = -1;
		$_SESSION['name'] = "invité";
		//echo (" variable initialisé ".$_SESSION['id']." ".$_SESSION['insc']." ".$_SESSION['name']);
	}
	//echo "<br /> variable : name :".$_SESSION['name']." id :".$_SESSION['id']." insc :".$_SESSION['insc']."article :".$_SESSION['article_name'];
?>
