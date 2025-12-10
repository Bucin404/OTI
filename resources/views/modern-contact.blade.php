@extends('modern-parent')

@section('title', 'Contact - OTI Indonesia')

@section('content')
<!-- Contact Hero -->
<section class="modern-hero" style="padding: 4rem 2rem;">
    <div class="modern-container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu Anda menemukan solusi teknologi terbaik</p>
    </div>
</section>

<!-- Contact Info -->
<section class="modern-section" style="background: var(--light);">
    <div class="modern-container">
        <div class="modern-grid modern-grid-3">
            <div class="modern-card">
                <div class="modern-card-body text-center">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: 50%; display: flex; align-items: center; justify-center; margin: 0 auto 1rem; color: white; font-size: 1.75rem;">
                        <i class='bx bx-phone'></i>
                    </div>
                    <h3 class="modern-card-title">Telepon</h3>
                    <p class="modern-card-text">
                        <a href="tel:+6282123460799" style="color: var(--primary); text-decoration: none;">+62 821 2346 0799</a>
                    </p>
                </div>
            </div>
            
            <div class="modern-card">
                <div class="modern-card-body text-center">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.75rem;">
                        <i class='bx bx-envelope'></i>
                    </div>
                    <h3 class="modern-card-title">Email</h3>
                    <p class="modern-card-text">
                        <a href="mailto:ometeknologiindonesia@gmail.com" style="color: var(--primary); text-decoration: none;">ometeknologiindonesia@gmail.com</a>
                    </p>
                </div>
            </div>
            
            <div class="modern-card">
                <div class="modern-card-body text-center">
                    <div style="width: 60px; height: 60px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: white; font-size: 1.75rem;">
                        <i class='bx bx-map'></i>
                    </div>
                    <h3 class="modern-card-title">Alamat</h3>
                    <p class="modern-card-text">
                        Perumahan Kierana Indah Residence 1<br>
                        Blok I No 10, Kab.Bogor, Indonesia
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="modern-section">
    <div class="modern-container">
        <div style="max-width: 700px; margin: 0 auto;">
            <div class="modern-section-header">
                <h2 class="modern-section-title">Kirim Pesan</h2>
                <p class="modern-section-subtitle">Silakan isi form di bawah ini, kami akan segera menghubungi Anda</p>
            </div>
            
            @if(session('success'))
                <div class="modern-alert modern-alert-success">
                    <strong><i class='bx bx-check-circle'></i></strong> {{ session('success') }}
                </div>
            @endif
            
            @if($errors->any())
                <div class="modern-alert modern-alert-error">
                    <strong><i class='bx bx-error-circle'></i></strong> Terjadi kesalahan, silakan periksa form Anda.
                </div>
            @endif
            
            <form action="{{ route('contact.store') }}" method="POST" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: var(--shadow);">
                @csrf
                
                <div class="modern-form-group">
                    <label class="modern-form-label">Nama Lengkap</label>
                    <input type="text" name="name" class="modern-form-input" value="{{ old('name') }}" required>
                    @error('name')
                        <small style="color: #EF4444;">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="modern-form-group">
                    <label class="modern-form-label">Email</label>
                    <input type="email" name="email" class="modern-form-input" value="{{ old('email') }}" required>
                    @error('email')
                        <small style="color: #EF4444;">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="modern-form-group">
                    <label class="modern-form-label">Pesan</label>
                    <textarea name="message" class="modern-form-input modern-form-textarea" required>{{ old('message') }}</textarea>
                    @error('message')
                        <small style="color: #EF4444;">{{ $message }}</small>
                    @enderror
                </div>
                
                <button type="submit" class="modern-btn modern-btn-primary" style="width: 100%;">
                    Kirim Pesan <i class='bx bx-send'></i>
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
