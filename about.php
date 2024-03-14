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
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="armada.php">Armada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="gallery.php">Gallery</a>
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
    <h1 class="header-title">About</h1>
    <img src="assets/img/bg-header-kanan.png" alt="Right Image" class="right-image">
  </header>


<section id="about" class="mt-5 mb-5">
    <div class="container mb-5 mt-5">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-12 col-12 img-about">
                <img src="assets/img/about.svg" alt="">
            </div>
            <div class="col-xl-6 col-md-12 col-12 desc-about">

                <h1 class="about-sub-title">CV. Solo Mandiri Travelindo</h1>
                <p class="about-desc">Solo Mandiri Travelindo is a company operating in the travel sector. We
                    provide several package options according to your needs, including Smart Vacation, Smart MICE, Smart
                    Outbound, and Smart Ticketing. Head office of CV. Solo Mandiri Travelindo is located on Jl. Trisula
                    No. 27 Kampung Batik Kauman Solo 57112.
                </p>


                <button class="btn-contact">Contact Us</button>
                <button class="btn-service">Our Services</button>
            </div>
        </div>

    </div>
</section>

<section id="stats" class="mt-5 mb-5">
    <div class="d-xl-inline d-lg-inline d-md-inline d-none">
        <div class="stats-container">
            <div class="container">
                <div class="row row-divider text-center justify-content-center">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-6 stats-col pe-5">
                        <div class="stats-title">45+</div>
                        <div class="stats-desc">Destinations</div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6 stats-col">
                        <div class="stats-title">142+</div>
                        <div class="stats-desc">Happy Tourist</div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-6 stats-col pe-5">
                        <div class="stats-title">25+</div>
                        <div class="stats-desc">Package</div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-6 stats-col">
                        <div class="stats-title">34+</div>
                        <div class="stats-desc">Teams</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class=" d-xl-none d-lg-none d-md-none d-inline">
        <div class="stats-container-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-6 mt-5">
                        <div class="stats-title">45+</div>
                        <div class="stats-desc">Destinations</div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="stats-title">142+</div>
                        <div class="stats-desc">Happy Tourist</div>
                    </div> 
                    <div class="col-6 mt-5 mb-5">
                        <div class="stats-title">25+</div>
                        <div class="stats-desc">Package</div>
                    </div>
                    <div class="col-6 mt-5 mb-5">
                        <div class="stats-title">34+</div>
                        <div class="stats-desc">Teams</div>
                    </div>
                </div>
                
            </div>
            <div class="position-relative">
                    <div class="position-absolute bottom-0 end-0">
                        <img src="assets/img/stats-about.svg" alt="">
                    </div>
                </div>
        </div>

    </div>

</section>

<section id="service">
    <div class="container mt-5">
        <div class="row align-items-center justify-content-beetwen mb-5 mt-3">
            <div class="col-md-3">
                <h1 class="service-sub-title">We Are Members Of</h1>
            </div>
            <div class="col-md-5 col-12">
                <p class="service-desc">Solo Mandiri Travelindo is a member of Asosiasi Pelaku Pariwisata Indonesia,
                    Association of The Indonesian Tours and Travel Agencies dan Solo Raya Travel Community.</p>
            </div>

        </div>
    </div>
</section>

<section id="member" class="mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center">

            <div class="col-md-4 col-4">
                <img src="assets/img/asppi 1.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 col-4">
                <img src="assets/img/ASITA LOGO_1_ 1.png" class="img-fluid">
            </div>
            <div class="col-md-4 col-4">
                <img src="assets/img/solo raya 1.png" class="img-fluid ">
            </div>
        </div>
    </div>
</section>

<?php include('layout/promotion.php'); ?>
<?php include('layout/footer.php'); ?>