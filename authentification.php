<?php
if ($_POST["buttonstatut"]) {
	if(isset($_POST["statut"])?$_POST["statut"] : ""=="admin"){
		header("Location:index.php");
	}
	if(isset($_POST["statut"])?$_POST["statut"] : ""=="vendeur"){
		header("Location:index.php");
	}
	if(isset($_POST["statut"])?$_POST["statut"] : ""=="acheteur"){
		header("Location:firstacheteur.php");
	}
	}
?>