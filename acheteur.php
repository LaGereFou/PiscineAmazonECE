<?php
	$database = "eceamazon";
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);
	$login= isset($_POST["email"])?$_POST["email"] : "";
	$pass    = isset($_POST["mdp"])?$_POST["mdp"] : "";

	if ($_POST["buttonach"]) {
		if ($db_found) {
			$sql = "SELECT * FROM acheteur";
			if ($login != "") {
				$sql .= " WHERE Email LIKE '%$login%'";
				if ($pass != "") {
					$sql .= " AND Mdp LIKE '%$pass%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);

			if (mysqli_num_rows($result) == 0) {
				echo "Acheteur non trouvé";
				header("Location:index.php");
			} else {
				$data = mysqli_fetch_assoc($result);
                    
?>

 

  <?php       
                    
                    /*echo "Email: " . $data['email'] . '<br>';
		        	echo "Mdp:" . $data['mdp'] . '<br>';
			        echo "Nom: " . $data['nom'] . '<br>';
			        echo "Prenom: " . $data['prenom'] . '<br>';
			        echo "Adresse: " . $data['adresse'] . '<br>';
			        echo "Code postal: " . $data['cpost'] . '<br>';
			        echo "Ville: " . $data['ville'] . '<br>';
			        echo "Pays: " . $data['pays'] . '<br>';
			        echo "Numero telephone: " . $data['ntel'] . '<br>';
			        echo "Type carte: " . $data['tcarte'] . '<br>';
			        echo "Numéro carte: " . $data['ncarte'] . '<br>';
			        echo "Date carte: " . $data['dcarte'] . '<br>';
			        echo "Cryptogramme carte: " . $data['ccarte'] . '<br>';*/
				
			}
		}
        
        else {
		echo "Database not found";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>X-Corporation</title>
    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- off-canvas -->
    <link href="css/mobile-menu.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="main-wrapper">

<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt=""></a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav-cta hidden-xs">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="head-search">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features
                    <span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="m-menu-content">
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                                <ul class="col-sm-3">
                                    <li class="dropdown-header">Widget Haeder</li>
                                    <li><a href="#">Awesome Features</a></li>
                                    <li><a href="#">Clean Interface</a></li>
                                    <li><a href="#">Available Possibilities</a></li>
                                    <li><a href="#">Responsive Design</a></li>
                                    <li><a href="#">Pixel Perfect Graphics</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->





         <h1>
                 <?php 
    
   
                    echo "Email: " . $data['email'] ;
                    
                    
                    
                    ?> 
        </h1>




<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Continually matrix cross functional opportunities whereas ethical information. Compellingly
                            streamline enabled human capital before resource-leveling internal or "organic".</p>

                    </div>
                </div>
                <!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>We work for your profit</h3>

                        <p>Distinctively expedite viral materials rather than out-of-the-box solutions. Credibly empower
                            revolutionary ROI rather than unique products. Collaboratively maximize principle-centered
                            ideas before highly efficient data. Phosfluorescently.</p>
                    </div>
                </div>
                <!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Contact Us Today</h3>
                        <address>
                            Call Us 666 777 888 OR 111 222 333<br>
                            Send an Email on <a href="mailto:#">contact@domain.com</a><br>
                            Visit Us 123 Fake Street- Blla 12358<br>
                            Fake Kingdom<br>
                        </address>

                        <ul class="list-inline social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.col-sm-4 -->
            </div>
        </div>
    </div>
    <!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">&copy; X-CORPORATION. All rights reserved. | Design By: <a
                    href="http://uicookies.com">uiCookies</a></span>

            <ul class="list-inline pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- .container -->
    </div>
    <!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->

<div class="uc-mobile-menu uc-mobile-menu-effect">
    <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
    <div>
        <div>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- .uc-mobile-menu -->
</div>
<!-- #main-wrapper -->


<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>