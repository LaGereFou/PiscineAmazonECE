<?php  
$database = "eceamazon";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($_POST["buttonaddvd"]) {
		$email= isset($_POST["email"])?$_POST["email"] : "";
		$pseudo= isset($_POST["pseudo"])?$_POST["pseudo"] : "";
		$mdp= isset($_POST["mdp"])?$_POST["mdp"] : "";
		$nom= isset($_POST["nom"])?$_POST["nom"] : "";
		$prenom= isset($_POST["prenom"])?$_POST["prenom"] : "";
		$pdp= isset($_POST["pdp"])?$_POST["pdp"] : "";
		$image= isset($_POST["image"])?$_POST["image"] : "";
		$erreur= "";

		if($email== "") {$erreur.= "Le champ email est vide. <br>";}
		if($pseudo== "") {$erreur.= "Le champ pseudonyme est vide. <br>";}
		if($mdp== "") {$erreur.= "Le champ mot de passe est vide. <br>";}
		if($nom== "") {$erreur.= "Le champ nom est vide. <br>";}
		if($prenom== "") {$erreur.= "Le champ prénom est vide. <br>";}
		if($pdp== "") {$erreur.= "Le champ photo de profil est vide. <br>";}
		if($image== "") {$erreur.= "Le champ image de fond est vide. <br>";}

		if ($erreur== "") {echo "Formulaire valide";}
		else {echo "Erreur : $erreur";}
		if($db_found){     
		    $sql= "INSERT INTO vendeur(email, pseudo, mdp, nom, prenom, pdp, image) VALUES ('$email','$pseudo', '$mdp','$nom','$prenom','$pdp','$image')";
		    mysqli_query($db_handle, $sql);
		    header("Location:Formulaire.php");
		}
		else{
		    echo "Database not found";
		}
	}

?>