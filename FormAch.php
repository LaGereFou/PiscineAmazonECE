<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', 'root');
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
				header("Location:index.php");
			} else {
				$data = mysqli_fetch_assoc($result);
                    
?> 