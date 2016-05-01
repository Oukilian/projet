<?php 
  include('start.php');
  
  
  $pseudo = $_POST['pseudoconnexion'];
  $mdp = $_POST['mdpconnexion'];
  $cpt = 0;
  
  if (isset($pseudo) && isset($mdp)) {
  
  $verifmdp = $bdd->query('SELECT * FROM utilisateur');
  while ($donnees = $verifmdp->fetch()) {
    if ($pseudo == $donnees['pseudo']) {
      $cpt = 1;
      if ($mdp == $donnees['password']) {
        echo "Vous êtes maintenant connecté !";
	$_SESSION['name'] = $pseudo;
      } else {
        echo "Mauvais mot de passe !";
        }
    }
    header('location:http://localhost/css/index.php');
    
    }
  }
  if ($cpt == 0) {
      echo "Ce pseudo n'a pas été enregistré.";
  }
  $verifmdp->closeCursor();
  
  ?>

