<?php  
$database = "eceamazon";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($_POST["buttonadditem"]) {
        $id= isset($_POST["id"])?$_POST["id"] : "";
        $titre= isset($_POST["titre"])?$_POST["titre"] : "";
        $prix= isset($_POST["prix"])?$_POST["prix"] : "";
        $vendeur= isset($_POST["vendeur"])?$_POST["vendeur"] : "";
        $description= isset($_POST["description"])?$_POST["description"] : "";
        $image= isset($_POST["image"])?$_POST["image"] : "";
        $qte= isset($_POST["qte"])?$_POST["qte"] : "";
        $nombrevendu= 0;
        $categorie= isset($_POST["categorie"])?$_POST["categorie"] : "";
        $auteur= isset($_POST["auteur"])?$_POST["auteur"] : "";
        $maison= isset($_POST["maison"])?$_POST["maison"] : "";
        $sports= isset($_POST["sports"])?$_POST["sports"] : "";
        $artiste= isset($_POST["artiste"])?$_POST["artiste"] : "";
        $dates= isset($_POST["dates"])?$_POST["dates"] : "";
        $marque= isset($_POST["marque"])?$_POST["marque"] : "";
        $sexe= isset($_POST["sexe"])?$_POST["sexe"] : "";
        $taille= isset($_POST["taille"])?$_POST["taille"] : "";
        $erreur= "";

        if($id== "") {$erreur.= "Le champ id est vide. <br>";}
        if($titre== "") {$erreur.= "Le champ titre est vide. <br>";}
        if($prix== "") {$erreur.= "Le champ prix est vide. <br>";}
        if($vendeur== "") {$erreur.= "Le champ vendeur est vide. <br>";}
        if($description== "") {$erreur.= "Le champ description est vide. <br>";}
        if($image== "") {$erreur.= "Le champ image est vide. <br>";}
        if($qte== "") {$erreur.= "Le champ quantitée est vide. <br>";}
        if($categorie== "") {$erreur.= "Le champ catégorie est vide. <br>";}
        if ($erreur== "") {if($db_found){       
            $sql= "INSERT INTO iteme(id, titre, prix, vendeur, description, image, qte, nombrevendu, categorie, auteur, maison, sports, marque, artiste, dates, sexe, taille) VALUES ('$id','$titre','$prix','$vendeur','$description','$image','$qte','$nombrevendu','$categorie','$auteur','$maison','$sports','$marque','$artiste','$dates','$sexe', '$taille')";
        mysqli_query($db_handle, $sql);
        }
        else{
            echo "Database not found";
        }}
        else {echo "Erreur : $erreur";}
        
    }

?>
