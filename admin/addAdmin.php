<?php
session_start();
require "../config/app.php";
$app = new DatabaseQuery;
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sql="INSERT INTO admin(nomAdmin, emailAdmin, passwordAdmin) VALUES (:nomAdmin, :emailAdmin, :passwordAdmin)";
    $tab= [
        ":nomAdmin"=>$name,
         ":emailAdmin"=>$email,
          ":passwordAdmin"=>$password
    ];

    $des="./Accueil.php";
    $app->inserer($sql,$tab,$des);
}
require "./config/header.php";
?>
   <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Ajout d'un Administrateur</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Stage</a></li> -->
                                <li class="breadcrumb-item active">Ajouter un stage</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- `admin`(`IdAdmin`, `nomAdmin`, `emailAdmin`, `passwordAdmin`, `DateAjoutAdmin`)  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Nouvel Administrateur</h4>
                            <form method="POST" action="./addAdmin.php">
                                <div class="row mb-4">
                                    <label for="name" class="col-form-label col-lg-2">Nom  </label>
                                    <div class="col-lg-10">
                                        <input id="projectname" name="name" type="text" class="form-control" placeholder="Entrez le nom de l'administrateur...">
                                    </div>
                                </div>
                           
                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Email Admin</label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="email" type="email" placeholder="Entrez l'email..." class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Mot de Passe</label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="password" type="password" placeholder="Ex: #gestion des bases de donnees #php #python..." class="form-control">
                                    </div>
                                </div>
                              
                                <div class="row justify-content-end">
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
<?php
require "./config/footer.php";
?>