<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$sql = "SELECT * FROM iteme";
	$result = mysqli_query($db_handle, $sql);
	
?>

<html>
<head>
	<title>Affichage item</title>
</head>
<body>
	<?php 
	while($data = mysqli_fetch_assoc($result)) 
	{
		$id = $data['id'];
		$titre1 ="Titre: " . $data['titre'] . '<br>';
		$prix1="Prix: " . $data['prix'] . '<br>';
    	$vendeur1="Vendeur:" . $data['vendeur'] . '<br>';
        $description1="Description: " . $data['description'] . '<br>';
        $image1="Image: " . $data['image'] . '<br>';
        $qte1="Quantitée: " . $data['qte'] . '<br>';
        $categorie1="Catégorie: " . $data['categorie'] . '<br>' ;
        $categorie2 = $data['categorie'];
        $auteur1="Auteur: " . $data['auteur'] . '<br>';
        $maison1="Maison: " . $data['maison'] . '<br>';
        $sports1="Type de sport: " . $data['sports'] . '<br>';
        $marque1="Marque de sport: " . $data['marque'] . '<br>'; 
        $artiste1="Artiste: " . $data['artiste'] . '<br>';
        $dates1="Date de sortie: " . $data['dates'] . '<br>';
        $sexe1="Sexe: " . $data['sexe'] . '<br>';
        $taille1="Taille: " . $data['taille'] . '<br>';
        echo $titre1;
        echo $prix1;
        echo $vendeur1;
        echo $description1;
        echo $image1;
        echo $categorie1;
        echo $qte1;
        

        $Sportetloisir = "Sportetloisir";

        if ($categorie2=="Livres")
        {
        	echo $auteur1;
        	echo $maison1;
        }
        else if($categorie2== "Sportetloisir")
        {
        	echo $sports1;
        	echo $marque1;
        }
        else if($categorie1=="Musique")
        {
        	echo $artiste1;
        	echo $dates1;
        }
        else if($categorie1=="Vêtements")
        {
        	echo $sexe1;
        	echo $taille1;
        }
        ?> 
        <form action="Panier.php" method="post">
        <label for="qte">Quantitée:</label><input type="number" name="qte"/>
	    <br>
        <label for="titre">Titre de l'item:</label><input type="number" name="titre"/>
        <br>
        <input type ="submit" name="inserer" value ="Acheter"></form> <?php
	}
	?>

    <h2>Mon panier</h2>
    <form action="Panier.php" method="post"><input type ="submit" name="afficher" value ="Afficher mon panier"></form>

</body>
</html>