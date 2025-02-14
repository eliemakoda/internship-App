<?php
session_start();
require "../config/app.php";
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM admin WHERE emailAdmin=:emailAdmin";
    $tab = [
        "emailAdmin" => $email,
        "passwordAdmin" => $password
    ];
    $dest = "./accueil.php";
    $app = new DatabaseQuery;
    $app->se_connecter_admin($sql, $tab, $dest);
}
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote-cakephp/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 13:11:07 GMT -->

<head>

    <meta charset="utf-8" />
    <title>ENEO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../images/eneo.png">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Bienvenue Chez ENEO!</h5>
                                        <p>Nous sommes Ravis de vou revoir.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="../images/eneo.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="./index.php" method="POST">

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email Utilisateur</label>
                                        <input type="email" class="form-control" id="email" placeholder="Entrez Votre email" name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Mot de Passe </label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" name="password" placeholder="Entrez votre Mot de passe " aria-label="Password" aria-describedby="password-addon">
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>


                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="login">Se Connecter</button>
                                    </div>




                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <!-- <p>Pas de compte ? <a href="./signup.php" class="fw-medium text-primary"> Creez Un </a> </p> -->
                            <p>© <script>
                                    document.write(new Date().getFullYear())
                                </script> Keyce <i class="mdi mdi-heart text-danger"></i> /Bachelor3</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote-cakephp/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 13:11:07 GMT -->

</html>