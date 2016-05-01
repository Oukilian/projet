<?php
	include('../start.php');
	$name=$_POST['pseudo'];
	$password=$_POST['password'];
	$ver = $bdd->query("SELECT * FROM utilisateur");
	
	while($donnee = $ver->fetch()){
                $name2 = $donnee['pseudo'];
		$password2 = $donnee['password'];	
		if($name2==$_POST['pseudo'] && $password2==$_POST['password']){
			$_SESSION['name'] = $name;
			echo " Bienvenu ".$_SESSION['name'];
			break;
		 			
		}
        }
        $ver->closeCursor();


	header('Location:http://localhost/css/index.php');

?>
