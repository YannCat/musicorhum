<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<!--<link rel="shortcut icon" href="../img/favicon.ico" />-->
		<title>Music O'Rhum</title>
	</head>
	<body>
		<form method = "post" action = "insert_db.php">
			<center>
				<p> <label for = "nom"> Nom de l'enceinte </label> : <input type = "text" name = "nom" id = "nom" required /> </p>
				<p> <label for = "marque"> Marque </label> : <input type = "text" name = "marque" id = "marque" required /> </p>
				<p> <label for = "tarif"> Prix </label> : <input type = "number"  step="0.01" name = "tarif" id = "tarif" /> </p>
				<p> <label for = "liens"> Liens vers le site d'achat </label> : <input type = "url" name = "liens" id = "liens" placeholder="https://musicorhum.com"/> </p>
				<p> <label for = "puissance"> Puissance </label> : <input type = "number" name = "puissance" id = "puissance" placeholder="400"/> Watts</p>
				<p> <label for = "autonomie"> Autonomie </label> : <input type = "number" name = "heure" id = "heure" placeholder="4"/> Heure(s) et <input type = "number" name = "minute" id = "minute" placeholder="30"/> Minute(s)</p>
				<p> <label for="jack">Jack</label> <input type="checkbox" id="jack" name="jack"> </p>
				<p> <label for="wifi">Wifi</label> <input type="checkbox" id="wifi" name="wifi"> </p>
				<p> <label for="bluetooth">Bluetooth</label> <input type="checkbox" id="bluetooth" name="bluetooth"> </p>
				<p> <label for = "poid"> Poids </label> : <input type = "number" step="0.01" name = "poid" id = "poid" placeholder="4,6"/> Kg</p>
				<p> <label for = "couleur"> Couleur </label> : <input type = "text" name = "couleur" id = "couleur" placeholder="Blouge"/> </p>
				<p> <label for = "forme"> Forme </label> : <input type = "text" name = "forme" id = "forme" placeholder="Cubique"/> </p>
				<p> <label for="eclairage">Eclairage</label> <input type="checkbox" id="eclairage" name="eclairage"> </p>
				<p> Dimension <label for = "hauteur"> H </label> : <input type = "number" step="0.01" name = "hauteur" id = "hauteur" placeholder="25"/> cm,
				 <label for = "longueur"> L </label> : <input type = "number" step="0.01" name = "longueur" id = "longueur" placeholder="50"/> cm,
				 <label for = "largeur"> l </label> : <input type = "number" step="0.01" name = "largeur" id = "largeur" placeholder="15"/> cm </p>
				<p> <input type = "submit" value = "Valider"/> </p>
			</center>
		</form>
	</body>
</html>
