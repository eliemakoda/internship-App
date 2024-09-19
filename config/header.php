<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="job Search, Career, Resume, Career Builder, Employment">
    <meta name="description" content="Khuj - the job finder HTML5 Template is designed especially for the  job related agency, multipurpose and business and those who offer job related services.">
    <meta property="og:site_name" content="Khuj">
    <meta property="og:url" content="https://sayfurrahaman.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Khuj - the job finder HTML5 Template">
    <meta name="og:image" content="images/assets/ogg.png">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#6dbfb8">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#6dbfb8">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#6dbfb8">
    <title>Stage-Eneo </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="72x33" href="images/eneo.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
    <div class="main-page-wrapper">
        <!-- ===================================================
				Loading Transition
			==================================================== -->
        <div id="preloader">
            <div id="khoj-preloader" class="khoj-preloader">
                <div class="animation-preloader">
                    <h1>AAron Nankeng</h1>
                </div>
            </div>
        </div>
        <!--=========================
			 header html start  1
			 =================================  -->
        <div class="theme-main-menu sticky-menu theme-menu-one">
            <div class="inner-content">
                <div class="d-flex align-items-center justify-content-between">
                    <!-- <div class="d-flex logo order-lg-0"><a href="" class="d-block"><img src="images/logo/logo.png" alt=""></a></div> -->
                    <div class="right-wiget d-lg-flex align-items-center order-lg-3 ">
                        <div class="people"><a href="./logout.php"><img src="images/icon/user.svg" alt=""></a></div>
                        <?php if(!isset($_SESSION['emailUser'])):?>
                        <div class="sign-up"><a class="custom-btn" href="./index.php">Se connecter</a></div>
                        <?php
                        endif;
                        ?>
                    </div>
                    <!-- ================================================
						                      nav bar start
					     ================================================ -->
                    <div class="left-wiget">
                        <nav class="navbar navbar-expand-lg order-lg-2">
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="./Accueil.php">
                                            Accueil
                                        </a>
                                    </li>
                                    <?php
                                    if(isset($_SESSION['idUser'])):
                                    ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Stage
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="./listeStage.php">Liste des Stage </a></li>
                                            <li><a class="dropdown-item" href="GrilleStage.php">Grille des stages </a></li>
                                            <li><a class="dropdown-item" href="historiqueCandidature.php">Historique demandes stage</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    endif;
                                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./apropos.php">A propos de Nous</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.php">Blog </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Nous contacter</a>
                                    </li>


                                </ul>
                                <div class="right-wiget d-flex align-items-center order-lg-3 d-lg-none ">
                                    <div class="people"><a href=""><img src="images/icon/user.svg" alt=""></a></div>
                                    <div class="sign-up"><a class="custom-btn" href="">Creer un compte </a></div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- //header nav  -->
                    <!-- ================================================
						                      nav bar start
					================================================ -->
                </div>
            </div>
        </div>