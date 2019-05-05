<?php 
	session_start();
	$email1 = $_SESSION['login'];
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$qte= isset($_POST["qte"])?$_POST["qte"] : "";
	$titre= isset($_POST["titre"])?$_POST["titre"] : "";
	
	if ($_POST["inserer"]) {
		if($db_found){       
	            $sql = "SELECT * FROM Items WHERE Titre='$titre'";
	            $result = mysqli_query($db_handle, $sql);
	            $data = mysqli_fetch_assoc($result);
	            $qte2=$data['quantity'];
	            $idd=$data['id'];
	            echo $qte2;
	            if($qte<=$qte2)

	            	{
				$id1 =0;
				$emailv= $data['vendeur'];
				$sql= "INSERT INTO Panier(acheteur, quantite, emaill, idd) VALUES ('$email1','$qte','$emailv','$idd')";
	        	mysqli_query($db_handle, $sql);

	        	
	       		 
				}
				else{
					echo "coucou"
					;}
				
	        }
	        else{
	            echo "Database not found";
	        }
	}
	if ($_POST["panier"]) {
    	header("Location:affichpan.php");

    }
	

?>
<?php 
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	$qte= isset($_POST["qte"])?$_POST["qte"] : "";
	$idd= isset($_POST["id"])?$_POST["id"] : "";
	if ($_POST["inserer"]) {
	if($db_found){     
				    $sql = "SELECT * FROM pan WHERE Id=$idd";
				    $result = mysqli_query($db_handle, $sql);
			        $data = mysqli_fetch_assoc($result);
				    if(is_null($data)){
			            $sql = "SELECT * FROM iteme WHERE Id='$idd'";
			            $result = mysqli_query($db_handle, $sql);
			            $data = mysqli_fetch_assoc($result);
			            $qte2=$data['qte'];
			            if($qte<=$qte2){
							$email1 =$data['vendeur'];
							$id1 =0;
							$titre1= $data['titre'];
							$sql= "INSERT INTO pan(id, acheteur, quantite, email, idd) VALUES ('$id1','$titre1','$qte','$email1','$idd')";
				        	mysqli_query($db_handle, $sql);
				        	$sql= "UPDATE iteme SET qte = '$qte2'-'$qte'WHERE Id='$idd'";
				        	mysqli_query($db_handle, $sql);
				        	$sql= "UPDATE iteme SET nombrevendu = '$qte2'+'$qte'WHERE Id='$idd'";
				        	mysqli_query($db_handle, $sql);
				        	header("Location:Affichitem.php");
		        		}else{header("Location:Formulaire.php");}
					}
						
        	}
        else{
            echo "Database not found";
        }
    }
    if ($_POST["afficher"]) {
    	header("Location:affichpan.php");

    }

	

?>