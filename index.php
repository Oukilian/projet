﻿<?php include('start.php'); ?>
<html>

	<head>

		<meta charset="utf-8"/>
		<title>blog</title>
		<link rel="stylesheet" href="css/style.css"/>
	</head>

	<body>		
		<div id="header">
            <i id="titre">Le Blog de Jordan♪♫♫</i>
			<?php 	echo("<br/>");
				include('head/return_main.php');
				include('head/head.php'); ?>

		</div>
		<div id="sujet">
				<?php
                    include('sujet_recent/profile.php');
                    include('sujet_recent/sujet_recent.php'); ?>
		</div>
		<div id="co">
			<div id="connection">
				<?php include('membre_connection/connection.php');?>
			</div>		
		</div>
		<div id="corps">
			<?php
			if($_SESSION['id'] == -1){
			     include('corps/fonc_mess.php'); 
			}
			if($_SESSION['id'] != -1){
				echo "<article>";
			    include('corps/aff_article.php');
				echo "</article><br/>";
				//echo"<article>";
				include('corps/aff_com.php');
				include('corps/env_com.php');
				//echo"</article>";
			}
 ?>
		</div>
          <img  class='branche2' src='css/image/branche2.png' alt='taya'/>

		

	</body>



</html>
