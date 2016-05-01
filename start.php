<?php
	include("config.php");
	session_start();
	if(($_SESSION['insc']==NULL) || ($_SESSION['name']==NULL)){
		$_SESSION['insc'] = -1;
		$_SESSION['name'] = "invité";

	}
?>
