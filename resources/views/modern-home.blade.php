@extends('modern-parent')

@section('title', 'Home - PT. OME TEKNOLOGI INDONESIA')
@section('meta_description', 'PT. OME TEKNOLOGI INDONESIA - Perusahaan teknologi terkemuka yang menyediakan solusi Software Development, IoT, Smart City, AI, Access Control, dan Mobile Solutions untuk transformasi digital Indonesia.')
@section('meta_keywords', 'OTI, OME Teknologi Indonesia, software development indonesia, IoT indonesia, smart city solutions, artificial intelligence, teknologi indonesia, IT solutions, digital transformation')
@section('og_title', 'OTI - Inovasi Teknologi untuk Masa Depan Indonesia')
@section('og_description', 'Solusi teknologi inovatif untuk transformasi digital Indonesia dengan produk unggulan seperti HT Android, K3 Monitoring, Smartpole IKN, AI Solutions, dan lebih banyak lagi.')

@section('content')
<!-- Enhanced Hero Section with Animations & Scroll Button -->
<section class="modern-hero enhanced-hero" id="home">
    <!-- Animated Background Particles -->
    <div class="hero-particle hexagon"></div>
    <div class="hero-particle circle"></div>
    <div class="hero-particle square"></div>
    <div class="hero-gradient-pulse"></div>
    
    <!-- Animated Tech Icons Background -->
    <div class="tech-icon-float" style="top: 15%; left: 10%;"><i class='bx bx-chip'></i></div>
    <div class="tech-icon-float" style="top: 25%; right: 15%;"><i class='bx bx-brain'></i></div>
    <div class="tech-icon-float" style="top: 60%; left: 15%;"><i class='bx bx-cloud'></i></div>
    <div class="tech-icon-float" style="top: 50%; right: 10%;"><i class='bx bx-mobile-alt'></i></div>
    <div class="tech-icon-float" style="top: 75%; left: 50%;"><i class='bx bx-code-alt'></i></div>
    
    <div class="modern-container">
        <div class="hero-content-grid">
            <div class="hero-text-content fade-in-up">
                <span class="hero-badge">🚀 Produk Anak Bangsa</span>
                <h1 class="hero-main-title">Inovasi Teknologi untuk Masa Depan <span class="gradient-text">Indonesia</span></h1>
                <p class="hero-main-subtitle">PT. OME TEKNOLOGI INDONESIA menyediakan solusi teknologi terpadu yang mengintegrasikan AI, IoT, dan Cloud Computing untuk mendukung transformasi digital dan smart city di Indonesia</p>
                
                <div class="hero-stats-mini">
                    <div class="stat-mini">
                        <strong>5+</strong>
                        <span>Tahun</span>
                    </div>
                    <div class="stat-mini">
                        <strong>100+</strong>
                        <span>Proyek</span>
                    </div>
                    <div class="stat-mini">
                        <strong>50+</strong>
                        <span>Klien</span>
                    </div>
                </div>
                
                <div class="hero-actions">
                    <a href="/products" class="modern-btn modern-btn-gradient">
                        <i class='bx bx-package'></i> Lihat Produk Kami
                    </a>
                    <a href="/contact" class="modern-btn modern-btn-outline-white">
                        <i class='bx bx-phone-call'></i> Hubungi Kami
                    </a>
                </div>
                
                <div class="hero-trust-badges">
                    <span>Dipercaya oleh:</span>
                    <div class="trust-logos-mini">
                        <span class="trust-logo-item">PLN</span>
                        <span class="trust-logo-item">IKN</span>
                        <span class="trust-logo-item">Bank</span>
                    </div>
                </div>
            </div>
            
            <div class="hero-visual-content fade-in-right">
                <div class="hero-floating-card card-1">
                    <i class='bx bx-shield-alt-2'></i>
                    <div>
                        <strong>Smart Security</strong>
                        <p>AI-Powered System</p>
                    </div>
                </div>
                <div class="hero-floating-card card-2">
                    <i class='bx bx-network-chart'></i>
                    <div>
                        <strong>IoT Solutions</strong>
                        <p>Connected Devices</p>
                    </div>
                </div>
                <div class="hero-floating-card card-3">
                    <i class='bx bx-bar-chart-alt'></i>
                    <div>
                        <strong>Real-time Analytics</strong>
                        <p>Data-Driven Insights</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Down Button -->
    <a href="#about" class="scroll-down-btn">
        <span>Scroll Down</span>
        <i class='bx bx-chevron-down'></i>
    </a>
</section>

<!-- About Preview with Modern Layout -->
<section class="modern-section about-modern" id="about" style="background: var(--light);">
    <div class="modern-container">
        <div class="about-grid">
            <div class="about-image-side">
                <div class="about-image-wrapper">
                    <img src="{{ asset('assets/img/oti-logo.png') }}" alt="OTI Logo" class="about-logo-large">
                    <div class="about-stats-overlay">
                        <div class="stat-box">
                            <strong>5+</strong>
                            <span>Years Experience</span>
                        </div>
                        <div class="stat-box">
                            <strong>11</strong>
                            <span>Products</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="about-text-side">
                <span class="section-badge">Tentang Kami</span>
                <h2 class="section-title-alt">Membangun Masa Depan Digital <span class="gradient-text">Indonesia</span></h2>
                <p class="section-description">
                    PT. OME TEKNOLOGI INDONESIA adalah perusahaan teknologi yang berfokus pada pengembangan, manufaktur, penelitian, dan dukungan produk dan layanan berbasis teknologi. Kami menyediakan solusi teknologi inovatif yang mencakup perangkat keras, perangkat lunak, dan layanan berbasis internet.
                </p>
                <p class="section-description">
                    Dengan komitmen untuk memberikan solusi terbaik yang sesuai dengan kebutuhan di Indonesia, kami terus berinovasi mengembangkan produk dan layanan karya anak bangsa untuk mendukung transformasi digital dan smart city di Indonesia.
                </p>
                
                <div class="about-features-list">
                    <div class="about-feature-item">
                        <i class='bx bx-check-circle'></i>
                        <span>Teknologi AI & IoT Terkini</span>
                    </div>
                    <div class="about-feature-item">
                        <i class='bx bx-check-circle'></i>
                        <span>Tim Berpengalaman & Profesional</span>
                    </div>
                    <div class="about-feature-item">
                        <i class='bx bx-check-circle'></i>
                        <span>Support 24/7 untuk Klien</span>
                    </div>
                </div>
                
                <a href="/about" class="modern-btn modern-btn-gradient">
                    Selengkapnya <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Innovation Showcase Section -->
<section class="modern-section innovation-section">
    <div class="modern-container">
        <div class="modern-section-header">
            <span class="section-badge">Inovasi Terkini</span>
            <h2 class="section-title-alt">Teknologi & Inovasi Kami</h2>
            <p class="modern-section-subtitle">Eksplorasi teknologi terkini yang kami implementasikan dalam produk dan layanan</p>
        </div>
        
        <div class="innovation-grid">
            <div class="innovation-card">
                <div class="innovation-icon gradient-bg-1">
                    <i class='bx bx-brain'></i>
                </div>
                <h3>Artificial Intelligence</h3>
                <p>Teknologi AI untuk deteksi objek, face recognition, dan analisis video real-time dengan akurasi tinggi</p>
                <div class="innovation-stats">
                    <span><i class='bx bx-trending-up'></i> 95% Akurasi</span>
                    <span><i class='bx bx-time'></i> Real-time</span>
                </div>
            </div>
            
            <div class="innovation-card">
                <div class="innovation-icon gradient-bg-2">
                    <i class='bx bx-chip'></i>
                </div>
                <h3>Internet of Things</h3>
                <p>Solusi IoT terintegrasi untuk monitoring, kontrol, dan otomasi sistem smart city dan industri</p>
                <div class="innovation-stats">
                    <span><i class='bx bx-network-chart'></i> Multi-Device</span>
                    <span><i class='bx bx-cloud'></i> Cloud-Based</span>
                </div>
            </div>
            
            <div class="innovation-card">
                <div class="innovation-icon gradient-bg-3">
                    <i class='bx bx-mobile-alt'></i>
                </div>
                <h3>Mobile Technology</h3>
                <p>Aplikasi mobile untuk absensi, HT Android, dan berbagai solusi mobilitas untuk produktivitas maksimal</p>
                <div class="innovation-stats">
                    <span><i class='bx bx-map-pin'></i> GPS Tracking</span>
                    <span><i class='bx bx-camera'></i> Photo Capture</span>
                </div>
            </div>
            
            <div class="innovation-card">
                <div class="innovation-icon gradient-bg-4">
                    <i class='bx bx-bar-chart-alt-2'></i>
                </div>
                <h3>Data Analytics</h3>
                <p>Dashboard monitoring real-time dengan visualisasi data yang informatif untuk decision making</p>
                <div class="innovation-stats">
                    <span><i class='bx bx-stats'></i> Analytics</span>
                    <span><i class='bx bx-pie-chart-alt-2'></i> Reporting</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="modern-section">
    <div class="modern-container">
        <div class="modern-stats">
            <div class="modern-stat">
                <div class="modern-stat-number">5+</div>
                <div class="modern-stat-label">Tahun Pengalaman</div>
            </div>
            <div class="modern-stat">
                <div class="modern-stat-number">50+</div>
                <div class="modern-stat-label">Klien</div>
            </div>
            <div class="modern-stat">
                <div class="modern-stat-number">100+</div>
                <div class="modern-stat-label">Proyek Selesai</div>
            </div>
            <div class="modern-stat">
                <div class="modern-stat-number">11+</div>
                <div class="modern-stat-label">Produk Inovatif</div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="modern-section" style="background: var(--light);">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Layanan Kami</h2>
            <p class="modern-section-subtitle">Solusi teknologi komprehensif untuk kebutuhan bisnis Anda</p>
        </div>
        
        <div class="modern-grid modern-grid-3">
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-code-alt'></i>
                </div>
                <h3 class="service-title">Software Development</h3>
                <p class="service-text">Pengembangan perangkat lunak custom seperti aplikasi web, mobile, dan sistem sesuai kebutuhan bisnis Anda.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-chip'></i>
                </div>
                <h3 class="service-title">IoT & Smart City</h3>
                <p class="service-text">Solusi Internet of Things untuk smart city, monitoring sistem, dan otomasi berbasis sensor dan teknologi terkini.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-brain'></i>
                </div>
                <h3 class="service-title">Artificial Intelligence</h3>
                <p class="service-text">Implementasi AI untuk deteksi objek, face recognition, dan analisis video untuk meningkatkan keamanan dan efisiensi.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <h3 class="service-title">Access Control System</h3>
                <p class="service-text">Sistem kontrol akses terpadu dengan turnstile gate, face recognition, dan parking management untuk keamanan maksimal.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-mobile-alt'></i>
                </div>
                <h3 class="service-title">Mobile Solutions</h3>
                <p class="service-text">Pengembangan aplikasi mobile untuk absensi, HT Android, dan berbagai solusi mobilitas untuk meningkatkan produktivitas.</p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-bar-chart-alt-2'></i>
                </div>
                <h3 class="service-title">Monitoring Systems</h3>
                <p class="service-text">Dashboard monitoring real-time untuk berbagai sistem seperti smartpole, limbah, CCTV, dan infrastruktur lainnya.</p>
            </div>
        </div>
    </div>
</section>

<!-- Products -->
<section class="modern-section">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Produk & Proyek Kami</h2>
            <p class="modern-section-subtitle">Solusi teknologi yang telah kami kembangkan untuk berbagai kebutuhan</p>
        </div>
        
        @php
            $featuredProducts = \App\Models\Product::latest()->take(6)->get();
        @endphp
        
        <div class="modern-grid modern-grid-3">
            @forelse($featuredProducts as $product)
            <div class="modern-card">
                @if($product->image_path)
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" class="modern-card-img">
                @else
                    <div style="width: 100%; height: 220px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-center; color: white; font-size: 1.5rem;">
                        <i class='bx bx-image-alt'></i>
                    </div>
                @endif
                
                <div class="modern-card-body">
                    <span class="modern-card-badge">{{ ucfirst(str_replace('_', ' ', $product->status)) }}</span>
                    <h3 class="modern-card-title">{{ $product->title }}</h3>
                    <p class="modern-card-text">{{ Str::limit($product->summary, 100) }}</p>
                    <a href="{{ route('products.show', $product->slug) }}" class="modern-btn modern-btn-primary">
                        Lihat Detail <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 3rem;">
                <p>Produk akan segera ditampilkan</p>
            </div>
            @endforelse
        </div>
        
        @if($featuredProducts->count() > 0)
        <div class="text-center mt-4">
            <a href="/products" class="modern-btn modern-btn-primary">Lihat Semua Produk</a>
        </div>
        @endif
    </div>
</section>

<!-- Client Testimonials -->
<section class="modern-section" style="background: var(--light);">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Apa Kata Mereka?</h2>
            <p class="modern-section-subtitle">Testimoni dari klien yang telah mempercayai solusi teknologi kami</p>
        </div>
        
        <div class="modern-grid modern-grid-3">
            <!-- Testimonial 1 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p class="testimonial-text">
                    "Sistem K3 Monitoring dari OTI sangat membantu kami dalam meningkatkan keselamatan kerja di lapangan. Interface yang user-friendly dan fitur real-time monitoring sangat memudahkan tim kami."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Ahmad Rizki</h4>
                        <p>HSE Manager, PT Industri Manufaktur</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p class="testimonial-text">
                    "Dashboard monitoring PLN yang dikembangkan OTI memberikan insight yang valuable untuk operasional kami. Support tim yang responsif juga menjadi nilai plus."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Budi Santoso</h4>
                        <p>IT Manager, PLN Indonesia Power</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p class="testimonial-text">
                    "Implementasi Smartpole IKN berjalan lancar berkat expertise tim OTI. Produk berkualitas dengan teknologi terkini, sesuai dengan visi smart city kami."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Siti Nurhaliza</h4>
                        <p>Project Manager, IKN Development</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 4 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p class="testimonial-text">
                    "Aplikasi Mobile Presence memudahkan tracking kehadiran karyawan kami yang tersebar di berbagai lokasi. Fitur GPS dan foto real-time sangat membantu proses monitoring."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Andi Wijaya</h4>
                        <p>HR Director, PT Logistik Nusantara</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 5 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p class="testimonial-text">
                    "Sistem AI Detection untuk smoke and fire dari OTI menjadi solusi tepat untuk meningkatkan keamanan pabrik kami. Akurasi deteksi yang tinggi dan notifikasi real-time sangat membantu tim safety."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Rudi Hartono</h4>
                        <p>Plant Manager, PT Petrokimia</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 6 -->
            <div class="testimonial-card">
                <div class="testimonial-rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p class="testimonial-text">
                    "Visitor Management System membuat proses penerimaan tamu di kantor kami menjadi lebih profesional dan terorganisir. Data terintegrasi dengan baik dan laporan mudah diakses."
                </p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">
                        <i class='bx bx-user'></i>
                    </div>
                    <div>
                        <h4>Dewi Lestari</h4>
                        <p>Office Manager, Bank Nusantara</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="modern-section">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Mengapa Memilih OTI?</h2>
            <p class="modern-section-subtitle">Keunggulan yang membuat kami menjadi pilihan tepat untuk solusi teknologi Anda</p>
        </div>
        
        <div class="modern-grid modern-grid-4">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class='bx bxs-flag-alt'></i>
                </div>
                <h3 class="feature-title">Produk Anak Bangsa</h3>
                <p class="feature-text">100% produk karya Indonesia yang dikembangkan dengan memahami kebutuhan lokal</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class='bx bxs-rocket'></i>
                </div>
                <h3 class="feature-title">Teknologi Terkini</h3>
                <p class="feature-text">Menggunakan teknologi terbaru seperti AI, IoT, dan Cloud Computing dalam setiap solusi</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class='bx bxs-badge-check'></i>
                </div>
                <h3 class="feature-title">Pengalaman Terpercaya</h3>
                <p class="feature-text">5+ tahun pengalaman dengan 100+ proyek sukses dari berbagai industri</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class='bx bxs-user-voice'></i>
                </div>
                <h3 class="feature-title">Support Responsif</h3>
                <p class="feature-text">Tim support yang siap membantu Anda dengan respon cepat dan solusi efektif</p>
            </div>
        </div>
    </div>
</section>

<!-- Trust Badges / Client Companies -->
<section class="modern-section" style="background: var(--light); padding: 4rem 0;">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Dipercaya Oleh</h2>
            <p class="modern-section-subtitle">Berbagai perusahaan dan instansi terkemuka di Indonesia yang telah mempercayai solusi teknologi kami</p>
        </div>
        
        <div class="client-company-grid">
            <!-- Client 1: PLN Indonesia Power -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-bolt'></i>
                </div>
                <h3 class="client-company-name">PLN Indonesia Power</h3>
                <span class="client-industry-tag">Energy Sector</span>
                <p class="client-company-description">
                    BUMN yang bergerak di bidang pembangkit tenaga listrik dengan kapasitas 7,000+ MW. Menggunakan Dashboard Monitoring PLN untuk optimasi operasional.
                </p>
            </div>
            
            <!-- Client 2: IKN Nusantara -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-buildings'></i>
                </div>
                <h3 class="client-company-name">IKN Nusantara</h3>
                <span class="client-industry-tag">Smart City</span>
                <p class="client-company-description">
                    Proyek ibu kota negara Indonesia yang menerapkan konsep smart city modern. Implementasi Smartpole untuk infrastruktur digital terintegrasi.
                </p>
            </div>
            
            <!-- Client 3: Industri Manufaktur -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-cog'></i>
                </div>
                <h3 class="client-company-name">PT Industri Manufaktur</h3>
                <span class="client-industry-tag">Manufacturing</span>
                <p class="client-company-description">
                    Perusahaan manufaktur dengan 500+ karyawan dan sertifikasi ISO. Menggunakan K3 Monitoring System untuk keselamatan kerja dan compliance.
                </p>
            </div>
            
            <!-- Client 4: Bank Nusantara -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-bank'></i>
                </div>
                <h3 class="client-company-name">Bank Nusantara</h3>
                <span class="client-industry-tag">Banking</span>
                <p class="client-company-description">
                    Institusi perbankan dengan 50+ cabang di seluruh Indonesia. Implementasi Visitor Management System untuk keamanan dan profesionalitas kantor.
                </p>
            </div>
            
            <!-- Client 5: PT Petrokimia -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-droplet'></i>
                </div>
                <h3 class="client-company-name">PT Petrokimia</h3>
                <span class="client-industry-tag">Petrochemical</span>
                <p class="client-company-description">
                    Perusahaan petrokimia dengan fokus tinggi pada industrial safety. Menggunakan AI Smoke/Fire Detection untuk deteksi dini bahaya kebakaran.
                </p>
            </div>
            
            <!-- Client 6: PT Logistik Nusantara -->
            <div class="client-company-card">
                <div class="client-logo-placeholder">
                    <i class='bx bx-package'></i>
                </div>
                <h3 class="client-company-name">PT Logistik Nusantara</h3>
                <span class="client-industry-tag">Logistics</span>
                <p class="client-company-description">
                    Perusahaan logistik dengan jaringan distribusi nasional. Menggunakan Mobile Presence App untuk tracking kehadiran karyawan di berbagai lokasi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="modern-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="modern-container text-center">
        <div class="cta-badge">✨ Konsultasi Gratis</div>
        <h2 class="modern-section-title text-white">Siap Bertransformasi Digital?</h2>
        <p class="modern-section-subtitle text-white">Hubungi kami untuk konsultasi dan diskusikan solusi teknologi yang tepat untuk bisnis Anda</p>
        <div style="margin-top: 2rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="/contact" class="modern-btn" style="background: white; color: var(--primary);">
                <i class='bx bx-phone'></i> Hubungi Kami Sekarang
            </a>
            <a href="/products" class="modern-btn modern-btn-outline">
                <i class='bx bx-package'></i> Lihat Produk Kami
            </a>
        </div>
        <div style="margin-top: 2rem; opacity: 0.9;">
            <p style="font-size: 0.95rem;"><i class='bx bx-check-circle'></i> Response Time &lt; 24 Jam | <i class='bx bx-check-circle'></i> Garansi Produk | <i class='bx bx-check-circle'></i> After Sales Support</p>
        </div>
    </div>
</section>
@endsection
