<?php
	if($_SESSION['name'] != "invité"){
		include('membre.php');
	}else{
		echo "bienvenu ".$_SESSION['name'];
		include('membre_connection/con.php');
		include('membre_connection/inscription.php');
	}
	
?>
