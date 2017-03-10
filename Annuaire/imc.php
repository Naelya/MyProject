<!DOCTYPE html>
<html>
<head>
	<title> Calcul de l'IMC </title>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
	<meta charset="utf-8">
	<script>document.write('<script src="http://' + (location.host || 'http://127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>

</head>
<body>

	<?php $pageName = 'Imc'; ?>
	<?php include ("navbar.php"); ?> 

	<!--<header>
		<nav>
			<h1><a href="test.php">My Site</a></h1>
			<ul>
				<li><a href="test.php">Home</a></li>
				<li><a href="imc.php">IMC</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</nav>
	</header>-->
	<div class=container >

		<h3 align="center"> Sur cette page du site vous pouvez calculer votre IMC grâce au formulaire ci-dessous</h3>

		<div class="divform">
			<form action="" method="POST">
				<fieldset>
					<legend> Calcul de l'IMC</legend>
					<label for="pseudo"> Entrez votre pseudo: </label>
					<input type="text" name="pseudo"><br><br>
					<label for="taille"> Entrez votre taille(en m): </label>
					<input type="text" name="taille"><br><br>
					<label for="poids"> Entrez votre poids: </label>
					<input type="text" name="poids"><br><br>
					<input type="submit" name="sendForm" value="Calculer">
				</fieldset>
			</form>
		</div><!--divform-->
	</div><!--container-->

	<?php

		if (isset($_POST['sendForm'])) {
			
			$pseudo = $_POST["pseudo"];
			$taille = $_POST["taille"];
			$poids = $_POST["poids"];

			$resultat_Imc = round ($poids / ($taille * $taille)); 

			echo "Votre pseudo est ".$pseudo; ?><br>
			<?php echo "Votre taille est ".$taille; ?><br>
			<?php echo "Votre poids est ".$poids; ?><br>
			<?php echo "Votre IMC après calcul est de ".$resultat_Imc;

			if ($resultat_Imc >= 22 && $resultat_Imc < 25 ){

				?> <br> <?php echo "Vous avez une corpulence normale";
			}
		}
	?>
	
	<?php

		$fp=fopen("compteur.txt","r+");
		$nb_visites = fgets($fp,11);
		$nb_visites = $nb_visites+1;

		fseek($fp, 0);
		fputs($fp, $nb_visites);
		fclose($fp);
		//$tout=file_get_contents("exo10.html");

		//echo ".$tout.";
		
	include ("footer.php");?>

	
</body>
</html>