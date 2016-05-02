<?php
	include('../start.php');
	$_SESSION['id'] = $_GET['id'];
	header('Location:http://localhost/projet/index.php');
?>
