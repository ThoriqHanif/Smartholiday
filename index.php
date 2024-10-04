<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Smart Production</title>
    <link rel="shortcut icon" href="assets/img/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <style>
        .banner-image {
            position: relative;
            width: 100%;
            height: 100vh;
            background-size: cover;
            overflow: hidden;
        }

        .banner-image::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("assets/img/hero.png");
            background-size: cover;
            filter: brightness(0.6);
            z-index: -1;
        }
    </style>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <img src="assets/img/icon.png" alt="" height="50" class="navbar-logo" />
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/img/hamburger.png" alt="Toggle" width="30">
            </button>

            <div class="collapse navbar-collapse justify-content-end nav-justified" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="armada.php">ARMADA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Image  -->
    <section id="hero" class="hero">
        <div class="banner-image w-100 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 ">
                        <div class="hero-btn">Holiday</div>
                        <div class="hero-title mt-3">
                            <h1 class="hero-title">EXPLORE YOUR</h1>
                            <h1 class="hero-title">FAVORITE DESTINATIONS</h1>
                        </div>

                        <div class="hero-desc">
                            Solo Mandiri Tavelindo provides all you need to optimize your
                            best tourism. Do your vacation trip by using Solo Mandiri
                            Travelindo. Happy Holiday with Smart Production
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION EXPERIENCE -->
    <section id="experience">
        <div class="container">
            <div class="row ">
                <div class="col-xl-7 col-lg-6 col-md-12 col-12 img-experience">
                    <img src="assets/img/img-experience.svg" alt="">
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-12 desc-experience">
                    <div class="experience-title mb-3">
                        Our Experience
                    </div>
                    <h1 class="experience-sub-title">Enjoy Your Vacation with New Experience</h1>
                    <p class="experience-desc">We dedicate our service for your pleasure and happiness in enjoying
                        tourism. Solo Mandiri Travelindo provides all you need to optimize your best tourism experience.
                    </p>

                    <div class="row numbering justify-content-center text-center" style="margin-top: 35px;">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-3">
                            <h3 class="count-stats">45+</h3>
                            <p class="desc-stats">Destinations</p>
                        </div>
                        <div class="col-auto">
                            <div class="line"></div>
                        </div>
                        <div class="col-md-4 col-3">
                            <h3 class="count-stats">142+</h3>
                            <p class="desc-stats">Happy Tourist</p>
                        </div>
                        <div class="col-auto">
                            <div class="line"></div>
                        </div>
                        <div class="col-md-3 col-3">
                            <h3 class="count-stats">25+</h3>
                            <p class="desc-stats">Package</p>
                        </div>
                    </div>
                    <button class="btn-package">Choose Package</button>
                    <button class="btn-contact">Contact Us</button>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION SERVICES -->
    <section id="service">
        <div class="container mb-5">
            <div class="service-title">
                Our Services
            </div>
            <div class="row align-items-center justify-content-beetwen mb-5 mt-3">
                <div class="col-lg-4 col-md-12">
                    <h1 class="service-sub-title">Our Best Service</h1>
                    <h1 class="service-sub-title">by Categories </h1>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-6 col-12 ">
                    <p class="service-desc">Enjoy our wide range of services for your <br class="hide-br"> activities.
                        We provide the
                        best for you.</p>
                </div>
                <div class="col-lg-3 col-md-5 text-end">
                    <a class="service-btn" href="service.php">View Details</a>
                </div>
            </div>
            <div class="row justify-content-center container-service">
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center justify-content-beetween">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart <br> Vacation
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            International Tourism Package,
                                            Domestic Tourism Package, Official
                                            Visit Package, Umroh Package, Car
                                            Bus Minibus Renting, Hotel Voucher
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center justify-content-beetween">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart <br> MICE
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            Meeting, Wedding Organizer, Event Organizer, Conference, Incentive,
                                            Exhibition
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center justify-content-beetween">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart <br> Production
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            Smart Production provides various types of services that can help you with your activities. We are ready to help you
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- <div id="categories">
            <div class="slider-categories">
                <div class="slider">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center justify-content-beetween">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart Vacation
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            International Tourism Package,
                                            Domestic Tourism Package, Official
                                            Visit Package, Umroh Package, Car
                                            Bus Minibus Renting, Hotel Voucher
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slider">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center justify-content-beetween">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart MICE
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            Meeting, Wedding Organizer, Event Organizer, Conference, Incentive,
                                            Exhibition
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slider">
                    <div class="service-categories">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0">
                                <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                            </div>
                        </div>
                        <div class="content-categories">
                            <div class="row align-items-center">
                                <div class="col col-md-8">
                                    <div class="categories-title">
                                        <p>
                                            Smart Outbound
                                        </p>
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                    <div class="categories-icon align-self-end">
                                        <img src="assets/img/arrow.png" class="default-img" alt="" />
                                        <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="categories-desc mt-2">
                                        <p>
                                            Smart Outbond provides outbond packaged with various customized games to
                                            meet with your need and your aim.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slider">
                        <div class="service-categories">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <img src="assets/img/Group 4.svg" alt="" class="default-img" />
                                    <img src="assets/img/cat-hover.svg" alt="" class="hover-img" />
                                </div>
                            </div>
                            <div class="content-categories">
                                <div class="row align-items-center justify-content-beetween">
                                    <div class="col col-md-8">
                                        <div class="categories-title">
                                            <p>
                                                Smart Ticketing
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-md-4">
                                        <div class="categories-icon align-self-end">
                                            <img src="assets/img/arrow.png" class="default-img" alt="" />
                                            <img src="assets/img/arrow-hover.svg" class="hover-img" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="categories-desc mt-2">
                                            <p>
                                                We are commited to give you ultimate service, including ticket
                                                reservation for all directions. One Stop Services in Tourism.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div> -->

        <!-- <div class="service-slider">
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-categories d-flex flex-column">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <img src="assets/img/Group 4.svg" alt="" />
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col col-md-7">
                                        <div class="categories-title">
                                            <p>
                                                Smart <br />
                                                Vacation
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-md-5">
                                        <div class="categories-icon">
                                            <img src="assets/img/arrow.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="categories-desc mt-2">
                                            <p>
                                                International Tourism Package,<br />
                                                Domestic Tourism Package, Official <br />
                                                Visit Package, Umroh Package, Car <br />
                                                Bus Minibus Renting, Hotel Voucher
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-categories d-flex flex-column">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <img src="assets/img/Group 4.svg" alt="" />
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col col-md-7">
                                        <div class="categories-title">
                                            <p>
                                                Smart <br />
                                                MICE
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-md-5">
                                        <div class="categories-icon">
                                            <img src="assets/img/arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col">
                                        <div class="categories-desc mt-2">
                                            <p>
                                                Meeting, Wedding Organizer, Event <br />
                                                Organizer, Conference, Incentive, <br />Exhibition
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-categories d-flex flex-column">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <img src="assets/img/Group 4.svg" alt="" />
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col col-md-7">
                                        <div class="categories-title">
                                            <p>
                                                Smart <br />
                                                Outbond
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-md-5">
                                        <div class="categories-icon">
                                            <img src="assets/img/arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col">
                                        <div class="categories-desc mt-2">
                                            <p>
                                                Smart Outbond provides outbond <br />
                                                packaged with various customized <br />
                                                games to meet with your need and <br />
                                                your aim.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-categories d-flex flex-column">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0">
                                    <img src="assets/img/Group 4.svg" alt="" />
                                </div>
                            </div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col col-md-7">
                                        <div class="categories-title">
                                            <p>
                                                Smart <br />
                                                Ticketing
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col col-md-5">
                                        <div class="categories-icon">
                                            <img src="assets/img/arrow.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-center">
                                    <div class="col">
                                        <div class="categories-desc mt-2">
                                            <p>
                                                We are commited to give you <br />
                                                ultimate service, including ticket <br />
                                                reservation for all directions. One <br />
                                                Stop Services in Tourism.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </div> -->
        </div>
    </section>


    <!-- SECTION DESTINATIONS -->
    <section id="destination" class="mt-5 mb-5">
        <div class="position-relative img-union">
            <div class="position-absolute top-0 start-0">
                <img src="assets/img/union_kiri.png" alt="" class="union-kiri" />
            </div>
            <div class="position-absolute top-0 end-0">
                <img src="assets/img/union_kanan.png" alt="" class="union-kanan" />
            </div>
        </div>
        <div class="container">
            <div class="destination-header">
                <div class="row">
                    <div class="col-md-12">
                        <div class="destination-title">
                            <p>Top Destinations</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="destination-sub-title">
                            <p>Explore Top Destinations <br>in Our Package</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="destination-content mt-5">
                <div class="destination-slider">
                    <div class="slider">
                        <div class="destination-1 img-hover-zoom">
                            <div class="image-container position-relative">
                                <img src="assets/img/destination-1intern.png" alt="">
                                <div class="image-text">Malaysia</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider">
                        <div class="destination-2 img-hover-zoom">
                            <div class="image-container">
                                <img src="assets/img/destination-2.png" alt="">
                                <div class="image-text">Bali</div>
                            </div>
                        </div>
                    </div>

                    <div class="slider">
                        <div class="destination-3 img-hover-zoom">
                            <div class="image-container">
                                <img src="assets/img/destination-3.png" alt="">
                                <div class="image-text">Bandung</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        <a class="destination-btn" href="service.php" style="text-decoration: none;">
            View More Destination
        </a>
        <!-- </div> -->

    </section>


    <!-- SECTION TESTIMONIALS -->
    <section id="testimonial" class="mt-5 mb-5">
        <div class="container mb-5">
            <div class="testi-title">
                Testimonials
            </div>
            <div class="row align-items-center justify-content-beetwen mb-5 mt-3">
                <div class="col-lg-5 col-md-4 col-8">
                    <h1 class="service-sub-title">What Travelers Say</h1>
                    <h1 class="service-sub-title">About Our Services </h1>
                </div>
                <div class="col-lg-5 col-md-4 col-12 order-md-0 order-1">
                    <p class="service-desc">Listen to those who have used our <br> services for their extraordinary
                        vacation.</p>
                </div>
                <div class="col-lg-2 col-md-2 col-4 text-end testi-slide order-md-1 order-0">
                    <img class="testi-slide-prev" src="assets/img/circle-arrow-left.svg"></img>
                    <img class="testi-slide-next" src="assets/img/circle-arrow-right.svg"></img>
                </div>
            </div>
            <div class="testi-slider">
                <div class="slider">
                    <div class="">
                        <div class="testi-card position-relative">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0 testi-star">
                                    <img src="assets/img/Star 1.png" alt="" class="img-testi-star" />
                                </div>
                            </div>

                            <div class="d-flex w-100">
                                <div class="testi-story flex-fill">
                                    <div class="testi-rating align-items-center">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <p>5/5</p>

                                    </div>
                                    <div class="testi-comment">
                                        The service for the tour was very good and <br> satifisying. We really enjoyed
                                        every
                                        part of trip. <br>
                                        Thank you Smart Production!
                                    </div>
                                    <div class="testi-line"></div>
                                    <div class="testi-nama">Ayudia Khairunnisa</div>
                                    <div class="testi-jabatan">CEO of PT. Maju Jaya</div>
                                </div>
                                <div class="flex-fill d-none d-md-none d-lg-none d-xl-inline testi-img text-end">
                                    <img src="assets/img/testi-1.png" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="testi-img-mobile-container d-flex w-100 justify-content-end d-md-inline d-lg-inline d-xl-none">
                        <img src="assets/img/testi-1.png" alt="" class="testi-img-mobile position-relative">
                    </div>
                </div>
                <div class="slider">
                    <div class="">
                        <div class="testi-card position-relative">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0 testi-star">
                                    <img src="assets/img/Star 1.png" alt="" class="img-testi-star" />
                                </div>
                            </div>

                            <div class="d-flex w-100">
                                <div class="testi-story flex-fill">
                                    <div class="testi-rating align-items-center">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <p>5/5</p>

                                    </div>
                                    <div class="testi-comment">
                                        The service for the tour was very good and <br> satifisying. We really enjoyed
                                        every
                                        part of trip. <br>
                                        Thank you Smart Production!
                                    </div>
                                    <div class="testi-line"></div>
                                    <div class="testi-nama">Ayudia Khairunnisa</div>
                                    <div class="testi-jabatan">CEO of PT. Maju Jaya</div>
                                </div>
                                <div class="flex-fill d-none d-md-inline testi-img text-end">
                                    <img src="assets/img/testi-1.png" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-img-mobile-container d-flex w-100 justify-content-end d-md-none">
                        <img src="assets/img/testi-1.png" alt="" class="testi-img-mobile position-relative">
                    </div>
                </div>
                <div class="slider">
                    <div class="">
                        <div class="testi-card position-relative">
                            <div class="position-relative">
                                <div class="position-absolute top-0 start-0 testi-star">
                                    <img src="assets/img/Star 1.png" alt="" class="img-testi-star" />
                                </div>
                            </div>

                            <div class="d-flex w-100">
                                <div class="testi-story flex-fill">
                                    <div class="testi-rating align-items-center">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <img src="assets/img/star.png" alt="">
                                        <p>5/5</p>

                                    </div>
                                    <div class="testi-comment">
                                        The service for the tour was very good and <br> satifisying. We really enjoyed
                                        every
                                        part of trip. <br>
                                        Thank you Smart Production!
                                    </div>
                                    <div class="testi-line"></div>
                                    <div class="testi-nama">Ayudia Khairunnisa</div>
                                    <div class="testi-jabatan">CEO of PT. Maju Jaya</div>
                                </div>
                                <div class="flex-fill d-none d-md-inline testi-img text-end">
                                    <img src="assets/img/testi-1.png" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-img-mobile-container d-flex w-100 justify-content-end d-md-none">
                        <img src="assets/img/testi-1.png" alt="" class="testi-img-mobile position-relative">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PARTNER -->
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
                <div class="col-md-4 col-4 mt-5">
                    <img src="assets/img/Tagline.png" class="img-fluid ">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FOOTER -->
    <section id="footer" class="mt-5">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5">
                    <img class="footer-logo" src="assets/img/icon.png" height="75px" alt="">
                    <p class="footer-about">Solo Mandiri Travelindo merupakan perusahaan yang bergerak pada bidang
                        travel. Kami menyediakan berbagai paket pilihan diantaranya smart vacation, smart mice, smart
                        outbound, dan smart ticketing.</p>
                    <div class="footer-sosmed">
                        <i class="fa-brands fa-facebook icon"></i>
                        <i class="fa-brands fa-x-twitter icon"></i>
                        <i class="fa-brands fa-instagram icon"></i>
                        <i class="fa-brands fa-whatsapp icon"></i>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5 col-5">
                            <h3>Company</h3>
                            <div class="footer-menu">
                                <li><a href="about.php">About</a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="armada.php">Armada</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </div>
                        </div>
                        <div class="col-md-7 col-7">
                            <h3>Services</h3>
                            <div class="footer-menu">
                                <li><a href="">Smart Holiday</a></li>
                                <li><a href="">Smart MICE</a></li>
                                <li><a href="">Smart Production</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">2023 | CV. Solo Mandiri Travelindo</p>
                </div>
            </div>

            </footer>
        </div>
    </section>
    <!-- END FOOTER-->

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

    <script type="text/javascript">
        var nav = document.querySelector("nav");

        window.addEventListener("scroll", function() {
            if (window.pageYOffset > 10) {
                nav.style.backgroundColor = "#3092D9";
                nav.classList.add("#3092D9");
            } else {
                nav.style.backgroundColor = "transparent";
                nav.classList.remove("#3092D9");
            }
        });
    </script>
    <script>
        var testiSlider = tns({
            container: '.testi-slider',
            items: 1,
            gutter: 20,
            loop: true,
            autoplay: false,
            autoplayTimeout: 2000,
            mouseDrag: true,
            touch: true,
            controls: false,
            nav: false,
            autoplayButtonOutput: false,
            responsive: {
                1400: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                768: {
                    disable: false,
                    items: 1,
                },
                576: {
                    disable: false,
                    items: 1,
                },

                0: {
                    disable: false,
                    items: 1,
                }
            }
        });

        var destiSlider = tns({
            container: '.destination-slider',
            items: 1,
            gutter: 20,
            loop: false,
            autoplay: false,
            autoplayTimeout: 1000,
            mouseDrag: true,
            touch: true,
            controls: false,
            nav: false,
            autoplayButtonOutput: false,
            responsive: {
                1400: {
                    disable: true,
                },
                1200: {
                    disable: true,
                },
                1024: {
                    disable: false,
                    items: 3
                },
                992: {
                    disable: false,
                },
                768: {
                    disable: false,
                    items: 2
                },
                576: {
                    disable: false,
                    items: 1.2,
                },

                520: {
                    disable: false,
                    items: 2.4
                },
                490: {
                    disable: false,
                    items: 1
                },
                420: {
                    disable: false,
                    items: 2
                },
                414: {
                    disable: false,
                    items: 1.9
                },
                393: {
                    disable: false,
                    items: 1.8
                },
                // 375: {
                //     items: 1.7
                // },
                360: {
                    items: 1.8
                },
                320: {
                    disable: false,
                    items: 1.5
                },
                0: {
                    disable: false,
                    items: 1,
                }
            }
        });

        document.querySelector('.testi-slide-prev').addEventListener('click', function() {
            testiSlider.goTo('prev');
        });

        document.querySelector('.testi-slide-next').addEventListener('click', function() {
            testiSlider.goTo('next');
        });
    </script>
</body>

</html>