<?php
require "../config/app.php";
$app = new DatabaseQuery;
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $desc=$_POST["desc"];
    $lieu=$_POST["lieu"];
    $competence=$_POST["competence"];
    $typeStage= $_POST["typeStage"];
    $CompAnne=$_POST["CompAnne"];
    // INSERT INTO `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, 
    // `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`)
    $sql="INSERT INTO stage(TitrePoste, LieuStage, Statut, Description, competencesReq, competenceAnnex) VALUES(:TitrePoste, :LieuStage, :Statut, :Description, :competencesReq, :competenceAnnex)";
    $tab=[
        ":TitrePoste"=>$name,
         ":LieuStage"=>$lieu,
        ":Statut"=>$typeStage,
         ":Description"=>$desc, 
         ":competencesReq"=>$competence, 
         ":competenceAnnex"=>$CompAnne
    ];

    $app->inserer($sql,$tab,"./listeStage.php");
}
require "./config/Header.php";
?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Ajout de Stage</h4>

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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Nouveau Stage</h4>
                            <form method="POST" action="./ADDStage.php">
                                <div class="row mb-4">
                                    <label for="name" class="col-form-label col-lg-2">Nom du poste </label>
                                    <div class="col-lg-10">
                                        <input id="projectname" name="name" type="text" class="form-control" placeholder="Entrez le nom du poste...">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="descriptionPoste" class="col-form-label col-lg-2"> Description du Poste</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" id="projectdesc" name="desc" rows="3" placeholder="Enter Project Description..."></textarea>
                                    </div>
                                </div>
                                <!-- `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, `Description`, 
                            `competencesReq`, `competenceAnnex`, `DateAjoutStage`)  -->

                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Lieu de Stage</label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="lieu" type="text" placeholder="Entrez le lieu de stage..." class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Responsabilité</label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="competence" type="text" placeholder="Ex: #gestion des bases de donnees #php #python..." class="form-control">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="control-label">Type de Stage </label>

                                    <select class="select2 form-control select2-multiple" data-placeholder="choisissez le type de stage ..." name="typeStage">
                                        <option value="Académique">Académique</option>
                                        <option value="Professionel">Professionel</option>
                                        <option value="Professionel">Recherche</option>
                                    </select>

                                </div>
                                <div class="row mb-4">
                                    <label for="projectbudget" class="col-form-label col-lg-2">Competences </label>
                                    <div class="col-lg-10">
                                        <input id="projectbudget" name="CompAnne" type="text" placeholder="Ex: #html #php #python..." class="form-control" required>
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
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by AARON NANKENG
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php
require "./config/footer.php"
?>