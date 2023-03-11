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
        
@endsection