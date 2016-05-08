
<i><?php
	date_default_timezone_set('Europe/Paris');
	date_default_timezone_get();
	$date = date("d-m-Y");
	$heure = date("H:i");
    echo"<img  class='branche' src='css/image/branche.png' alt='taya'/>";
	echo("$date $heure");
	$_SESSION['date'] = $date.$heure;
?>
</i>
