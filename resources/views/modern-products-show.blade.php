@extends('modern-parent')

@section('title', e($product->title) . ' - PT. OME TEKNOLOGI INDONESIA')
@section('meta_description', e($product->summary ?? Str::limit(strip_tags($product->description), 155)))
@section('meta_keywords', e($product->tech_stack) . ', ' . e($product->title) . ', OTI indonesia, produk teknologi')
@section('og_title', e($product->title) . ' - OTI Indonesia')
@section('og_description', e($product->summary ?? Str::limit(strip_tags($product->description), 155)))
@section('og_image', $product->image_path ? asset('storage/' . $product->image_path) : asset('assets/img/oti-logo.png'))

@section('content')
<!-- Product Hero -->
<section class="modern-hero" style="padding: 4rem 2rem;">
    <div class="modern-container">
        <span class="modern-card-badge" style="font-size: 1rem; padding: 0.5rem 1.25rem;">{{ ucfirst(str_replace('_', ' ', $product->status)) }}</span>
        <h1 style="margin-top: 1rem;">{{ $product->title }}</h1>
        @if($product->summary)
        <p>{{ $product->summary }}</p>
        @endif
    </div>
</section>

<!-- Product Details -->
<section class="modern-section">
    <div class="modern-container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start;">
            <div>
                @if($product->image_path)
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg);">
                @else
                    <div style="width: 100%; height: 400px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 5rem;">
                        <i class='bx bx-chip'></i>
                    </div>
                @endif
            </div>
            
            <div>
                <h2 class="modern-section-title" style="margin-bottom: 1.5rem;">Detail Produk</h2>
                
                @if($product->description)
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: var(--dark); margin-bottom: 0.75rem;">Deskripsi</h3>
                    <p style="line-height: 1.8; color: var(--text);">{{ $product->description }}</p>
                </div>
                @endif
                
                @if($product->tech_stack)
                <div style="margin-bottom: 2rem; padding: 1.5rem; background: var(--light); border-radius: 12px;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: var(--dark); margin-bottom: 0.75rem;">
                        <i class='bx bx-code-alt'></i> Tech Stack
                    </h3>
                    <p style="color: var(--text);">{{ $product->tech_stack }}</p>
                </div>
                @endif
                
                @if($product->client)
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: var(--dark); margin-bottom: 0.75rem;">
                        <i class='bx bx-building'></i> Client
                    </h3>
                    <p style="color: var(--text);">{{ $product->client }}</p>
                </div>
                @endif
                
                @if($product->started_at || $product->ended_at)
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.25rem; font-weight: 600; color: var(--dark); margin-bottom: 0.75rem;">
                        <i class='bx bx-calendar'></i> Timeline
                    </h3>
                    <p style="color: var(--text);">
                        @if($product->started_at)
                            Mulai: {{ $product->started_at->format('F Y') }}
                        @endif
                        @if($product->ended_at)
                            <br>Selesai: {{ $product->ended_at->format('F Y') }}
                        @endif
                    </p>
                </div>
                @endif
                
                @if($product->project_url)
                <div style="margin-bottom: 2rem;">
                    <a href="{{ $product->project_url }}" target="_blank" class="modern-btn modern-btn-primary" style="display: inline-block;">
                        <i class='bx bx-link-external'></i> Kunjungi Website
                    </a>
                </div>
                @endif
                
                <div>
                    <a href="/products" class="modern-btn" style="display: inline-block;">
                        <i class='bx bx-left-arrow-alt'></i> Kembali ke Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="modern-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
    <div class="modern-container text-center">
        <h2 class="modern-section-title text-white">Tertarik dengan Produk Ini?</h2>
        <p class="modern-section-subtitle text-white">Hubungi kami untuk informasi lebih lanjut</p>
        <div style="margin-top: 2rem;">
            <a href="/contact" class="modern-btn">Hubungi Kami</a>
        </div>
    </div>
</section>

@section('extra-css')
<style>
    @media (max-width: 768px) {
        section div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>
@endsection
@endsection
