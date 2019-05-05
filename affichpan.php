<?php 
     $database = "eceamazon";
     $db_handle = mysqli_connect('localhost', 'root', '');
     $db_found = mysqli_select_db($db_handle, $database);
     
        
                    ?> 

<!DOCTYPE html>
<html>
<head>
     <title>Affichage panier</title>
</head>
<body>
          <?php 
                    $sql = "SELECT * FROM pan";
                    $result = mysqli_query($db_handle, $sql);
                    while($data = mysqli_fetch_assoc($result)){
                    $idd=$data['idd'];
                    $qtepan=$data['quantite'];    
                    $sql1 = "SELECT * FROM iteme WHERE Id='$idd'";
                    $result1 = mysqli_query($db_handle, $sql1);
                    $data1 = mysqli_fetch_assoc($result1);

                    echo "Nom article: " . $data1['titre'] . '&nbsp'. '&nbsp'. '&nbsp';
                    $prix= $qtepan * $data1['prix'];
                    echo "Quantité article: " . $qtepan . '&nbsp'. '&nbsp'. '&nbsp';
                    echo "Prix: " . $prix . '&nbsp'. '&nbsp'. '&nbsp'. '<br>';
               }
          ?> 
</body>
</html>
