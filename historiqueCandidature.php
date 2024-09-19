<?php
session_start();
require "./config/app.php";
$iduser = $_SESSION['idUser'];
$sql = "select * from demandesstage left join user on user.idUser= demandesstage.iduserDemande left join stage on demandesstage.idstageDemande = stage.idStage where demandesstage.iduserDemande=$iduser";
$app = new DatabaseQuery;
$results = $app->SelectionnerTout($sql);
require "./config/header.php"
?>
<div class="about-us-banner mb-160 md-mb-100">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12">
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
                    <h1 class="mb-30">Historique De Vos Demandes De Stage.</h1>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-60">

                </div>
            </div>
        </div>
    </div>
</div>
<section class="feature-job-grid">
    <div class="feature-job-grid-rapper">
        <div class="container">
            <div class="row job-grid-heading">
                <div class="col-lg-8 md-pb-20" data-aos="zoom-in">
                    <div class="left-grid">
                        <span class="">Vous Avez fait  <?php 
                        if(isset($results)&& $results!=null){
                            echo count($results);
                        }else{
                            echo "0";
                        }
                        ?> Demande de Stage </span>
                    </div>
                </div>

            </div>
            <div class="row px-0 g-5 d-flex align-items-center justify-content-center">
                <!-- debut -->
                <?php
                if (isset($results) && $results) :
                    foreach ($results as $hist) :
                        // StatutDemande
                        $statut = "";
                        if ($hist->StatutDemande == 0) {
                            $statut = "En cours...";
                        } elseif ($hist->StatutDemande == 1) {
                            $statut = "Acceptée";
                        } else {
                            $statut = "Refusé";
                        }
                ?>
                        <div class="col-lg-4">
                            <div class="candidates-1 mt-40 d-flex flex-column align-items-center justify-content-center">
                                <div class="round-pic"><img src="images/eneo.png" alt=""></div>
                                <div class="Candidates-grid">
                                    <div class=" mt-20 top-grid-1 d-flex flex-column align-items-center justify-content-center">
                                        <div class=" d-flex flex-column align-items-center justify-content-center ">
                                            <h3 class="mb-20">ENEO </h3>
                                            <span><?php echo $hist->TitrePoste?></span>
                                        </div>
                                      
                                    </div>
                                    <div class="top-grid-2 d-flex align-items-center justify-content-between">
                                        <div class="mb-20">
                                            <span><i class="bi bi-geo-alt"></i></span>
                                            <span><?php echo $hist->LieuStage?></span>
                                        </div>
                                        <div class="mb-20">
                                            <span><i class="bi bi-calendar2-week"></i></span>
                                            <span>Stage<?php echo $hist->Statut?></span>
                                        </div>
                                    </div>
                                    <div class="top-grid-3 d-flex align-items-center justify-content-between">
                                        <div class="">
                                            <span><i class="bi bi-telephone-inbound"></i></span>
                                            <span><?php echo $hist->TelephoneUser?></span>
                                        </div>
                                        <div class="">
                                            <span><i class="bi bi-clock"></i></span>
                                            <span><?php echo $hist->emailUser?></span>
                                        </div>
                                    </div>
                                    <div class="top-grid-4 pt-20 d-flex flex-column align-items-center justify-content-center">
                                        <a  class=""><span><?php echo $statut?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
                <!-- fin -->
            
        </div>
    </div>
</section>

<section class="Customer-one mb-160 md-mb-80">
    <div class="container">
        <div class="customer_rapper">
            <img src="images/shape/shape-4.png" alt="">
            <img src="images/shape/shape-4.png" alt="">
            <div class="row">
                <div class=" col customer_content text-center pt-80 pb-80">
                    <h2 class="">+ de 200 stagiaires acompagnés au cours de l'année 2024</h2>
                    <p class="mb-30">Un environnement d'apprentissage aupres des professionnels de metiers</p>
                    <a href="" class="custom-btn">Candidatez maintenant</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require "./config/footer.php"
?>