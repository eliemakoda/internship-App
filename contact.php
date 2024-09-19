<?php
session_start();
require "./config/header.php";
?>
<div class="about-us-banner">
    <div class="about-three-rapper position-relative">
        <img src="images/shape/shape-2.png" alt="" class="shape shape-12">
        <img src="images/shape/shape-3.png" alt="" class="shape shape-13">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center flex-column text-center">
                <div class="d-flex align-items-center justify-content-center mt-240 md-mt-100 pb-60">
                    <h1 class="mb-30">Nous Contacter.</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map mb-160 md-mb-80">
    <div class="container-fluid">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="1920" height="550" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018872.683916905!2d8.594780409953875!3d4.026244715875341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106112e8c4e71eb7%3A0x73759b57058cdb86!2seneo!5e0!3m2!1sen!2srw!4v1722000511357!5m2!1sen!2srw">
                </iframe>
            </div>
        </div>
    </div>
</div>
<section class="get-touch mb-160 md-mb-80">
    <div class="container">
        <div class="text-center mb-50">
            <h2 class="heading-2">Nos Contacts</h2>
        </div>
        <div class="row px0 g-5 d-flex align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="touch-1 d-flex align-items-center justify-content-center flex-column mt-40 mb-40">
                    <div class="top-touch d-flex align-items-center justify-content-center"><i class="bi bi-telephone"></i></div>
                    <div class="bottom-touch pt-30"><span>(237) 6 55 98 52 56</span></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="touch-2 d-flex align-items-center justify-content-center flex-column mt-40 mb-40">
                    <div class="top-touch d-flex align-items-center justify-content-center"><i class="bi bi-geo-alt"></i></div>
                    <div class="bottom-touch pt-30"><span>Bonanjo , Douala , Cameroun</span></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="touch-3 d-flex align-items-center justify-content-center flex-column mt-40 mb-40">
                    <div class="top-touch d-flex align-items-center justify-content-center"><i class="bi bi-envelope-open"></i></div>
                    <div class="bottom-touch pt-30"><span>contact@eneocameroon.cm</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-form mb-160 md-mb-80">
    <div class="container">
        <div class="text-center">
            <h2 class="heading-2">Send us Message</h2>
        </div>
        <div class="row pt-60 g-5">
            <div class="col-lg-4">
                <label class="form-label mb-10">Name</label>
                <input type="text" class="form-control" placeholder="Entrez votre nom complet" aria-label="First name">
            </div>
            <div class="col-lg-4">
                <label class="form-label mb-10">Email Id</label>
                <input type="email" class="form-control" placeholder="Entrez votre adresse e-mail" aria-label="First name">
            </div>
            <div class="col-lg-4">
                <label class="form-label mb-10">Phone Number</label>
                <input class="form-control" type="tel" id="phone" name="phone" placeholder="+237-699-99-99-99" pattern="[0-9]{4}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
            </div>
        </div>

        <div class="row pt-40 g-5">
            <div class="col">
                <label class="form-label mb-10">Message</label>
                <textarea class="form-control" placeholder="Ecrivez votre message" id="exampleFormControlTextarea1" rows="10"></textarea>
                <button class="custom-btn d-flex align-items-center justify-content-center mt-60" type="submit">Send Message</button>
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
                    <h2 class="">+ de 200 stagiaires acompagnés au cours de l'année 2024</h2>
                    <p class="mb-30">Un environnement d'apprentissage aupres des professionnels de metiers.</p>
                    <a href="" class="custom-btn">Candidatez maintenant</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require "./config/footer.php";
?>