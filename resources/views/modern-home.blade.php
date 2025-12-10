@extends('modern-parent')

@section('title', 'Home - PT. OME TEKNOLOGI INDONESIA')
@section('meta_description', 'PT. OME TEKNOLOGI INDONESIA - Perusahaan teknologi terkemuka yang menyediakan solusi Software Development, IoT, Smart City, AI, Access Control, dan Mobile Solutions untuk transformasi digital Indonesia.')
@section('meta_keywords', 'OTI, OME Teknologi Indonesia, software development indonesia, IoT indonesia, smart city solutions, artificial intelligence, teknologi indonesia, IT solutions, digital transformation')
@section('og_title', 'OTI - Inovasi Teknologi untuk Masa Depan Indonesia')
@section('og_description', 'Solusi teknologi inovatif untuk transformasi digital Indonesia dengan produk unggulan seperti HT Android, K3 Monitoring, Smartpole IKN, AI Solutions, dan lebih banyak lagi.')

@section('content')
<!-- Hero Section -->
<section class="modern-hero">
    <div class="modern-container">
        <div class="fade-in-up">
            <h1>Inovasi Teknologi untuk Masa Depan Indonesia</h1>
            <p>PT. OME TEKNOLOGI INDONESIA menyediakan solusi teknologi terpadu untuk mendukung transformasi digital dan smart city di Indonesia</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="/products" class="modern-btn">Lihat Produk Kami</a>
                <a href="/contact" class="modern-btn modern-btn-outline">Hubungi Kami</a>
            </div>
        </div>
    </div>
</section>

<!-- About Preview -->
<section class="modern-section" style="background: var(--light);">
    <div class="modern-container">
        <div class="modern-section-header">
            <h2 class="modern-section-title">Tentang Kami</h2>
            <p class="modern-section-subtitle">
                Perusahaan teknologi yang berfokus pada pengembangan, manufaktur, penelitian, dan dukungan produk dan layanan berbasis teknologi
            </p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.125rem; line-height: 1.8; margin-bottom: 2rem;">
                Kami menyediakan solusi teknologi inovatif yang mencakup perangkat keras, perangkat lunak, dan layanan berbasis internet. 
                Dengan komitmen untuk memberikan solusi terbaik yang sesuai dengan kebutuhan di Indonesia, kami terus berinovasi 
                mengembangkan produk dan layanan karya anak bangsa untuk mendukung transformasi digital dan smart city di Indonesia.
            </p>
            <a href="/about" class="modern-btn modern-btn-primary">Selengkapnya</a>
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

<!-- Trust Badges / Client Logos -->
<section class="modern-section" style="background: var(--light); padding: 3rem 0;">
    <div class="modern-container">
        <div class="text-center" style="margin-bottom: 2rem;">
            <h3 style="font-size: 1.5rem; font-weight: 600; color: var(--dark); margin-bottom: 0.5rem;">Dipercaya Oleh</h3>
            <p style="color: var(--text-light);">Berbagai perusahaan dan instansi terkemuka di Indonesia</p>
        </div>
        <div class="client-logos">
            <div class="client-logo-item">
                <div class="client-badge">PLN Indonesia Power</div>
            </div>
            <div class="client-logo-item">
                <div class="client-badge">IKN Nusantara</div>
            </div>
            <div class="client-logo-item">
                <div class="client-badge">Industri Manufaktur</div>
            </div>
            <div class="client-logo-item">
                <div class="client-badge">Sektor Perbankan</div>
            </div>
            <div class="client-logo-item">
                <div class="client-badge">Petrokimia</div>
            </div>
            <div class="client-logo-item">
                <div class="client-badge">Logistik</div>
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
