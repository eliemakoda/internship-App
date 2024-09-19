<?php
require "../config/app.php";
$app = new DatabaseQuery;
if (isset($_GET["idAcc"])) {
    $id = $_GET["idAcc"];
    $app->maj("UPDATE demandesstage set StatutDemande=1 WHERE idDemande=$id", "./ListeDemande.php");
}
if (isset($_GET["idRef"])) {
    $id = $_GET["idRef"];
    $app->maj("UPDATE demandesstage set StatutDemande=2 WHERE idDemande=$id", "./ListeDemande.php");
}
// `demandesstage`(`idDemande`, `iduserDemande`, `idstageDemande`, `cvDemande`, `DateajoutDemande`,StatutDemande)
$results = $app->SelectionnerTout("SELECT * FROM demandesstage left join stage on stage.idStage= demandesstage.idstageDemande left join user on user.idUser= demandesstage.iduserDemande where 1");
require "./config/header.php";
?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste des Demandes de Stage</h4>



        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" style="width: 70px;">#</th>
                                <th scope="col">Poste </th>
                                <th scope="col">Lieu de Stage </th>
                                <th scope="col">Nom Utilisateur</th>
                                <th scope="col">Statut </th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($results) && $results != null) :
                                foreach ($results as $admin) :
                                    $statut = "";
                                    if ($admin->StatutDemande == 0) {
                                        $statut = "En cours...";
                                    } elseif ($admin->StatutDemande == 1) {
                                        $statut = "Acceptée";
                                    } else {
                                        $statut = "Refusé";
                                    }
                            ?>
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle">

                                                    <?php echo $admin->TitrePoste[0]; ?>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">

                                                    <?php echo $admin->TitrePoste; ?>

                                                </a></h5>
                                            <p class="text-muted mb-0">
                                                <?php echo $admin->idDemande; ?>

                                            </p>
                                        </td>
                                        <td>
                                            <?php echo $admin->LieuStage; ?>


                                        </td>
                                        <td>
                                            <?php echo $admin->nomUser; ?>

                                        </td>


                                        <td>
                                            <?php echo $statut ?>

                                        </td>
                                        <td>
                                            <a href="./ListeDemande.php?idAcc=<?php echo $admin->idDemande ?>"> <span class="badge badge-pill badge-soft-success font-size-11">Accepter</span></a>
                                            <a href="./ListeDemande.php?idRef=<?php echo $admin->idDemande ?>"> <span class="badge badge-pill badge-soft-danger font-size-11">refuser</span></a>
                                            <?php
                                            $im = explode(",", $admin->cvDemande);
                                            $lettre = explode(",", $admin->LettreMotivation)

                                            ?>
                                            <a href="../images/<?php echo $im[0]; ?> ">
                                                voir le cv
                                            </a>
                                            <?php
                                            if (isset($lettre) && $lettre != null) :
                                            ?>
                                                <a href="../images/<?php echo $lettre[0]; ?> ">
                                                    voir la lettre de Motivation
                                                </a>
                                            <?php
                                            endif;
                                            ?>
                                        </td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;

                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div> <!-- container-fluid -->
</div>
<?php
require "./config/footer.php"
?>