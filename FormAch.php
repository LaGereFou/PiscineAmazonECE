<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$login= isset($_POST["email"])?$_POST["email"] : "";
	$pass    = isset($_POST["mdp"])?$_POST["mdp"] : "";

	if ($_POST["buttonach"]) {
		if ($db_found) {
			$sql = "SELECT * FROM acheteur";
			if ($login != "") {
				$sql .= " WHERE Email LIKE '%$login%'";
				if ($pass != "") {
					$sql .= " AND Mdp LIKE '%$pass%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) {
				echo "Acheteur non trouvé";
				header("Location:Formulaire.php");
			} else {
				while($data = mysqli_fetch_assoc($result)) {
					echo "Email: " . $data['email'] . '<br>';
		        	echo "Mdp:" . $data['mdp'] . '<br>';
			        echo "Nom: " . $data['nom'] . '<br>';
			        echo "Prenom: " . $data['prenom'] . '<br>';
			        echo "Adresse: " . $data['adresse'] . '<br>';
			        echo "Code postal: " . $data['cpost'] . '<br>';
			        echo "Ville: " . $data['ville'] . '<br>';
			        echo "Pays: " . $data['pays'] . '<br>';
			        echo "Numero telephone: " . $data['ntel'] . '<br>';
			        echo "Type carte: " . $data['tcarte'] . '<br>';
			        echo "Numéro carte: " . $data['ncarte'] . '<br>';
			        echo "Date carte: " . $data['dcarte'] . '<br>';
			        echo "Cryptogramme carte: " . $data['ccarte'] . '<br>';
				}
			}
		} else {
		echo "Database not found";
		}
	}

?>