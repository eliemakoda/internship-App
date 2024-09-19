<?php
session_start();
require "./config/app.php";
$app  = new DatabaseQuery;
$results = $app->SelectionnerTout("SELECT * FROM stage WHERE 1");
require "./config/header.php";
?>

<div class="about-us-banner mb-160 md-mb-100">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12">
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
                    <h1 class="mb-30">Nos Meilleures offres de Stage.</h1>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-60">

                </div>
            </div>
        </div>
    </div>
</div>
<section class="feature-job-list mb-160 md-mb-80">
    <div class="feature-job-list-rapper">
        <div class="container">
            <div class="row d-flex align-items-start justify-content-center px-0 gx-5">

                <div class="col-lg-8">
                    <div class="right-job-list">
                        <div class="job-list-heading  pb-40 d-flex align-items-center justify-content-between">
                            <strong><?php 
                        if(isset($results)&& $results!=null){
                            echo count($results);
                        }else{
                            echo "0";
                        }
                        ?> offres de Stages Disponibles</strong>
                        </div>
                        <!-- debut -->
                        <?php
                        if (isset($results) && $results != null) :
                            // INSERT INTO `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, 
                            // `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`)
                            foreach ($results as $stage) :
                        ?>
                                <div class="job-list-1 mt-40">
                                    <div class="list-company pb-20 d-flex align-items-center justify-content-between">
                                        <img src="images/eneo.png" alt="">
                                        <!-- <span>5000FCFA<small>/Month</small></span> -->
                                    </div>
                                    <div class="job-list-name d-flex pt-20 align-items-center justify-content-between">
                                        <div class="d-flex flex-column align-items-start justify-content-start">
                                            <h4><?php echo $stage->TitrePoste?></h4>
                                            <div class="mt-20">
                                                <span><i class="bi bi-geo-alt"></i></span>
                                                <span><?php echo $stage->LieuStage?></span>
                                                <span><i class="bi bi-clock"></i></span>
                                                <span>Temps Plein</span>
                                            </div>
                                        </div>
                                        <div class="job-apply">
                                            <a class="" href="./job-details.php?id=<?php echo $stage->idStage?>">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require "./config/footer.php"
?>