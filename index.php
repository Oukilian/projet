<?php include('start.php'); ?>
<html>

	<head>

		<meta charset="utf-8"/>
		<title>blog</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>
    I		
		
		<div id="header"><p>HEADER DU BLOG</p>
			<?php include('head.php'); ?>

		</div>
		<div id="sujet">SUJET DU JOUR
				<?php include('sujet_recent/sujet_recent.php'); ?>
		</div>
		<div id="co">
			<div id="connection">
				<?php include('membre_connection/connection.php');?>
			</div>		
		</div>
		<div id="corps">
			<?php include('corps/corps.php');
			     //include('corps/aff_comm.php');
			     //include('corps/com.php');

 ?>
		</div>

		<div id="footer">FOOTER DE LA PAGE</div>

	</body>



</html>
