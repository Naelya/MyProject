<!DOCTYPE html>
<html>
<head>
	<title> My Site </title>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
	<meta charset="utf-8">
	<script>document.write('<script src="http://' + (location.host || 'http://127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>

</head>
<body>
	
	<?php $pageName = 'Home'; ?>
	<?php include ("navbar.php"); ?> 
	<!--<header>
		<nav>
			<h1><a href="test.php" class="title_mysite">My Site</a></h1>
			<ul>
				<li><a href="test.php">Home</a></li>
				<li><a href="imc.php">IMC</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</nav>
	</header>-->
	<div class=container>
		
	</div>
	
	<?php

		$fp=fopen("compteur.txt","r+");
		$nb_visites = fgets($fp,11);
		$nb_visites ++;

		fseek($fp, 0);
		fputs($fp, $nb_visites);
		fclose($fp);
		//$tout=file_get_contents("exo10.html");

		//echo ".$tout.";
		?>

	<footer><p>&copy All rights reserved - Shane Abasse -
		<?php echo " Vous êtes le ".$nb_visites."visiteur" ;?></p>
	</footer>
</body>
</html>