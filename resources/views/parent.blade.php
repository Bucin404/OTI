<!doctype html>
<html lang="zxx">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">

    <!-- Title -->
    <title>PT. OME TEKNOLOGI INDONESIA</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/oti-favicon.ico') }}">
</head>

<body>
<!-- Start Preloader -->
<div class="preloader">
    <div class="preloader-wave"></div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="/" class="logo">
            <img src="{{ asset('assets/img/oti-logo-dark.png') }}" class="logo-one" alt="Logo">
            <img src="#" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/oti-logo-dark.png') }}" alt="Logo" style="height: 40px;">
                </a>
                <a class="navbar-brand-sticky" href="/">
                    <img src="{{ asset('assets/img/oti-logo-light.png') }}" alt="Logo" style="height: 40px;">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link active">
                                Home
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Pages
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/members" class="nav-link">
                                        Members
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portfolio" class="nav-link">
                                        Portfolio
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pricing" class="nav-link">
                                        Pricing
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/faq" class="nav-link">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/terms-condition" class="nav-link">
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/privacy-policy" class="nav-link">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Services
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/services" class="nav-link">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/service-details" class="nav-link">
                                        Service Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/testimonial" class="nav-link">
                                Testimonial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Blog
                                <i class='bx bxs-chevron-right'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/blog" class="nav-link">
                                        Blog
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/blog-details" class="nav-link">
                                        Blog Details
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <div class="menu-btn">
                        <a href="#" class="seo-btn">OTI</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Main Banner -->
@yield('content')
<!-- Main Banner End -->

<!-- Footer Area -->
<footer id="footer" class="footer-area bg-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-single">
                        <div class="footer-single-content">
                            <a href="/">
                                <img src="{{ asset('assets/img/oti-logo-light.png') }}" alt="Logo" style="height: 60px;">
                            </a>
                            <p>PT. OME TEKNOLOGI INDONESIA adalah perusahan supplier dan kontraktor Produk Mekanikal dan Elektrikal.</p>
                        </div>

                        <div class="newsletter-area">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <input type="email" class="form-control" placeholder="Email" name="EMAIL" required autocomplete="off">
                                <button class="subscribe-btn" type="submit">
                                    Berlangganan
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-50">
                        <h3>Services</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services">SEO Optimization</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services">Social Marketing</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services">Busines Growing</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services"> Data Analysis</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services">App Development </a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services"> Web Development</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-list">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/services">Service</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/testimonial">Testimonial</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/blog">Blog</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-list ml-20">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="tel:+1123456789">+62-813 11 3333 12</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="mailto:info@bonsa.com">info@oti.com</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                <a href="mailto:hello@bonsa.com">hello@oti.com</a>
                            </li>
                            <li>
                                <i class='bx bxs-chevron-right'></i>
                                Bekasi, Indonesia
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="bottom-text text-center">
                        <p>
                            Copyright @<script>document.write(new Date().getFullYear())</script> OTI. All Rights Reserved by
                            <a href="https://ome.co.id/" target="_blank">PT. Obormas Mitra Elektrindo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!-- Jquery Min JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap Bundle Min JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<!-- Form Validator Min JS -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact Form JS -->
<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
