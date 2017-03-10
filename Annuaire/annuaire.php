<?php

$mysqli=mysqli_connect('localhost', 'root','','annuaire');
/* Vérification de la connexion */ 
if (mysqli_connect_error()) {
    printf("Echec de la connexion: %s\n", mysqli_connect_error());
    exit();
}

//printf("Information sur le serveur : %s\n", $mysqli->host_info);

/* Fermeture de la connexion */

?>
<html>
<head>
	<title> Annuaire </title>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
	<meta charset="utf-8">
	<script>document.write('<script src="http://' + (location.host || 'http://127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>
</head>
<body>

	<?php $pageName = 'Annuaire'; ?>
	<?php include ("navbar.php"); ?> 

	<h1>Rechercher dans l'annuaire</h1>

	<form action="" method="POST" name="formannuaire">
		<fieldset>
			<legend> Rechercher un nom par : </legend>
			<p><label for="nom"> Nom:</label>
			<input type="text" name="nom"></p>
			<p><label for="numero"> Numéro de téléphone :</label>
			<input type="text" name="numero"></p>
			<input type="submit" name="valider" value="Rechercher">
		</fieldset>
	</form>

	<?php
		if(isset($_POST['valider']))
		{
			$nom = $_POST['nom'];
			$numero = $_POST['numero'];
			$sql1 = "SELECT telephone, nom FROM register_people where nom='".$nom."' OR telephone='".$numero."'";
			$qry1 = mysqli_query($mysqli, $sql1) or die ('Erreur SQL' .$sql1.'<br/>'.mysqli_error($mysqli));
			$resultat1 = mysqli_fetch_array($qry1); 

			echo "Voici les informations demandées :" ; ?> <br> <?php
			echo "Nom de la personne : ".$resultat1['nom']; ?> <br> <?php
			echo "Le numéro de télephone : ".$resultat1['telephone'];

		}
	?>
			
	<h1>Rajouter une personne dans l'annuaire</h1>

	<form action="" method="POST" name="formannuaire_ajout">
		<fieldset>
			<legend> Veuillez renseigner ces informations </legend>
			<p><label for="nom_form_ajout"> Nom</label>
			<input type="text" name="nom_form_ajout"></p>
			<p><label for="numero_form_ajout"> Numéro de téléphone</label>
			<input type="text" name="numero_form_ajout"></p>
			<input type="submit" name="inserer" value="Insérer">
		</fieldset>
	</form>


	<?php			
		if(isset($_POST['nom_form_ajout']))
		{
			$nom_form_ajout = $_POST['nom_form_ajout'];
			$numero_form_ajout = $_POST['numero_form_ajout'];

			$sql2 = "INSERT INTO register_people (nom, telephone) VALUES ('$nom_form_ajout','$numero_form_ajout')";
			$qry2 = mysqli_query($mysqli, $sql2) or die ('Erreur SQL' .$sql2.'<br/>'.mysqli_error($mysqli));
		}/*?>

	<h1>Supprimer une personne de l'annuaire</h1>

	<form action="" method="POST" name="formannuaire_del">
		<fieldset>
			<legend> Veuillez renseigner ces informations </legend>
			<p><label for="nom_form_del"> Nom</label>
			<input type="text" name="nom_form_del"></p>
			<input type="submit" name="delete" value="Supprimer">
		</fieldset>
	</form>


	<?php			
		if(isset($_POST['formannuaire_del']))
		{
			$nom_form_del = $_POST['nom_form_del'];

			$sql3 = "DELETE FROM register_people WHERE id = 3" ;
			$qry3 = mysqli_query($mysqli, $sql3) or die ('Erreur SQL' .$sql3.'<br/>'.mysqli_error($mysqli));
		}


	$mysqli->close();
	*/?> 

	<?php include ("footer.php"); ?>
</body>
</html>