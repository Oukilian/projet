<?php
    
	$ver = $bdd->query('SELECT * FROM msg ORDER BY id DESC');
	echo("<br />");
    $cpt = 0;
	while($donnee = $ver->fetch()){
        if($cpt < 10){
                $cpt = $cpt+1;
        		$title = $donnee['titre'];
		        echo"<a href=","corps/fonc_associe_id.php?id=".$donnee['id']."<h2>".$title."</h2></a><br/>";

        }
		//$title = $donnee['titre'];
		//echo"<a href=","corps/fonc_associe_id.php?id=".$donnee['id']."<h2>".$title."</h2></a><br/>";

	}
	
?>
