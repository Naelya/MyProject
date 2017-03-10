
		if (isset($_POST['valider']))
		{
			$nom = $_POST['nom'];
			$numero = $_POST['numero'];
			
			$req = $bdd->prepare('SELECT FROM register_people(nom, telephone) WHERE nom = :nom)');
			$req->execute(array(
			    'nom' => $nom,
			    
			    ));

			echo "Voici le nom".$nom;
		}