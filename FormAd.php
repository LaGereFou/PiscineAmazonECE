<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$login= isset($_POST["email"])?$_POST["email"] : "";
	$pass    = isset($_POST["mdp"])?$_POST["mdp"] : "";

	if ($_POST["buttonad"]) {
		if ($db_found) {
			$sql = "SELECT * FROM admin";
			if ($login != "") {
				$sql .= " WHERE Email LIKE '%$login%'";
				if ($pass != "") {
					$sql .= " AND Mdp LIKE '%$pass%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) {
				echo "Admin non trouvé";
				header("Location:Formulaire.php");
			} else {
				while($data = mysqli_fetch_assoc($result)) {
					echo "Email: " . $data['email'] . '<br>';
		        	echo "Mdp:" . $data['mdp'] . '<br>';
			        echo "Nom: " . $data['nom'] . '<br>';
			        echo "Photo de profil: " . $data['pdp'] . '<br>';
			        echo "Image de fond: " . $data['image'] . '<br>'. '<br>';
			    }

			        $sql = "SELECT * FROM vendeur";
			        $result = mysqli_query($db_handle, $sql);
			        while($data = mysqli_fetch_assoc($result)){
					echo "Email: " . $data['email'] . '&nbsp'. '&nbsp'. '&nbsp';
					echo "Pseudo: " . $data['pseudo'] . '&nbsp'. '&nbsp'. '&nbsp';
		        	echo "Mdp:" . $data['mdp'] . '&nbsp'. '&nbsp'. '&nbsp';
			        echo "Nom: " . $data['nom'] . '&nbsp'. '&nbsp'. '&nbsp';
			        echo "Prenom: " . $data['prenom'] . '&nbsp'. '&nbsp'. '&nbsp';
			        echo "Pdp: " . $data['pdp'] . '&nbsp'. '&nbsp'. '&nbsp';
			        echo "Image: " . $data['image'] . '&nbsp'. '&nbsp'. '&nbsp'. '<br>'. '<br>';
				}
			    
			}
		} else {
		echo "Database not found";
		}
	}

?>

<html>
<head>
	<title>Suppression</title>
</head>
<body>
	<h1>Suppression Vendeur :</h1>
		<form method="post" action="SuppVd.php">
			<fieldset>
				<label for="email">Saisissez l'email du vendeur à supprimer:</label><input type="varchar" name="email"/>
				<br/> <br/>
			</fieldset>
			<input type="submit" name= "buttondelad" value="Confirmer saisie" />
		</form>
</body>
</html>