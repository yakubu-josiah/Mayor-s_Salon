@extends('layouts.guestLayout')
@section('title', 'Welcome')
@section('description', 'Best Saloon Welcome')


@section('content')
    <!-- Preloader -->
    {{-- <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> --}}
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <img src="img/logo.png" class="logo-img" alt=""> </a>
                <!-- <a class="logo" href="index.html"> <h2>Perukar <span>Barber Shop</span></h2> </a> -->
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html" class="dropdown-item"><span>Portfolio</span></a></li>
                            <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                            <li><a href="faq.html" class="dropdown-item"><span>Faq</span></a></li>
                            <li><a href="services-page.html" class="dropdown-item"><span>Services Page</span></a></li>
                            <li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
                            <li><a href="post.html" class="dropdown-item"><span>Post Single</span></a></li>
                            <li><a href="404.html" class="dropdown-item"><span>404</span></a></li>
                            <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a></li>
                            <li class="dropdown-submenu dropdown"> <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Sub Menu <i class="ti-angle-right"></i></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" class="dropdown-item"><span>Dropdown</span></a></li>
                                    <li><a href="#" class="dropdown-item"><span>Dropdown</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Blog <i class="ti-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog.html" class="dropdown-item"><span>Blog 01</span></a></li>
                            <li><a href="blog2.html" class="dropdown-item"><span>Blog 02</span></a></li>
                            <li><a href="blog3.html" class="dropdown-item"><span>Blog 03</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Kenburns Slider -->
    <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="6">
        <div class="kenburns-inner h-100">
            <div class="v-middle caption text-center">
                <div class="container">
                    <div class="row h-100 justify-content-center">
                        <div class="col-md-8 text-center"> 
                            <h6>Stay sharp, Look good</h6>
                            <h1>NYC'S FAVOURITE BARBER SHOP.</h1> 
                            <h6>Broadway St, NYC. Appointment: 855 100 4444</h6> 
                            <a href="#" class="button-1 mt-20">Make Appointment<span></span></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </aside>
    <!-- About -->
    <section class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-head mb-20">
                        <div class="section-subtitle">Since 2006</div>
                        <div class="section-title">Perukar Barber Shop</div>
                    </div>
                    <p>Come experience a unique and edgy barbershop for all your hair and beard needs. ravida haretra nuam enim mi obortis eset uctus enec accumsan eu justo alisuame amet auctor orci donec vitae vehicula risus.</p>
                    <p>Barber utate ons amet ravida haretra nuam the duru miss uctus the drana accumsan justo aliquam sit amet auctor orci done vitae risus duise nisan sapien silver on the accumsan id mauris apien.</p>
                    <ul class="about-list list-unstyled mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>We're professional and certified barbers</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>We use quality products to make you look perfect</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>We care about our customers satisfaction</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="img/about2.jpg" alt="" class="mt-90 mb-30"> </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="img/about.jpg" alt=""> </div>
            </div>
        </div>
    </section>
    <!-- Services Box -->
    <section class="services-box section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item"> <span class="icon icon icon-icon-1-6"></span>
                        <div class="cont">
                            <h5>Cuts</h5>
                            <p>Cuts ut nisl quam nestibulum drana odio elementum sceisue the can golden varius the dis monte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"> <span class="icon icon-icon-1-3"></span>
                        <div class="cont">
                            <h5>Fades</h5>
                            <p>Fades ut nisl quam nestibulum drana odio elementum sceisue the can golden varius the dis monte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"> <span class="icon icon-icon-1-1"></span>
                        <div class="cont">
                            <h5>Shaves</h5>
                            <p>Shaves ut nisl quam nestibulum drana odio elementum sceisue the can golden varius the dis monte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our History -->
    <section class="about section-padding bg-darkbrown">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 animate-box" data-animate-effect="fadeInLeft"> <img src="img/about3.jpg" alt=""> </div>
                <div class="col-md-7 valign mb-30 animate-box" data-animate-effect="fadeInRight">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-head mb-20">
                                <div class="section-subtitle">17 Year of Experience</div>
                                <div class="section-title white">Making people look awesome since 2006</div>
                            </div>
                            <p>Come experience a unique and edgy barbershop for all your hair and beard needs. Vulputate ons amet ravida haretra nuam the drana miss uctus enec accumsan justo aliquam sit amet auctor orci done vitae risus duise nunc sapien.</p>
                            <div class="about-bottom"> <img src="img/signature.svg" alt="" class="image about-signature">
                                <div class="about-name-wrapper">
                                    <div class="about-rol">Barber, Founder</div>
                                    <div class="about-name">Harold Brown</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services -->
    <section class="barber-services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">What we're offering</div>
                        <div class="section-title">Barber Services</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="img/services/2.jpg" alt=""> </div>
                        <div class="con">
                            <div class="icon icon-icon-1-6"></div>
                            <h5>Hair Cut</h5>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="permalink">Hair cut amet ravida haretra nuam the drana miss uctus enec accumsan.</div>
                                    <h6>$30</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="img/services/1.jpg" alt=""> </div>
                        <div class="con">
                            <div class="icon icon-icon-1-1"></div>
                            <h5>Beard Trim</h5>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="permalink">Shaves ons amet ravida haretra nuam the drana miss uctus enec accumsan.</div>
                                    <h6>$20</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="img/services/3.jpg" alt=""> </div>
                        <div class="con">
                            <div class="icon icon-icon-1-4"></div>
                            <h5>Hair Wash</h5>
                            <div class="line"></div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="permalink">Hair wash amet ravida haretra nuam the drana miss uctus enec accumsan.</div>
                                    <h6>$15</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/6.jpg" data-overlay-dark="4">
        <div class="container">
            <div class="row">
                <!-- Testimonials -->
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="testimonials">
                        <div class="testimonials-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item"> <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/1.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Andreas Brown</h6> <span>Customer review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/2.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Emily White</h6> <span>Customer review</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item"> <span>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                        <i class="star-rating"></i>
                                    </span>
                                    <p>Lorem dapibus asue metus the nec feusiate eraten miss hendreri net ve ante the lemon sanleo nectan feugiat erat hendrerit necuis ve ante viventa miss sapien silver on the duiman lorem ipsum amet silver miss rana duru at finibus viverra neca the sene on satien.</p>
                                    <div class="info">
                                        <div class="author-img"> <img src="img/team/3.jpg" alt=""> </div>
                                        <div class="cont">
                                            <h6>Daniel Martin</h6> <span>Customer review</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- First Class Services -->
    <div class="first-class-services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">Firs-Class</div>
                        <div class="section-title white">Our Features</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/barber.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Groom's Shave</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Groom's Shave</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau manis dis arturient monte.</i></p> <a href="#0" class="button-2 mt-15">Appointment<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/kids.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Kids Cuts</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Kids Cuts</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau manis dis arturient monte.</i></p> <a href="#0" class="button-2 mt-15">Appointment<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="square-flip">
                        <div class="square bg-img" data-background="img/team/b3.jpg">
                            <div class="square-container d-flex align-items-end justify-content-end">
                                <div class="box-title">
                                    <h4>Creative Barbers</h4>
                                </div>
                            </div>
                            <div class="flip-overlay"></div>
                        </div>
                        <div class="square2">
                            <div class="square-container2">
                                <h4>Creative Barbers</h4>
                                <p><i>Lorem nisl miss nestibulum nec odio duru the aucan ula orci varius natoque enatau manis dis arturient monte.</i></p> <a href="team.html" class="button-2 mt-15">Our Team<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video -->
    <section class="section-padding video-wrapper video bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-head text-center">
                        <div class="section-title white">Watch Our Barbershop Promo Video</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="vid" href="https://youtu.be/e2x0UXVU2yg">
                        <div class="vid-butn"> <span class="icon"><i class="ti-control-play"></i></span> </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing -->
    <section class="barber-pricing section-padding position-re">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-head text-center">
                            <div class="section-subtitle">Pricing Plan</div>
                            <div class="section-title">Barber Pricing</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Wash and Cut</div>
                                <div class="dots"></div>
                                <div class="price">$20</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Head Shave with Razor</div>
                                <div class="dots"></div>
                                <div class="price">$30</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Long Hair</div>
                                <div class="dots"></div>
                                <div class="price">$45</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Children Wash & Cut</div>
                                <div class="dots"></div>
                                <div class="price">$25</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Wash and Style</div>
                                <div class="dots"></div>
                                <div class="price">$10</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Short Beard Tidy</div>
                                <div class="dots"></div>
                                <div class="price">$15</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Large beard trim</div>
                                <div class="dots"></div>
                                <div class="price">$25</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                    <div class="menu-list mb-30">
                        <div class="item">
                            <div class="flex">
                                <div class="title">Luxury Full Service</div>
                                <div class="dots"></div>
                                <div class="price">$60</div>
                            </div>
                            <p><i>Lorem nestibulum sceisue can varius the dis monte.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team -->
    <section class="team section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">Our Barbers</div>
                        <div class="section-title white">Hair Stylists</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b1.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Philip Brown<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"> <a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
                                </div> <a href="team-details.html" class="button-1 mt-15">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Philip Brown<span>Barber</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b2.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Stephen Martin<span>Stylist</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"> <a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
                                </div> <a href="team-details.html" class="button-1 mt-15">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Stephen Martin<span>Stylist</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b3.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Dennis Dan<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"> <a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
                                </div> <a href="team-details.html" class="button-1 mt-15">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Dennis Dan<span>Barber</span></h3>
                            </div>
                        </div>
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="img/team/b4.jpg" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">Helen Brown<span>Barber</span></h3>
                                <p class="team-text">Nulla quis efficitur lacus sulvinar suere ausue in eduis euro vesatien arcuman ontese auctor ac aleuam aretra.</p>
                                <div class="social">
                                    <div class="full-width"> <a href="#"><i class="ti-linkedin"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-instagram"></i></a> </div>
                                </div> <a href="team-details.html" class="button-1 mt-15">Team Details<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">Helen Brown<span>Barber</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services - We Also Offer -->
    <section class="services-1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">Our Services</div>
                        <div class="section-title">We Also Offer</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-1"></span>
                            <h5>Moustache Trim</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-1"></span> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-9"></span>
                            <h5>Face Shave</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-9"></span> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-3"></span>
                            <h5>Beard Trim</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-3"></span> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-2"></span>
                            <h5>Haircut</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-2"></span> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-6"></span>
                            <h5>Clipper Cut</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-6"></span> </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item">
                        <a href="services-page.html"> <span class="icon icon-icon-1-8"></span>
                            <h5>Facial & Massage</h5>
                            <p>Lorem vulputate massa ons amet ravida haretra nuam the drana miss uctus enec accumsan aliquam sit sapien.</p>
                            <div class="shape"> <span class="icon icon-icon-1-8"></span> </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News -->
    <section class="news section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-subtitle">Latest news</div>
                        <div class="section-title white">News & Blog</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/8.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>29</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Hair Care</a>
                                </span>
                                <h5><a href="post.html">Women's Hair Care Routine for Any Hair Type</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/9.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>27</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Beard</a>
                                </span>
                                <h5><a href="post.html">Common Mistakes That Damage Your Beard</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/6.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>25</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Hairstyle</a>
                                </span>
                                <h5><a href="post.html">5 Most Iconic Men’s Hairstyles Of All Times</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/4.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>23</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Haircut</a>
                                </span>
                                <h5><a href="post.html">What Are The Secrets of The Haircut & Moustache Trim?</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/16.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>22</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Wedding</a>
                                </span>
                                <h5><a href="post.html">Best Tips for Groom Shaving for Your Wedding</a></h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="img/slider/19.jpg" alt="">
                                <div class="date">
                                    <a href="post.html"> <span>Dec</span> <i>20</i> </a>
                                </div>
                            </div>
                            <div class="con"> <span class="category">
                                    <a href="blog.html">Blog</a>
                                </span>
                                <h5><a href="post.html">What We Need to Choose The Fashion Model?</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Appointment Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/20.jpg" data-overlay-dark="6">
            <div class="container">
                <div class="row">
                    <!-- Appointment call -->
                    <div class="col-md-5 mb-30 mt-60">
                        <p class="mb-0"><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>We Are Best Barbers & Hair Cutting Salon at NYC.</h5>
                        <div class="reservations mb-10">
                            <div class="icon color-1"><span class="icon-icon-1-1"></span></div>
                            <div class="text">
                                <p class="color-1">Appointment</p> <a class="color-1" href="tel:855-100-4444">855 100 4444</a>
                            </div>
                        </div>
                    </div>
                    <!-- Appointment form -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box text-center">
                                <h4>Make An Appointment</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <label>Name</label>
                                                <div class="input2_inner">
                                                    <input type="text" class="form-control input" placeholder="Name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <label>Phone</label>
                                                <div class="input2_inner">
                                                    <input type="text" class="form-control input" placeholder="Phone" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input1_wrapper">
                                                <label>Date</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Date" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Time</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Time</option>
                                                        <option value="1">10:00 am</option>
                                                        <option value="2">11:00 am</option>
                                                        <option value="3">12:00 pm</option>
                                                        <option value="4">14:00 pm</option>
                                                        <option value="5">16:00 pm</option>
                                                        <option value="6">18:00 pm</option>
                                                        <option value="7">20:00 pm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Services</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Services</option>
                                                        <option value="0">Hair Styling</option>
                                                        <option value="1">Face Mask</option>
                                                        <option value="2">Shaving</option>
                                                        <option value="3">Beard Triming</option>
                                                        <option value="4">Hair Wash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Choose Barber</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Choose Barber</option>
                                                        <option value="0">Philip</option>
                                                        <option value="1">Stephen</option>
                                                        <option value="2">Dennis</option>
                                                        <option value="3">Helen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Make Appointment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/2.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/3.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/4.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/5.png" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="img/clients/6.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-column footer-contact">
                            <h3 class="footer-title">Contact</h3>
                            <p class="footer-contact-text">0665 Broadway NY, New York 10001
                                <br>United States of America
                            </p>
                            <div class="footer-contact-info">
                                <p class="footer-contact-phone">855 100 4444</p>
                                <p class="footer-contact-mail">info@barber.com</p>
                            </div>
                            <div class="footer-about-social-list"> <a href="#"><i class="ti-instagram"></i></a> <a href="#"><i class="ti-twitter"></i></a> <a href="#"><i class="ti-youtube"></i></a> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i class="ti-pinterest"></i></a> </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="item opening">
                            <h3 class="footer-title">Work Time</h3>
                            <ul>
                                <li>
                                    <div class="tit">Monday</div>
                                    <div class="dots"></div> <span>10:00 - 20:00</span>
                                </li>
                                <li>
                                    <div class="tit">Tuesday</div>
                                    <div class="dots"></div> <span>10:00 - 20:00</span>
                                </li>
                                <li>
                                    <div class="tit">Thursday</div>
                                    <div class="dots"></div> <span>10:00 - 20:00</span>
                                </li>
                                <li>
                                    <div class="tit">Friday</div>
                                    <div class="dots"></div> <span>10:00 - 20:00</span>
                                </li>
                                <li>
                                    <div class="tit">Saturday</div>
                                    <div class="dots"></div> <span>10:00 - 20:00</span>
                                </li>
                                <li>
                                    <div class="tit">Weekend</div>
                                    <div class="dots"></div> <span>Closed</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="footer-column footer-explore clearfix">
                            <h3 class="footer-title">Subscribe</h3>
                            <div class="row subscribe">
                                <div class="col-md-12">
                                    <p>Subscribe to take advantage of our campaigns and gift certificates.</p>
                                    <form>
                                        <input type="text" name="search" placeholder="Your email" required>
                                        <button>Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-inner">
                            <p class="footer-bottom-copy-right">2023 © All rights reserved. Designed by <a href="https://1.envato.market/DuruThemes" target="_blank">DuruThemes</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/vegas.slider.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
    <script>
        $(document).ready(function() {
            $('#kenburnsSliderContainer').vegas({
                slides: [{
                    src: "img/slider/1.jpg"
                }, {
                    src: "img/slider/2.jpg"
                }, {
                    src: "img/slider/3.jpg"
                }, {
                    src: "img/slider/5.jpg"
                }],
                overlay: true,
                transition: 'fade2',
                animation: 'kenburnsUpRight',
                transitionDuration: 1000,
                delay: 10000,
                animationDuration: 20000
            });
        });
    </script>
@endsection