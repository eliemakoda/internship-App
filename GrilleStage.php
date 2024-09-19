<?php
session_start();
require "./config/app.php";
$app  = new DatabaseQuery;
$results=$app->SelectionnerTout("SELECT * FROM stage WHERE 1");

require "./config/header.php"
?>
<div class="about-us-banner mb-160 md-mb-100">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12" />
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13" />
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
                    <h1 class="mb-30">
                        Postulez Chez ENEO et vous ne serez pas déçu.
                    </h1>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-60">

                </div>
            </div>
        </div>
    </div>
</div>
<section class="feature-job-grid pb-160 md-pb-80">
    <div class="feature-job-grid-rapper">
        <div class="container">
            <div class="row job-grid-heading d-flex align-items-center pb-20">
                <div class="col-lg-8 md-pb-20">
                    <div class="left-grid">
                        <span class=""><?php 
                        if(isset($results)&& $results!=null){
                            echo count($results);
                        }else{
                            echo "0";
                        }
                        ?> offres de Stage Disponible </span>
                    </div>
                </div>
               
            </div>
            <div class="row pt-20 gy-4 md-gy-1">
                <!-- debut  -->
                 <?php
                 if(isset($results)&& $results!=null):
                        // INSERT INTO `stage`(`idStage`, `TitrePoste`, `LieuStage`, `Statut`, 
    // `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`)
                    foreach($results as $stage):
                 ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="job-1 d-flex flex-column">
                        <div class="job-company">
                            <div class="company-name">
                                <img src="images/eneo.png" alt="" />
                                <span><?php echo $stage->Statut?></span>
                            </div>
                            <div class="company-taq">
                                <i class="bi bi-bookmark"></i>
                            </div>
                        </div>
                        <div class="job-title">
                            <h3><?php echo $stage->TitrePoste?></h3>
                        </div>
                        <div class="job-type">
                            <span><i class="bi bi-geo-alt"></i></span>
                            <span><?php echo $stage->LieuStage?></span>
                            <span><i class="bi bi-clock"></i></span>
                            <span>Temps Plein</span>
                        </div>
                        <div class="job-sallary pt-20">
                            <!-- <span><strong>$5000</strong>/Month</span> -->
                            <a href="./job-details.php?id=<?php echo $stage->idStage?>" class="">Detail </a>
                        </div>
                    </div>
                </div>
                <?php
                endforeach;
            endif;
                ?>
                <!-- fin -->
            
            </div>
            <div class="explore-btn">
                <!-- <a href="" class="btn-custom">Explore All</a> -->
            </div>
        </div>
    </div>
</section>
<?php
require "./config/footer.php"
?>