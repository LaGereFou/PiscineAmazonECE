<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$login= isset($_POST["email"])?$_POST["email"] : "";

	if ($_POST["buttondelad"]) {
		if ($db_found) {
			$sql = "SELECT * FROM vendeur";
				if ($login != "") {
					$sql .= " WHERE Email LIKE '%$login%'";
					
				}
		$result = mysqli_query($db_handle, $sql);

		if (mysqli_num_rows($result) == 0) {
				echo "Vendeur non trouvé";
			} 
		else {
				$sql= "INSERT INTO vendeur(email, pseudo, mdp, nom, prenom, pdp, image) VALUES ('$email','$pseudo', '$mdp','$nom','$prenom','$pdp','$image')";
		    	mysqli_query($db_handle, $sql);

				while($data = mysqli_fetch_assoc($result)) {
					echo "Email: " . $data['email'] . '<br>';
		        	echo "Mdp:" . $data['mdp'] . '<br>';
			        echo "Nom: " . $data['nom'] . '<br>';
			        echo "Photo de profil: " . $data['pdp'] . '<br>';
			        echo "Image de fond: " . $data['image'] . '<br>'. '<br>';
			    }
			}
		 }else {
		echo "Database not found";
		}		
	}
?>