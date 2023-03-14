@extends('layouts.guestLayout')
@section('title', 'Welcome')
@section('description', 'Best SirMayor Best Salon Welcome')


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
    <x-header />
    <!-- Kenburns Slider -->
    <aside class="kenburns-section pt-5" id="kenburnsSliderContainer" data-overlay-dark="6">
        <div class="kenburns-inner h-100 pt-3">
            <div class="v-middle caption text-center">
                <div class="container">
                    <div class="row h-100 justify-content-center">
                        <div class="col-md-8 text-center"> 
                            <h6>Stay sharp, Look good</h6>
                            <h1>NA HERE DEM BOIZ DEY.</h1> 
                            <h6>3 Suledada Opp. Chemist Bus Stop Ojo, Lagos, Nigeria.</h6> 
                            <a href="#" class="button-1 mt-20">Book Appointment<span></span></a> 
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
     <section class="about section-padding bg-dark" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-head mb-20">
                        <div class="section-subtitle">Since 2006</div>
                        <div class="section-title text-white">Sir Mayor Cutz Salon</div>
                    </div>
                    <p>E don tey wey dem guys don see SirMayor service as confam. We dey don carry our service enter the level wey pipu don trust our hand.</p>
                    <p>If you want chill with the big boiz you nid to carry better head enter here, make you fit enjoy our service.</p>
                    <ul class="about-list list-unstyled mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Make you know say we no use pkand products for our clients</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Verify for anywhere, you go see say our team no dey sleep for head because our service dey okay gann.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Na that style wey dey your mind gann gann naim we go cut give you.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>We dey win competitions for home and away.</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Make we burst your head, we dey accept any coin for payment too. E shock you abi?</p>
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
                        <div class="position-re o-hidden"> <img src="{{ asset('images/mayorlogo.jpeg') }}" alt=""> </div>
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
                        <div class="position-re o-hidden"> <img src="{{ asset('images/mayorlogo.jpeg') }}" alt=""> </div>
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
                        <div class="position-re o-hidden"> <img src="{{ asset('images/mayorlogo.jpeg') }}" alt=""> </div>
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
                            <div class="team-img"><img src="{{ asset('images/mayorlogo.jpeg') }}" alt="" class="w-100"></div>
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
                            <div class="team-img"><img src="{{ asset('images/mayorlogo.jpeg') }}" alt="" class="w-100"></div>
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
                            <div class="team-img"><img src="{{ asset('images/mayorlogo.jpeg') }}" alt="" class="w-100"></div>
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
                            <div class="team-img"><img src="{{ asset('images/mayorlogo.jpeg') }}" alt="" class="w-100"></div>
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

    
@endsection