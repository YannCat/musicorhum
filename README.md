# Advenir MGP


Pour que le scripte soit fonctionnel, créer un fichier "pdo.php" et coller le code ci-dessous en complétant avec vos identifiants de connexion:


	<?php
		$hote = '';
		$port = "";
		$nom_bdd = '';
		$utilisateur = '';
		$mot_de_passe ='';
		$loginmdp = "";
		$user_id = '';

		try {
			//On test la connexion à la base de donnée
			$pdo = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bdd, $utilisateur, $mot_de_passe);
			//$pdo->exec('SET NAMES utf8');

		} catch(Exception $e) {
			//Si la connexion n'est pas établie, on stop le chargement de la page.
			//reponse_json($success, $data, 'Echec de la connexion à la base de données');
			echo "soucis de connexion à la BD";
			exit();
		}
	?>
