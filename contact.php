<?php include('layout/header.php'); ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 nav-service">
    <div class="container">
        <img src="assets/img/logo/logo.svg" alt="" height="50" class="navbar-logo" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <img src="assets/img/hamburger.png" alt="Toggle" width="30">
        </button>

        <div class="collapse navbar-collapse justify-content-end nav-justified" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="armada.php">Armada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="services-header">
    <img src="assets/img/bg-header-kiri.png" alt="Left Image" class="left-image">
    <h1 class="header-title">Contact</h1>
    <img src="assets/img/bg-header-kanan.png" alt="Right Image" class="right-image">
  </header>

<section id="contact" class="mt-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-12 col-12 img-experience d-xl-block d-lg-block d-md-none d-none">
                <img src="assets/img/contact.svg" alt="">
            </div>
            <div class="img-contact-mobile col-xl-5 col-md-6 col-1 d-xl-none d-lg-none d-md-block d-block mb-5">
                <img src="assets/img/contact-mobile.svg" alt="">
            </div>
            <div class="col-xl-6 col-lg-5 col-md-12 col-12 desc-experience">
                <h1 class="experience-sub-title">Get In Touch with Solo Mandiri Travelindo</h1>
                <p class="experience-desc">You can also contact us by using the form bellow. Our teams would love to
                    hear from you.
                </p>

                <form action="" id="form-contact">
                    <div class="form-group">
                        <label for="" class="label-input">Name <span style="color: #15578F;">*</span></label>
                        <input type="text" class="form-control-custom" placeholder="Your Name">
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="label-input">Email <span style="color: #15578F;">*</span></label>
                        <input type="text" class="form-control-custom" placeholder="Your Email">
                    </div>

                    <div class="form-group mt-3">
                        <label for="" class="label-input">Messages <span style="color: #15578F;">*</span></label>
                        <textarea type="text" class="form-control-custom" placeholder="Write your message"
                            style="height: 260px;"></textarea>
                    </div>
                </form>

                <button class="btn-email">Send Email</button>
            </div>
        </div>
        <div class="spacer"></div>

        <div class="row align-items-center mt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5 col-12">
                <div class="row" id="contact-call">
                    <div class="col-md-3 col-3">
                        <div class="card-image">
                            <img src="assets/img/call.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 col-9 ">
                        <h3>Phone / Whatsapp</h3>
                        <p>(0271) 639852 / (0271) 639852</p>
                        <p>081809510931</p>
                    </div>
                </div>
            </div>

            <div class="col md-5">
                <div class="row" id="contact-call">
                    <div class="col-md-3 col-3">
                        <div class="card-image">
                            <img src="assets/img/loc.svg" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 col-9">
                        <h3>Address of Head Office</h3>
                        <p>Jl. Trisula No. 27 Kampung Batik Kauman Solo 57112</p>

                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<div class="spacer"></div>

<?php include('layout/footer.php') ?>