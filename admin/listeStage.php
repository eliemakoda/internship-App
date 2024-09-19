<?php
session_start();
require "../config/app.php";
$app = new DatabaseQuery;
$sql = "SELECT * FROM stage where 1";
$ListeAdmins = $app->SelectionnerTout($sql);
require "./config/Header.php";
?>

<!-- `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`)  -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Liste des Stages</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><a href="./ADDStage.php"><i class="fa fa-plus" aria-hidden="true"></i>  Ajouter un Stage</a></li>
                </ol>
            </div>

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
                                <th scope="col">Type Stage</th>
                                <th scope="col">Date D'ajout</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($ListeAdmins) && $ListeAdmins != null) :
                                foreach ($ListeAdmins as $admin) :
                            ?>
                                    <tr>
                                        <td>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle">
                                                    
                                                    <?php echo $admin->TitrePoste[0];?>
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">

                                            <?php echo $admin->TitrePoste;?>
                                           
                                            </a></h5>
                                            <p class="text-muted mb-0">
                                            <?php echo $admin->idStage;?>
 
                                            </p>
                                        </td>
                                        <td>
                                        <?php echo $admin->LieuStage;?>


                                        </td>
                                        <td>
                                        <?php echo $admin->Statut;?>

                                        </td>
                                        <td>
                                        <?php echo $admin->DateAjoutStage;?>

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

require "./config/Footer.php";
?>