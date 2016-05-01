<?php include('../start.php');
	
	$verif=0;	
	$req = $bdd->prepare("INSERT INTO utilisateur(pseudo, password) VALUES(?, ?)");
	$name=$_GET['pseudo'];
        $password=$_GET['pass'];
	$ver = $bdd->query('SELECT * FROM utilisateur');
	while($donnee = $ver->fetch()){
		$name2 = $donnee['pseudo'];
		echo($name);
		if($name2 == $name){
			$verif=1;
		}		
	}
	$ver->closeCursor();
	if($verif==0){
		$res = $req->execute(array($name,$password));
		$_SESSION['insc'] = 2;
	}else{
		$_SESSION['insc'] = 1;
	}
	

	header('Location:http://localhost/css/index.php');
	

?>

