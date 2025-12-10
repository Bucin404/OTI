@extends('modern-parent')

@section('title', 'Home - OTI Indonesia')

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

<!-- CTA Section -->
<section class="modern-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="modern-container text-center">
        <h2 class="modern-section-title text-white">Siap Bertransformasi Digital?</h2>
        <p class="modern-section-subtitle text-white">Hubungi kami untuk konsultasi solusi teknologi yang tepat untuk bisnis Anda</p>
        <div style="margin-top: 2rem;">
            <a href="/contact" class="modern-btn">Hubungi Kami Sekarang</a>
        </div>
    </div>
</section>
@endsection
