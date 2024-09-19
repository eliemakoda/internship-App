<?php
require "./config/app.php";
$app = new DatabaseQuery;
if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql= "SELECT * FROM user WHERE emailUser=:emailUser";
    $tab= [
        "emailUser"=>$email,
        "passwordUser"=>$password
    ];

    $app->se_connecter_client($sql,$tab,"./Accueil.php");
}
require "./config/header.php";
?>
<div class="about-us-banner mb-160 md-mb-100">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12" />
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13" />
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
                    <h1 class="mb-30">
                        Bienvenue chez <span>ENEO</span>.
                    </h1>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-60">

                </div>
            </div>
        </div>
    </div>
</div>

<section class="about-us mb-160 md-mb-80">
    <div class="container">
        <div class="about-us-rapper position-relative">
            <img src="images/shape/shape-5.png" alt="" class="shape shape-5" />
            <img src="images/shape/shape-6.png" alt="" class="shape shape-6" />
            <img src="images/shape/shape-6.png" alt="" class="shape shape-7" />
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="left-about left-about-us position-relative">
                        <img src="images/banner/banner-14.png" alt="" class="" />
                        <img src="images/banner/banner-13.png" alt="" class="" />
                        <img src="images/screen/screen-14.png" alt="" class="" />
                        <img src="images/screen/screen-24.png" alt="" class="" />
                        <img src="images/screen/screen-9.png" alt="" class="" />
                    </div>
                </div>
                <div class="col-lg-5 col-xl-5 offset-lg-1 offset-xl-1 md-mt-80">
                    <div class="right-about-two">
                        <section class="contact-form mb-160 md-mb-80">
                            <div class="container">
                                <div class="text-center">
                                    <h2 class="heading-2">Se connecter</h2>
                                    <p>pas de compte? <span><a href="./signup.php">cliquez ici </a></span></p>
                                </div>
                                <form method="POST" action="./index.php">
                                <div class="cols pt-60 g-5">
                                 
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="email">Email *</label>
                                        <input type="email" class="form-control" placeholder="Email " aria-label="First name" name="email" required>
                                    </div>
                                    
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="password">Mot de passe </label>
                                        <input class="form-control" type="password" name="password" placeholder="Entrez votre mot de passe" required>
                                    </div>
                                    <div class="job-sallary pt-20">
                                        <button type="submit" name="submit">
                                        <a  class="">
                                        Se connecter</a>
                                        </button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
require "./config/footer.php";
?>