<?php
session_start();
require "./config/app.php";
$app = new DatabaseQuery;
$results = $app->SelectionnerTout("SELECT * FROM blog WHERE 1");
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
            Nos Dernières informations .
          </h1>
        </div>
        <div class="d-flex align-items-center justify-content-center mt-60">

        </div>
      </div>
    </div>
  </div>
</div>
<section class="home-blog-three mb-160 md-mb-80">
  <div class="container">
    <div class="blog-heading">
      <h3 class="mb-60">Tout savoir sur notre actualité</h3>
    </div>
    <div class="blog-main-content">
      <div class="blog-grid">
        <div class="home-three-blog-item">
          <div class="row">
            <!-- debut -->
            <?php
            if (isset($results) && $results != null) :
              foreach ($results as $pub) :
                $img = explode(',', $pub->imagesBlog);
                $myim = $img[array_rand($img)]
            ?>
                <div class="col-lg-4">
                  <div class="card">
                    <img src="images/<?php echo $myim?>" alt="" class="" />
                    <div class="card-body">
                      <div class="blog-item1 d-flex align-items-center justify-content-around">
                        <div class="left-side">
                          <i class="bi bi-person"></i> <span>By ENEO</span>
                        </div>
                        <div class="right-side">
                          <i class="bi bi-clock"></i> <span> <?php echo $pub->DateAjoutBlog?></span>
                        </div>
                      </div>
                      <a href="./blogDetail.php?id=<?php echo $pub->idBlog?>">
                        <h6><?php echo $pub->tittreblog?></h6>
                      </a>
                    </div>
                  </div>
                </div>
            <?php
              endforeach;
            endif;
            ?>
            <!-- fin -->
        
        <div class="explore d-flex align-items-center justify-content-center mt-60">
          <!-- <a href="" class="d-flex align-items-center justify-content-center">Explore More</a> -->
        </div>
      </div>
    </div>
  </div>
</section>
<section class="Customer-one mb-160 md-mb-80">
  <div class="container">
    <div class="customer_rapper">
      <img src="images/shape/shape-4.png" alt="" />
      <img src="images/shape/shape-4.png" alt="" />
      <div class="row">
        <div class="col customer_content text-center pt-80 pb-80">
          <h2 class="">
          + de 200 stagiaires acompagnés au cours de l'année 2024
          </h2>
          <p class="mb-30">
          Un environnement d'apprentissage aupres des professionnels de metiers.
          </p>
          <a href="./GrilleStage.php" class="custom-btn">Candidatez maintenant</a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require "./config/footer.php";
?>