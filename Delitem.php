<?php
    $database = "eceamazon";
    $db_handle = mysqli_connect('localhost', 'root', '');
    $db_found = mysqli_select_db($db_handle, $database);
    $titre= isset($_POST["titre"])?$_POST["titre"] : "";

    if ($_POST["buttondelitem"]) {
        if ($db_found) {
            $sql = "SELECT * FROM items";
                if ($titre != "") {
                    $sql .= " WHERE Titre LIKE '$titre'";
                    
                }
            $result = mysqli_query($db_handle, $sql);

            if (mysqli_num_rows($result) == 0) {
                echo "Item non trouvé";
            } 
            else {
                while ($data = mysqli_fetch_assoc($result)) {
                    $titre = $data['titre'];
                    echo "<br>";
                }

                $sql= "SELECT id FROM items WHERE titre= '$titre'";
                $val = mysqli_query($db_handle, $sql);
                $ligne= mysqli_fetch_array($val);
                $reference=$ligne['id'];
                $sql= "DELETE FROM vetements WHERE Id='$reference'";
                $result = mysqli_query($db_handle, $sql);
                $sql = "DELETE FROM items WHERE Titre = '$titre'"; 
                $result = mysqli_query($db_handle, $sql);

            }
         }else {
        echo "Database not found";
        }       
    }
?>