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
        $erreur= "";

        if($id== "") {$erreur.= "Le champ id est vide. <br>";}
        if($titre== "") {$erreur.= "Le champ titre est vide. <br>";}
        if($prix== "") {$erreur.= "Le champ prix est vide. <br>";}
        if($vendeur== "") {$erreur.= "Le champ vendeur est vide. <br>";}
        if($description== "") {$erreur.= "Le champ description est vide. <br>";}
        if($image== "") {$erreur.= "Le champ image est vide. <br>";}
        if($qte== "") {$erreur.= "Le champ quantitée est vide. <br>";}
        if($categorie== "") {$erreur.= "Le champ catégorie est vide. <br>";}
        if ($erreur== "") {echo "Formulaire valide";}
        else {echo "Erreur : $erreur";}
        if($db_found){       
            $sql= "INSERT INTO items(id, titre, prix, vendeur, description, image, qte, nombrevendu, categorie) VALUES ('$id','$titre','$prix','$vendeur','$description','$image','$qte','$nombrevendu','$categorie')";
            mysqli_query($db_handle, $sql);
            header("Location:Formulaire.php");
        }
        else{
            echo "Database not found";
        }
    }

?>