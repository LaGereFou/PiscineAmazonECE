<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$login= isset($_POST["email"])?$_POST["email"] : "";
	$pass    = isset($_POST["mdp"])?$_POST["mdp"] : "";
	$pseudo= isset($_POST["pseudo"])?$_POST["pseudo"] : "";

	if ($_POST["buttonvd"]) {
		if ($db_found) {
			$sql = "SELECT * FROM vendeur";
			if ($login != "") {
				$sql .= " WHERE Email LIKE '%$login%'";
				if ($pseudo != "") {
					$sql .= " AND Pseudo LIKE '%$pseudo%'";
					if ($pass != "") {
						$sql .= " AND Mdp LIKE '%$pass%'";
					}
				}
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) {
				echo "Vendeur non trouvé";
				header("Location:Formulaire.php");
			} else {
				while($data = mysqli_fetch_assoc($result)) {
					echo "Email: " . $data['email'] . '<br>';
					echo "Pseudo: " . $data['pseudo'] . '<br>';
		        	echo "Mdp:" . $data['mdp'] . '<br>';
			        echo "Nom: " . $data['nom'] . '<br>';
			        echo "Prenom: " . $data['prenom'] . '<br>';
			        echo "Pdp: " . $data['pdp'] . '<br>';
			        echo "Image: " . $data['image'] . '<br>';
					}
				} 
			}
		else {
		echo "Database not found";
		}
	}

?>

<html>
	<head>
	    <title>Ajouter objet</title>
	</head>
	<body>
	    <h1>Création Item :</h1>
	        <form method="post" action="Additem.php">
	            <fieldset>
	                <label for="id">ID:</label><input type="number" name="id"/>
	                <br/> <br/>
	                <label for="titre">Titre:</label><input type="text" name="titre"/>
	                <br/> <br/>
	                <label for="prix">Prix:</label><input type="float" name="prix"/>
	                <br/> <br/>
	                <label for="vendeur">Vendeur:</label><input type="text" name="vendeur"/>
	                <br/> <br/>
	                <label for="description">Description:</label><input type="text" name="description"/>
	                <br/> <br/>
	                <label for="image">Image item:</label><input type="text" name="image"/>
	                <br/> <br/>
	                <label for="qte">Quantitée:</label><input type="number" name="qte"/>
	                <br/> <br/>
	                <label for="categorie">Catégorie:</label><select type="form-control" name="categorie"/>
	                <option name="livres">Livres</option> 
	                <option name="sportetloisir">Sportetloisir</option>
	                <option name="musique">Musique</option>
	                <option name="vetements">Vêtements</option>
	                </select>
	                <br/> <br/>
	                <label for="auteur">Auteur:(*seulement pour les livres)</label><input type="text" name="auteur"/>
	                <br/> <br/>
	                <label for="maison">Maison d'édition:(*seulement pour les livres)</label><input type="text" name="maison"/>
	                <br/> <br/>
	                <label for="sport">Type de sport:(*seulement pour les sports et loisirs)</label><input type="text" name="sport"/>
	                <br/> <br/>
	                <label for="marque">Marque de sport:(*seulement pour les sports et loisirs)</label><input type="text" name="marque"/>
	                <br/> <br/>
	                <label for="artiste">Artiste:(*seulement pour la catégorie musique)</label><input type="text" name="artiste"/>
	                <br/> <br/>
	                <label for="date">Date de sortie:(*seulement pour la catégorie musique)</label><input type="date" name="date"/>
	                <br/> <br/>
	                <label for="sexe">Sexe:(*seulement pour la catégorie vêtement)</label><select type="form-control" name="sexe"/>
	                <option name="homme">Homme</option> 
	                <option name="femme">Femme</option>
	                </select>
	                <br/> <br/>
	                <label for="taille">Taille:(*seulement pour la catégorie vêtement)</label><select type="form-control" name="taille"/>
	                <option name="s">S</option> 
	                <option name="m">M</option>
	                <option name="l">L</option>
	                <option name="xl">XL</option>
	                </select>

	            </fieldset>
	            <input type="submit" name="buttonadditem" value="Confirmer création" />
	        </form>
	    <h1>Suppression Item :</h1>
			<form method="post" action="Delitem.php">
				<fieldset>
					<label for="titre">Saisissez le titre de l'item à supprimer:</label><input type="text" name="titre"/>
					<br/> <br/>
				</fieldset>
				<input type="submit" name= "buttondelitem" value="Confirmer suppression" />
			</form>
	</body>
</html>

