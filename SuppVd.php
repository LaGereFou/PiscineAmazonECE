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
				while ($data = mysqli_fetch_assoc($result)) {
					$email = $data['email'];
					$pseudo= $data['pseudo'];
					echo $pseudo;
					echo "<br>";
				}
				$sql = "DELETE FROM iteme WHERE Vendeur = '$pseudo'";
				$result = mysqli_query($db_handle, $sql);
				$sql = "DELETE FROM vendeur WHERE Email = '$email'"; 
				$result = mysqli_query($db_handle, $sql);
			}
		 }else {
		echo "Database not found";
		}		
	}
?>