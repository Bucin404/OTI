<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PT. OME TEKNOLOGI INDONESIA - Solusi Teknologi Inovatif untuk Indonesia">
    <title>@yield('title', 'OTI - Inovasi Teknologi Indonesia')</title>
    
    <!-- Modern CSS -->
    <link rel="stylesheet" href="{{ asset('css/modern-style.css') }}">
    
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
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
