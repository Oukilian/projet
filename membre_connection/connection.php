<?php	

	if($_SESSION['name'] != "invité"){
		include('membre.php');
		if($_SESSION['name'] == "Admin"){
			include('corps/message.php');
		}else{
            //echo"voici la playlist d'un genre musical que j'aime particulièrement !!!!<br/>";
            //include('css/module_sup/deezer.php');
        }
	}else{
		echo "bienvenu ".$_SESSION['name'];
		include('membre_connection/conn.php');
		include('membre_connection/inscription.php');
	}
	
?>
