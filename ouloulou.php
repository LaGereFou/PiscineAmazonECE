<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE eceamazon";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
echo "<br>";



/*Création de la table Item*/
$database = "eceamazon"; /* Le nom de la base */
$db_found = mysqli_select_db($conn, $database);
$sql = "CREATE TABLE Items (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titre text NOT NULL,
prix FLOAT(20) NOT NULL,
vendeur text,
description text,
image text,
quantity int,
nombrevendu int,
categorie varchar(30)
)";

if (mysqli_query($conn, $sql)) {
	    echo "Table Items created successfully";
		} else {
		    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";



/*Création de la table Livres*/
$sql = "CREATE TABLE Livres (
id_livres INT  PRIMARY KEY,
auteur varchar (30),
datePubli date,
edition varchar(30),
idd INT (10) UNSIGNED NOT NULL,
constraint FK_idfk1 foreign key(idd) REFERENCES Items(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Livres created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";



/*Création de la table Sports et loisirs*/
$sql = "CREATE TABLE Sportetloisirs (
id_sport INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
marque text,
idd INT (10) UNSIGNED NOT NULL,
constraint FK_idfk2 foreign key(idd) REFERENCES Items(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Sports et loisirs created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";



/*Création de la table Musique*/
$sql = "CREATE TABLE Musique (
id_musique INT  PRIMARY KEY,
idd INT (10) UNSIGNED NOT NULL,
constraint FK_idfk3 foreign key(idd) REFERENCES Items(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Musique created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";


/*Création de la table Vetements*/
$sql = "CREATE TABLE Vetements (
id_vetements INT  PRIMARY KEY,
sexe bit,
taille text,
marque text,
couleur varchar(30),
idd int (10) UNSIGNED NOT NULL,
constraint FK_idfk4 foreign key(idd) REFERENCES Items(id)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Vetements created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";


/*Création de la table Acheteur*/
$sql = "CREATE TABLE Acheteur (
email char(50) PRIMARY KEY,
mdp text,
nom varchar(30),
prenom varchar(30),
adresse text,
cpost int,
ville varchar(30),
pays varchar(30),
ntel int,
tcarte text,
ncarte int,
dcarte date,
ccarte smallint
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Acheteur created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";


/*Création de la table Venduer*/
$sql = "CREATE TABLE Vendeur (
email varchar(50) PRIMARY KEY,
pseudo varchar(30),
mdp text,
nom varchar(30),
prenom varchar(30),
pdp text,
image text
)";

if (mysqli_query($conn, $sql)) {
    echo "Table Acheteur created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
		}
echo "<br>";


/*Création de la table Admin*/
$sql = "CREATE TABLE Admin (
email char(50) PRIMARY KEY,
mdp text,
nom varchar(30),
pdp text,
image text
)";

if (mysqli_query($conn, $sql)) {
	echo "Table Acheteur created successfully";
	    } else {
		   	echo "Error creating table: " . mysqli_error($conn);
				}
echo "<br>";

    
/*Création de la table Vente*/
$sql = "CREATE TABLE Vente (
id_vente INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
acheteur varchar(30),
quantite int,
dateachat date,
emaill char(50) NOT NULL,
idd int (10) UNSIGNED NOT NULL,
constraint FK_idfk5 foreign key(idd) REFERENCES Items(id),
constraint FK_idfk6 foreign key(emaill) REFERENCES Acheteur(email)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Acheteur created successfully";
		} else {
		    echo "Error creating table: " . mysqli_error($conn);
				}
echo "<br>";



/*Création de la table Panier*/
$sql = "CREATE TABLE Panier (
id_panier INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
acheteur varchar(30),
quantite int,
dateachat date,
emaill char(50) NOT NULL,
idd int (10) UNSIGNED NOT NULL,
constraint FK_idfk7 foreign key(idd) REFERENCES Items(id),
constraint FK_idfk8 foreign key(emaill) REFERENCES Acheteur(email)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table panier created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
			}
echo "<br>";
echo "<br>";

///////////////////////////////////////////////INSERTION DES DONNEES///////////////////////////////



//Insertion des acheteurs
$sql = "INSERT INTO Acheteur (email, mdp, nom, prenom, adresse, cpost, ville, pays, ntel, tcarte, ncarte, dcarte, ccarte)
values
    ('jeremyrocaroca@gmail.com','aqwzsx','Roca','Jeremy','13 rue de cotonou','94000','creteil','France','0608097102','Visa','4878','2020-06-01','206'),
    ('leonardo.dicaprio@gmail.com','titanic','DiCaprio','Leonardo','12 rue de la huchette','75005','Paris','France','0676382321','Mastercard','4444','2020-07-02','202'),
    ('popfiotte@gmail.com','meetflix','Fiotte','Pop','37 quai de grenelle','75015','Paris','France','0612345678','Visa','3333','2020-09-22','101'),
    ('ironman@avengers.fr','thanos','Avengers','Tony','45 rue de la mort','69696','bagneux','Vormir','0686389321','Visa','2222','2020-08-02','909'),
    ('aryastark@got.fr','marcheurblanc','Stark','Arya','99 rue du trone de fer','77777','Got','Loin','0675382321','Mastercard','1111','2021-07-02','808')";

if (mysqli_query($conn, $sql)) {
    echo "jeremy created successfully";
    } else {
 		echo "Error creating table: " . mysqli_error($conn);
        	}
echo "<br>";



//Insertion des vendeurs
$sql = "INSERT INTO Vendeur (email, pseudo, mdp, nom, prenom, pdp, image)
values
	('lydiahadjeb@gmail.com','lyly','got','Hadjeb','Lydia','xxx','xxx'),
	('hudofullgerbe@gmail.com','hudo','Hudo1010','Fougeres','Hugo','xxx','xxx'),
	('jps@gmail.com','jps','info','Segado','Jean Pierre','xxx','xxx'),
	('queenb@gmail.com','queenb','jayz','Carter','Beyonce','xxx','xxx'),
	('lomepal@gmail.com','lomepal','jeanine','Antoine','Valentinelli','xxx','xxx')";

if (mysqli_query($conn, $sql)) {
    echo "jeremy created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
        	}
echo "<br>";



//Insertion de l'admin
$sql = "INSERT INTO Admin (email, mdp, nom, pdp, image)
values
    ('eceamazon@gmail.com','admin','Eceamazon','xxx','xxx')";

if (mysqli_query($conn, $sql)) {
	echo "jeremy created successfully";
    } else {
   	    echo "Error creating table: " . mysqli_error($conn);
        	}
echo "<br>";



//Insertion des items
$sql = "INSERT INTO Items (titre, prix, vendeur, description, image, quantity, nombrevendu, categorie)
values
    ('raquette de tennis','40.99','lomepal@gmail.com','raquette de tennis head au prix de 40.99 de couleur noir','xxx','12','0','Tennis')";

if (mysqli_query($conn, $sql)) {
	echo "jeremy created successfully";
    } else {
   	    echo "Error creating table: " . mysqli_error($conn);
        	}
echo "<br>";



$sql = "INSERT INTO Sportetloisirs (marque, idd)
values
    ('head','1')";

if (mysqli_query($conn, $sql)) {
	echo "jeremy created successfully";
    } else {
   	    echo "Error creating table: " . mysqli_error($conn);
        	}
echo "<br>";






mysqli_close($conn);
?> 




