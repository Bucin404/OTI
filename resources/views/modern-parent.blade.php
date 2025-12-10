<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('meta_description', 'PT. OME TEKNOLOGI INDONESIA - Perusahaan teknologi yang berfokus pada pengembangan, manufaktur, penelitian produk dan layanan berbasis teknologi untuk transformasi digital Indonesia. Software Development, IoT, Smart City, AI, Access Control.')">
    <meta name="keywords" content="@yield('meta_keywords', 'teknologi indonesia, software development, IoT indonesia, smart city, artificial intelligence, access control, mobile solutions, monitoring systems, IT solutions, ome teknologi, OTI')">
    <meta name="author" content="PT. OME TEKNOLOGI INDONESIA">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph Meta Tags (for social media sharing) -->
    <meta property="og:title" content="@yield('og_title', 'OTI - Inovasi Teknologi Indonesia')">
    <meta property="og:description" content="@yield('og_description', 'Solusi teknologi inovatif untuk transformasi digital Indonesia')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('assets/img/oti-logo.png'))">
    <meta property="og:site_name" content="PT. OME TEKNOLOGI INDONESIA">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'OTI - Inovasi Teknologi Indonesia')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Solusi teknologi inovatif untuk transformasi digital Indonesia')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/img/oti-logo.png'))">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/oti-favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/oti-logo.png') }}">
    
    <title>@yield('title', 'OTI - Inovasi Teknologi Indonesia')</title>
    
    <!-- Modern CSS -->
    <link rel="stylesheet" href="{{ asset('css/modern-style.css') }}">
    
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- JSON-LD Structured Data for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "PT. OME TEKNOLOGI INDONESIA",
        "alternateName": "OTI",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/img/oti-logo.png') }}",
        "description": "Perusahaan teknologi yang berfokus pada pengembangan, manufaktur, penelitian produk dan layanan berbasis teknologi",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Perumahan Kierana Indah Residence 1, Blok I No 10",
            "addressLocality": "Bogor",
            "addressRegion": "Jawa Barat",
            "addressCountry": "ID"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62-821-2346-0799",
            "contactType": "Customer Service",
            "email": "ometeknologiindonesia@gmail.com"
        },
        "sameAs": [
            "{{ url('/') }}"
        ]
    }
    </script>
    
    @yield('extra-css')
</head>
<body>
    <!-- Premium Modern Header -->
    <header class="modern-header">
        <nav class="modern-nav">
            <a href="/" class="modern-logo">
                <img src="{{ asset('assets/img/oti-logo-dark.png') }}" alt="OTI Logo">
                <div class="modern-logo-text">
                    <span class="modern-logo-title">OME TEKNOLOGI INDONESIA</span>
                    <span class="modern-logo-subtitle">Inovasi Untuk Masa Depan</span>
                </div>
            </a>
            
            <ul class="modern-menu">
                <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a></li>
                <li><a href="/products" class="{{ Request::is('products*') ? 'active' : '' }}">Products</a></li>
                <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Premium Modern Footer -->
    <footer class="modern-footer">
        <div class="modern-container">
            <div class="modern-footer-grid">
                <div>
                    <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.5rem;">
                        <img src="{{ asset('assets/img/oti-logo-light.png') }}" alt="OTI Logo" style="height: 50px;">
                        <div>
                            <h3 class="modern-footer-title" style="margin-bottom: 0.25rem;">PT. OME TEKNOLOGI INDONESIA</h3>
                            <p style="font-size: 0.85rem; opacity: 0.7; margin: 0;">Inovasi Teknologi Untuk Masa Depan</p>
                        </div>
                    </div>
                    <p class="modern-footer-text">
                        Perusahaan teknologi yang berfokus pada pengembangan, manufaktur, dan penelitian produk berbasis teknologi untuk mendukung transformasi digital Indonesia.
                    </p>
                </div>
                
                <div>
                    <h3 class="modern-footer-title">Quick Links</h3>
                    <a href="/" class="modern-footer-link">Home</a>
                    <a href="/about" class="modern-footer-link">About Us</a>
                    <a href="/services" class="modern-footer-link">Services</a>
                    <a href="/products" class="modern-footer-link">Products</a>
                </div>
                
                <div>
                    <h3 class="modern-footer-title">Contact Info</h3>
                    <p class="modern-footer-text">
                        <i class='bx bx-map'></i> Perumahan Kierana Indah Residence 1<br>
                        Blok I No 10, Kab.Bogor, Indonesia<br><br>
                        <i class='bx bx-phone'></i> +62 821 2346 0799<br>
                        <i class='bx bx-envelope'></i> ometeknologiindonesia@gmail.com
                    </p>
                </div>
            </div>
            
            <div class="modern-footer-bottom">
                <p>&copy; {{ date('Y') }} PT. OME TEKNOLOGI INDONESIA. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('extra-js')
</body>
</html>
