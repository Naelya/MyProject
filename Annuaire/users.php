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
	<title> Liste utilisateurs </title>
	<link rel="stylesheet" type="text/css" href="monstyle.css">
	<meta charset="utf-8">
	<script>document.write('<script src="http://' + (location.host || 'http://127.0.0.1').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
	</script>
</head>
<body>

	<?php $pageName = 'Users'; ?>
	<?php include ("navbar.php"); ?> 

	<div class="container">	
	<h1>Rajouter un utilisateur</h1>

	<form action="" method="POST" name="form_ajout">
		<fieldset>
			<legend> Veuillez renseigner ces informations </legend>
			<p><label for="prenom_form"> Prénom : </label>
			<input type="text" name="prenom_form"></p>
			<p><label for="nom_form"> Nom : </label>
			<input type="text" name="nom_form"></p>
			<p><label for="numero_form"> Numéro de téléphone : </label>
			<input type="text" name="numero_form"></p>
			<p><label for="mail_form"> Adresse mail : </label>
			<input type="text" name="mail_form"></p>
			<p><label for="mdp_form"> Mot de passe : </label>
			<input type="password" name="mdp_form"></p>
			<input type="submit" name="inserer" value="Insérer">
		</fieldset>
	</form>
	
	<h1>Supprimer un utilisateur</h1>

	<form action="" method="POST" name="form_del">
		<fieldset>
			<legend> Veuillez renseigner ces informations </legend>
			<p><label for="prenom_del"> Prénom : </label>
			<input type="text" name="prenom_del">
			<input type="submit" name="delete" value="Supprimer">
		</fieldset>
	</form>

	</div>


	<?php			
		if(isset($_POST['form_ajout']))
		{

			$prenom_form = $_POST['prenom_form'];
			$nom_form = $_POST['nom_form'];
			$numero_form = $_POST['numero_form'];
			$mail_form = $_POST['mail_form'];
			$mdp_form = $_POST['mdp_form'];

			$sql2 = "INSERT INTO members (prenom, nom, telephone, mail, mdp) VALUES ('$prenom_form','$nom_form','$numero_form','$mail_form','$mdp_form')";
			$qry2 = mysqli_query($mysqli, $sql2) or die ('Erreur SQL' .$sql2.'<br/>'.mysqli_error($mysqli));
			
		}

		if(isset($_POST['form_del'])){

			$prenom_del = $_POST["prenom_del"];
			$sql3 = "DELETE FROM `members` WHERE `prenom`='$prenom_del'";
			$qry3=mysqli_query($mysqli, $sql3) or die ('Erreur SQL' .$sql3.'<br/>'.mysql_error($mysqli));

			if ($qry3)
			{
				echo "l'utilisatuer a été dupprimé";
			}
			else
				echo "Suppression échouée";
		}


	$mysqli->close();
	?> 

	<?php include ("footer.php"); ?>
</body>
</html>