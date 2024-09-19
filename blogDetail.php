<?php
require "./config/app.php";
$app = new DatabaseQuery;
$id = $_GET["id"];
$postData = $app->SelectionnerUn("SELECT * FROM blog WHERE idBlog=$id");
$img = explode(',', $postData->imagesBlog);
$myim = $img[array_rand($img)];
$data = $app->SelectionnerTout("SELECT * from blog  ORDER by DateAjoutBlog asc LIMIT 5");
require "./config/header.php";
?>
<div class="about-us-banner mb-160 md-mb-100">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12">
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100">
                    <h1 class="mb-30"><?php
                                        echo $postData->tittreblog
                                        ?>.</h1>
                </div>
                <div class="d-flex align-items-center justify-content-center mt-60">

                </div>
            </div>
        </div>
    </div>
</div>
<section class="blog-single mb-160 md-mb-80">
    <div class="blog-single-rapper">
        <div class="container">
            <div class="row px-0 gx-5">
                <div class="col-lg-8 md-pb-30">
                    <div class="single-blog-left">
                        <div class="left-1">
                            <span><?php
                                    echo $postData->DateAjoutBlog
                                    ?></span>
                            <h3 class="mt-20 mb-20"><?php
                                                    echo $postData->tittreblog
                                                    ?></h3>
                            <span>By ENEO</span>
                            <!-- <span><i class="bi bi-clock"></i>5 min read</span> -->
                            <img src="images/<?php echo $myim ?>" alt="">
                            <p class="mt-20 mb-20"><?php echo $postData->descriptionBlog ?></p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-blog-right">

                                  
                        <div class="right-2 right-3">
                            <h5>Publication récentes</h5>
                            <?php
                                   if(isset($data)&& $data!=null):
                                    foreach($data as $post):
                                        $img = explode(',', $post->imagesBlog);
                                        $myim = $img[array_rand($img)]
                                    ?>
                            <div class="d-flex align-items-center mb-30">
                                <img src="images/<?php echo $myim?>" alt="" style="width: 255px;">
                                <div class="px-3">
                                    <span><?php echo $post->DateAjoutBlog?></span>
                                   <a href="./blogDetail.php?id=<?php echo $post->idBlog?>"> <h6 class="mt-10"><?php echo $post->tittreblog?></h6></a>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;

                            ?>
                          
                        </div>

                    </div>
                </div>
            </div>
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
                    <h2 class="">200k+ Customers Regular Visit Our Site.Try it now!</h2>
                    <p class="mb-30">Enthusiastically mesh user friendly content with long-term high-impact architectures. Proactively underwhelm .</p>
                    <a href="" class="custom-btn">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require "./config/footer.php"
?>