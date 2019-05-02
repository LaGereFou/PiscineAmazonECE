<?php

$stat = isset($_POST["statut1"])?$_POST["statut1"]:"";


if($stat == "Oui, me connecter"){
    
    
    header("Location: connextionacheteur.php");
    }

else if($stat == "Non, m'inscrire"){
    
    header("Location: inscriptionacheteur.php");
    }




?>