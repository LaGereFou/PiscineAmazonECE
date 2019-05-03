<?php  
$database = "eceamazon";
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

if ($_POST["buttonaddach"]) {
        $email= isset($_POST["email"])?$_POST["email"] : "";
        $mdp= isset($_POST["mdp"])?$_POST["mdp"] : "";
        $nom= isset($_POST["nom"])?$_POST["nom"] : "";
        $prenom= isset($_POST["prenom"])?$_POST["prenom"] : "";
        $adresse= isset($_POST["adresse"])?$_POST["adresse"] : "";
        $cpost= isset($_POST["cpost"])?$_POST["cpost"] : "";
        $ville= isset($_POST["ville"])?$_POST["ville"] : "";
        $pays= isset($_POST["pays"])?$_POST["pays"] : "";
        $ntel= isset($_POST["ntel"])?$_POST["ntel"] : "";
        $tcarte= isset($_POST["tcarte"])?$_POST["tcarte"] : "";
        $ncarte= isset($_POST["ncarte"])?$_POST["ncarte"] : "";
        $dcarte= isset($_POST["dcarte"])?$_POST["dcarte"] : "";
        $ccarte= isset($_POST["ccarte"])?$_POST["ccarte"] : "";
        $erreur= "";

        if($email== "") {$erreur.= "Le champ email est vide. <br>";}
        if($mdp== "") {$erreur.= "Le champ mot de passe est vide. <br>";}
        if($nom== "") {$erreur.= "Le champ nom est vide. <br>";}
        if($prenom== "") {$erreur.= "Le champ prénom est vide. <br>";}
        if($adresse== "") {$erreur.= "Le champ adresse est vide. <br>";}
        if($cpost== "") {$erreur.= "Le champ code postal est vide. <br>";}
        if($ville== "") {$erreur.= "Le champ ville est vide. <br>";}
        if($pays== "") {$erreur.= "Le champ pays est vide. <br>";}
        if($ntel== "") {$erreur.= "Le champ numéro de téléphone est vide. <br>";}
        if($tcarte== "") {$erreur.= "Le champ type de carte est vide. <br>";}
        if($ncarte== "") {$erreur.= "Le champ numéro de carte est vide. <br>";}
        if($dcarte== "") {$erreur.= "Le champ date de carte est vide. <br>";}
        if($ccarte== "") {$erreur.= "Le champ cryptogramme de carte est vide. <br>";}

        if ($erreur== "") {if($db_found){
            echo "INSERER" ;       
            $sql= "INSERT INTO acheteur(email, mdp, nom, prenom, adresse, cpost, ville, pays, ntel, tcarte, ncarte, dcarte, ccarte) VALUES ('$email','$mdp','$nom','$prenom','$adresse','$cpost','$ville','$pays','$ntel','$tcarte','$ncarte','$dcarte','$ccarte')";
            mysqli_query($db_handle, $sql);
            header("Location:Formulaire.php");
        }
        else{
            echo "Database not found";
        }}
        else {echo "Erreur : $erreur";}
        
    }

?>