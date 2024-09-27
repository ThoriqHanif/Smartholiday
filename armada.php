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
                    <a class="nav-link active" href="armada.php">Armada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="services-header">
    <img src="assets/img/bg-header-kiri.png" alt="Left Image" class="left-image">
    <h1 class="header-title">Armada</h1>
    <img src="assets/img/bg-header-kanan.png" alt="Right Image" class="right-image">
  </header>




<!-- HEAD Armada -->
<!-- HEAD SERVICES -->

<section id="services-page" class="mt-5 mb-5">
    <div class="container">
        <div class="row align-items-center justify-content-center ">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                <div class="service-title">
                    <p>ARMADA</p>
                </div>
                <div class="service-sub-title">
                    <h3>Armada of Smart</h3>
                    <h3>Mandiri Travelindo</h3>
                </div>
                <div class="service-desc">
                    <p>We have many selection of vehicle fleets that can be used, which can be the right solution for
                        all your needs. Entrust all your activities, starting from your event needs by using our vehicle
                        fleet.</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-end">
                <div class="service-img">
                    <img src="assets/img/armada.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="armada">
    <div class="container">
        <ul class="nav justify-content-center mt-5 slider-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" aria-current="page" href="#content-bus" id="bus-tab" data-bs-toggle="tab"
                    aria-controls="content-bus" role="tab">Armada Bus</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#content-mobil" id="mobil-tab" data-bs-toggle="tab"
                    aria-controls="content-mobil" role="tab">Armada Mobil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#content-elf" id="elf-tab" data-bs-toggle="tab" aria-controls="content-elf"
                    role="tab">Armada ELF</a>
            </li>
        </ul>

        <div class="tab-content mt-5 mb-5">
            <div class="tab-pane fade show active" id="content-bus" role="tabpanel" aria-labelledby="bus-tab">
                <div class="content-smart-vacation mt-5 mb-5" id="content-vacation">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-1.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Medium Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>
                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 22, 29, 31 orang
                                        </div>
                                    </div>

                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-2.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Big Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 40, 44, 47, 54 orang
                                        </div>
                                    </div>

                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-3.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Excecutive Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 22, 29, 31 orang
                                        </div>
                                    </div>

                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-4.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Medium Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 22, 29, 31 orang
                                        </div>
                                    </div>
                                    <!-- <div class="info-harga d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Harga.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            2 Juta / hari
                                        </div>
                                    </div> -->
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-5.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Big Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 40, 44, 47, 54 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/bus-6.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Excecutive Bus</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 22, 29, 31 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="content-mobil" role="tabpanel" aria-labelledby="mobil-tab">
                <div class="content-smart-vacation mt-5 mb-5" id="content-vacation">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>
                                    <!-- <div class="info-harga d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Harga.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            550k / 12 jam
                                        </div>
                                    </div> -->
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>

                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>

                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/avanza.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Toyota Avanza</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 2 - 5 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="content-elf" role="tabpanel" aria-labelledby="elf-tab">
                <div class="content-smart-vacation mt-5 mb-5" id="content-vacation">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/elf-lux.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Hiace Luxury</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 7 - 9 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/Armadaelf-long.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>ELF Long</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 15 - 19 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/Armadaelf-long.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>ELF Long</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 15 - 19 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/Armadaelf-long.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>ELF Long</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 15 - 19 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/elf-lux.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Hiace Luxury</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 7 - 9 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-12 mb-5">
                            <div class="armada-card">
                                <div class="armada-img">
                                    <img src="assets/img/elf-lux.svg" alt="">
                                </div>
                                <div class="armada-desc">
                                    <div class="armada-head">
                                        <h5>Hiace Luxury</h5>
                                        <div class="armada-btn-mobile d-xl-none d-lg-none d-md-none d-block">
                                            <a href="" class="">BOOK NOW</a>
                                        </div>
                                    </div>

                                    <div class="info-qty d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/img/Icon Seat.svg" alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            Kapasitas 7 - 9 orang
                                        </div>
                                    </div>
                                    <div class="armada-btn d-xl-block d-lg-block d-md-block d-none">
                                        <a href="" class="">BOOK NOW</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include('layout/promotion.php') ?>
    </div>

</section>
<?php include('layout/footer.php'); ?>