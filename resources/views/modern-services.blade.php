@extends('modern-parent')

@section('title', 'Layanan - PT. OME TEKNOLOGI INDONESIA')
@section('meta_description', 'Layanan teknologi OTI meliputi Software Development, IoT & Smart City Solutions, Artificial Intelligence, Access Control Systems, Mobile Solutions, dan Monitoring Systems untuk kebutuhan bisnis Anda.')
@section('meta_keywords', 'layanan OTI, software development, IoT indonesia, smart city, AI solutions, access control, mobile app development, monitoring systems')

@section('content')
<!-- Services Hero -->
<section class="modern-hero" style="padding: 4rem 2rem;">
    <div class="modern-container">
        <h1>Layanan Kami</h1>
        <p>Solusi teknologi komprehensif untuk kebutuhan bisnis Anda</p>
    </div>
</section>

<!-- Services Grid -->
<section class="modern-section">
    <div class="modern-container">
        <div class="modern-grid modern-grid-3">
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-code-alt'></i>
                </div>
                <h3 class="service-title">Software Development</h3>
                <p class="service-text">
                    Kami mengembangkan perangkat lunak custom yang disesuaikan dengan kebutuhan bisnis Anda. Mulai dari aplikasi web, mobile app, hingga sistem enterprise yang kompleks. Tim developer kami berpengalaman dalam berbagai teknologi modern untuk memberikan solusi terbaik.
                </p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-chip'></i>
                </div>
                <h3 class="service-title">IoT & Smart City</h3>
                <p class="service-text">
                    Solusi Internet of Things untuk mengintegrasikan berbagai perangkat dan sensor. Kami menyediakan sistem smart city yang mencakup Smartpole, monitoring lingkungan, dan infrastruktur cerdas untuk meningkatkan kualitas layanan publik.
                </p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-brain'></i>
                </div>
                <h3 class="service-title">Artificial Intelligence</h3>
                <p class="service-text">
                    Implementasi AI untuk berbagai keperluan seperti deteksi objek, face recognition, helmet detection, dan analisis video. Teknologi AI kami membantu meningkatkan keamanan dan efisiensi operasional perusahaan Anda.
                </p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <h3 class="service-title">Access Control System</h3>
                <p class="service-text">
                    Sistem kontrol akses terpadu yang mencakup turnstile gate, face recognition, parking management, dan visitor management. Solusi keamanan modern untuk gedung perkantoran, pabrik, dan area terbatas lainnya.
                </p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-mobile-alt'></i>
                </div>
                <h3 class="service-title">Mobile Solutions</h3>
                <p class="service-text">
                    Pengembangan aplikasi mobile native dan hybrid untuk iOS dan Android. Termasuk aplikasi absensi, HT Android, mobile presence, dan berbagai solusi mobilitas untuk meningkatkan produktivitas karyawan.
                </p>
            </div>
            
            <div class="service-card">
                <div class="service-icon">
                    <i class='bx bx-bar-chart-alt-2'></i>
                </div>
                <h3 class="service-title">Monitoring Systems</h3>
                <p class="service-text">
                    Dashboard monitoring real-time dengan visualisasi data yang interaktif. Sistem kami dapat memonitor berbagai parameter seperti kualitas udara, limbah, CCTV, dan infrastruktur lainnya untuk pengambilan keputusan yang lebih baik.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="modern-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="modern-container text-center">
        <h2 class="modern-section-title text-white">Tertarik dengan Layanan Kami?</h2>
        <p class="modern-section-subtitle text-white">Hubungi kami untuk konsultasi gratis</p>
        <div style="margin-top: 2rem;">
            <a href="/contact" class="modern-btn">Hubungi Kami</a>
        </div>
    </div>
</section>
@endsection
