<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title> Formulaire connexion </title>
		<link href="Formulairecss" rel="stylesheet" type="text/css"/>

	</head>

	<body>
		<h1>Connexion Admin</h1>
		<form method="post" action="FormAd.php">
			<fieldset>
				<label for="email">Email:</label><input type="varchar" name="email" placeholder="Ex: hudo.fullgerbe@edu.ece.fr"/>
				<br/> <br/>
				<label for="mdp">Mot de passe:</label><input type="password" name="mdp"/>
			</fieldset>
			<input type="submit" name= "buttonad" value="Confirmer Saisie" />
		</form>
		
		<h1>Connexion Vendeur</h1>
		<form method="post" action="FormVend.php">
			<fieldset><label for="email">Email:</label><input type="varchar" name="email" placeholder="Ex: hudo.fullgerbe@edu.ece.fr"/>
				<br/> <br/>
				<label for="pseudo">Pseudonyme:</label><input type="varchar" name="pseudo" placeholder="Ex: hudo fullgerbe"/>
				<br/> <br/>
				<label for="mdp">Mot de passe:</label><input type="password" name="mdp"/>
			</fieldset>
			<input type="submit" name= "buttonvd" value="Confirmer Saisie" />
		</form>

		<h1>Connexion Acheteur</h1>
		<form method="post" action="FormAch.php">
			<fieldset>

				<label for="email">Email:</label><input type="varchar" name="email" placeholder="Ex: hudo.fullgerbe@edu.ece.fr"/>
				<br/> <br/>
				<label for="mdp">Mot de passe:</label><input type="password" name="mdp"/>
			
			</fieldset>
			<input type="submit" name= "buttonach" value="Confirmer Saisie" />
		</form>

			<h1>Création Acheteur</h1>
			<form method="post" action="FormAddAch.php">
				<fieldset>
					<h2>Coordonnées</h2>
					<label for="email">Email:</label><input type="varchar" name="email" placeholder="Ex: hudo.fullgerbe@edu.ece.fr"/>
					<br/> <br/>
					<label for="mdp">Mot de passe:</label><input type="password" name="mdp"/>
					<br/> <br/>
					<label for="nom">Nom:</label><input type="text" name="nom"/>
					<br/> <br/>
					<label for="prenom">Prénom:</label><input type="text" name="prenom"/>
					<br/> <br/>
					<label for="adresse">Adresse:</label><input type="text" name="adresse"/>
					<br/> <br/>
					<label for="cpost">Code Postal:</label><input type="number" name="cpost"/>
					<br/> <br/>
					<label for="ville">Ville:</label><input type="text" name="ville"/>
					<br/> <br/>
					<label for="pays">Pays:</label><input type="text" name="pays"/>
					<br/> <br/>
					<label for="ntel">Numéro de téléphone:</label><input type="number" name="ntel"/>
					<br/> <br/>
					<h2>Moyen de paiement</h2>
					<label for="tcarte">Type de carte:</label><select type="form-control" name="tcarte"/>
	   				<option name="mastercard">Mastercard</option> 
	    		    <option name="visa">Visa</option>
	  				</select>
					<br/> <br/>
					<label for="ncarte">Numéro de carte:</label><input type="number" name="ncarte"/>
					<br/> <br/>
					<label for="dcarte">Date de carte:</label><input type="date" name="dcarte"/>
					<br/> <br/>
					<label for="ccarte">Crypto de carte:</label><input type="number" name="ccarte"/>
					<br/> <br/>
				</fieldset>
				<input type="submit" name="buttonaddach" value="Confirmer Saisie" />
			</form>

			<h1>Création Vendeur</h1>
			<form method="post" action="FormAddVd.php">
				<fieldset>
					<h2>Coordonnées</h2>
					<label for="email">Email:</label><input type="varchar" name="email"/>
					<br/> <br/>
					<label for="pseudo">Pseudonyme:</label><input type="varchar" name="pseudo"/>
					<br/> <br/>
					<label for="mdp">Mot de passe:</label><input type="password" name="mdp"/>
					<br/> <br/>
					<label for="nom">Nom:</label><input type="varchar" name="nom"/>
					<br/> <br/>
					<label for="prenom">Prénom:</label><input type="varchar" name="prenom"/>
					<br/> <br/>
					<label for="pdp">Photo de profil:</label><input type="text" name="pdp"/>
					<br/> <br/>
					<label for="image">Image fond:</label><input type="text" name="image"/>
					<br/> <br/>
				</fieldset>
				<input type="submit" name="buttonaddvd" value="Confirmer Saisie" />
			</form>

	</body>

</html>

