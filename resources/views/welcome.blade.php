@extends('layouts.guestLayout')
@section('title', 'Welcome To')
@section('description', 'Best Saloon Welcome')


@section('content')
    <div class="page">
        <header class="page-header">
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-original rd-navbar-fixed" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth"
                    data-stick-up-clone="true" data-md-stick-up-offset="140px" data-lg-stick-up-offset="140px">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle toggle-original"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html">
                                    <div class="brand-mobile"><img src="images/logo-default-dark-200x36.png" alt=""
                                            width="200" height="36">
                                    </div>
                                    <div class="brand-desktop"><img src="images/logo-big-dark-125x125.png" alt=""
                                            width="125" height="125">
                                    </div>
                                </a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap toggle-original-elements">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li class="active rd-navbar--has-megamenu rd-navbar-submenu"><a
                                            href="index.html">Home</a>
                                        <ul class="rd-navbar-megamenu rd-navbar-open-right">
                                            <li>
                                                <p class="rd-megamenu-header"><a href="index.html">Home</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="home-variant-2.html">Home variant 2</a></li>
                                                    <li><a href="home-variant-3.html">Home variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="about.html">About</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="barbers.html">barbers</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Contact Us</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="contacts-1.html">Contacts 1</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="services.html">Services</a></p>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Book</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="step-1.html">Step 1</a></li>
                                                    <li><a href="step-2.html">Step 2</a></li>
                                                    <li><a href="step-3.html">Step 3</a></li>
                                                    <li><a href="step-4.html">Step 4</a></li>
                                                    <li><a href="finish.html">Finish</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Blog</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-post.html">Single post</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="shop.html">Shop</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="single-product.html">Single product</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            {{-- <li>
                                                <p class="rd-megamenu-header">Pages</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="404-page.html">404 page</a></li>
                                                    <li><a href="503-page.html">503 page</a></li>
                                                    <li><a href="maintenance.html">Maintenance</a></li>
                                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="header-perspective.html">Header perspective</a></li>
                                                    <li><a href="header-transparent.html">Header transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Header fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="footer-default.html">Footer default</a></li>
                                                    <li><a href="footer-variant-2.html">Footer variant 2</a></li>
                                                    <li><a href="footer-variant-3.html">Footer variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Additional</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="forms.html">Forms</a></li>
                                                    <li><a href="grid.html">Grid</a></li>
                                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                                    <li><a href="tables.html">Tables</a></li>
                                                    <li><a href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                        </ul> --}}
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="about.html">About</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="barbers.html">barbers</a>
                                            </li>
                                            <li><a href="testimonials.html">Testimonials</a>
                                            </li>
                                            <li><a href="faq.html">FAQ</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li><a href="services.html">Services</a>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="blog.html">Blog</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="single-post.html">Single post</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="shop.html">Shop</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="single-product.html">Single product</a>
                                            </li>
                                            <li><a href="cart.html">Cart</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#">Contacts</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="contacts-1.html">Contacts 1</a></li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                {{-- <nav class="rd-navbar rd-navbar--is-clone rd-navbar-fixed" data-layout="rd-navbar-fixed"
                    data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed"
                    data-lg-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth"
                    data-stick-up-clone="true" data-md-stick-up-offset="140px" data-lg-stick-up-offset="140px">
                    <div class="rd-navbar-inner">
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle toggle-cloned"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <div class="rd-navbar-brand"><a class="brand-name" href="index.html">
                                    <div class="brand-mobile"><img src="images/logo-default-dark-200x36.png" alt=""
                                            width="200" height="36">
                                    </div>
                                    <div class="brand-desktop"><img src="images/logo-big-dark-125x125.png" alt=""
                                            width="125" height="125">
                                    </div>
                                </a></div>
                        </div>
                        <div class="rd-navbar-nav-wrap toggle-cloned-elements">
                            <div class="rd-navbar-nav-inner">
                                <ul class="rd-navbar-nav">
                                    <li class="active rd-navbar--has-megamenu rd-navbar-submenu"><a
                                            href="index.html">Home</a>
                                        <ul class="rd-navbar-megamenu rd-navbar-open-right">
                                            <li>
                                                <p class="rd-megamenu-header"><a href="index.html">Home</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="home-variant-2.html">Home variant 2</a></li>
                                                    <li><a href="home-variant-3.html">Home variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="about.html">About</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="barbers.html">barbers</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Contact Us</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="contacts-1.html">Contacts 1</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="services.html">Services</a></p>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Book</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="step-1.html">Step 1</a></li>
                                                    <li><a href="step-2.html">Step 2</a></li>
                                                    <li><a href="step-3.html">Step 3</a></li>
                                                    <li><a href="step-4.html">Step 4</a></li>
                                                    <li><a href="finish.html">Finish</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Blog</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-post.html">Single post</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header"><a href="shop.html">Shop</a></p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="single-product.html">Single product</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Pages</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="404-page.html">404 page</a></li>
                                                    <li><a href="503-page.html">503 page</a></li>
                                                    <li><a href="maintenance.html">Maintenance</a></li>
                                                    <li><a href="coming-soon.html">Coming soon</a></li>
                                                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="header-perspective.html">Header perspective</a></li>
                                                    <li><a href="header-transparent.html">Header transparent</a></li>
                                                    <li><a href="header-fullwidth.html">Header fullwidth</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="rd-megamenu-header">Layouts</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="footer-default.html">Footer default</a></li>
                                                    <li><a href="footer-variant-2.html">Footer variant 2</a></li>
                                                    <li><a href="footer-variant-3.html">Footer variant 3</a></li>
                                                </ul>
                                                <p class="rd-megamenu-header">Additional</p>
                                                <ul class="rd-megamenu-list">
                                                    <li><a href="buttons.html">Buttons</a></li>
                                                    <li><a href="forms.html">Forms</a></li>
                                                    <li><a href="grid.html">Grid</a></li>
                                                    <li><a href="progress-bars.html">Progress Bars</a></li>
                                                    <li><a href="tables.html">Tables</a></li>
                                                    <li><a href="tabs-and-accordions.html">Tabs and Accordions</a></li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="about.html">About</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="barbers.html">barbers</a>
                                            </li>
                                            <li><a href="testimonials.html">Testimonials</a>
                                            </li>
                                            <li><a href="faq.html">FAQ</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li><a href="services.html">Services</a>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="blog.html">Blog</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="single-post.html">Single post</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="shop.html">Shop</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="single-product.html">Single product</a>
                                            </li>
                                            <li><a href="cart.html">Cart</a>
                                            </li>
                                            <li><a href="checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                    <li class="rd-navbar--has-dropdown rd-navbar-submenu"><a href="#">Contacts</a>
                                        <ul class="rd-navbar-dropdown rd-navbar-open-right">
                                            <li><a href="contacts-1.html">Contacts 1</a>
                                            </li>
                                            <li><a href="contacts-2.html">Contacts 2</a>
                                            </li>
                                        </ul>
                                        <span class="rd-navbar-submenu-toggle"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav> --}}
            </div>
        </header>
    </div>
@endsection