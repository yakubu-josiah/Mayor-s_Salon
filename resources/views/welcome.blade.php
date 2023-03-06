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
    <nav class="navbar navbar-expand-md bg-black navhead">
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
    <aside class="kenburns-section pt-5" id="kenburnsSliderContainer" data-overlay-dark="6">
        <div class="kenburns-inner h-100 pt-3">
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
                        <div class="section-title">Sir Mayor Cutz Salon</div>
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
        
@endsection