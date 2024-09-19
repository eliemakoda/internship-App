<?php
session_start();
require "./config/app.php";
$app= new DatabaseQuery;

if(isset($_POST["signup"])){
    $nom=$_POST["nom"];
    $email= $_POST["email"];
    $phone=$_POST["phone"];
    $password= password_hash($_POST["password"],PASSWORD_DEFAULT);
    $sql= "INSERT INTO user(nomUser, emailUser, passwordUser, TelephoneUser,PiecesJointes) VALUES(:nomUser, :emailUser, :passwordUser, :TelephoneUser,:PiecesJointes)";
    $uploadDirectory = "./images/";
	// Vérifier s'il y a des erreurs lors du téléchargement des images
	if (!empty($_FILES["images"]["name"][0])) {
		foreach ($_FILES["images"]["name"] as $key => $imageName) {
			$imageTmpName = $_FILES["images"]["tmp_name"][$key];
			$urlsImages[] = $imageName;
			$imagePath = $uploadDirectory . $imageName;
			move_uploaded_file($imageTmpName, $imagePath);
		}
    $tab=[
        ":nomUser"=>$nom,
         ":emailUser"=>$email,
          ":passwordUser"=>$password,
           ":TelephoneUser"=>$phone,
           ":PiecesJointes"=>implode(",",$urlsImages)
    ];
    $dest="./index.php";
    $app->inserer($sql,$tab,$dest);
}
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
                                    <h2 class="heading-2">Creez un compte à ENEO</h2>
                                    <p>déjà un compte? <span><a href="./index.php">cliquez ici </a></span></p>

                                </div>
                                <form method="POST" action="./signup.php" enctype="multipart/form-data">
                                <div class="cols pt-60 g-5">
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="nom">Nom *</label>
                                        <input type="text" class="form-control" placeholder="Entrez votre Nom" aria-label="First name" name="nom" required>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="email">Email *</label>
                                        <input type="email" class="form-control" placeholder="Email " aria-label="First name" name="email" required>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="phone">Numero de Telephone</label>
                                        <input class="form-control" type="tel" id="phone" name="phone" placeholder="237682477"  required>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="password">Mot de passe </label>
                                        <input class="form-control" type="password" name="password" placeholder="Entrez votre mot de passe" required>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label mb-10" for="password">CNI et Lettre de Recommandation </label>
                                        <input class="form-control" type="file" name="images[]" placeholder="choisissez vos pièces jointes" required multiple accept=".pdf">
                                    </div>
                                    <div class="job-sallary pt-20">
                                        <button type="submit" name="signup">
                                        <a  class="">
                                        Creer un compte</a>
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