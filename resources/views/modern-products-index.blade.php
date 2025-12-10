@extends('modern-parent')

@section('title', 'Produk & Proyek - PT. OME TEKNOLOGI INDONESIA')
@section('meta_description', 'Jelajahi produk dan proyek inovatif dari OTI Indonesia: HT Android, Mobile Presence, K3 Monitoring, Smartpole IKN, AI Smoke/Fire Detection, Visitor Management, dan solusi teknologi lainnya.')
@section('meta_keywords', 'produk OTI, proyek OTI, HT Android, mobile presence, K3 monitoring, smartpole, AI detection, visitor management, dashboard PLN')

@section('content')
<!-- Products Hero -->
<section class="modern-hero" style="padding: 4rem 2rem;">
    <div class="modern-container">
        <h1>Produk & Proyek Kami</h1>
        <p>Solusi teknologi inovatif yang telah kami kembangkan</p>
    </div>
</section>

<!-- Products Grid -->
<section class="modern-section">
    <div class="modern-container">
        <div class="modern-grid modern-grid-3">
            @forelse($products as $product)
            <div class="modern-card">
                @if($product->image_path)
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" class="modern-card-img">
                @else
                    <div style="width: 100%; height: 220px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem;">
                        <i class='bx bx-chip'></i>
                    </div>
                @endif
                
                <div class="modern-card-body">
                    <span class="modern-card-badge">{{ ucfirst(str_replace('_', ' ', $product->status)) }}</span>
                    <h3 class="modern-card-title">{{ $product->title }}</h3>
                    <p class="modern-card-text">{{ Str::limit($product->summary, 120) }}</p>
                    
                    @if($product->tech_stack)
                    <div style="margin-bottom: 1rem; padding: 0.75rem; background: var(--light); border-radius: 8px;">
                        <small style="color: var(--text); font-weight: 600;">
                            <i class='bx bx-code-alt'></i> {{ Str::limit($product->tech_stack, 60) }}
                        </small>
                    </div>
                    @endif
                    
                    <a href="{{ route('products.show', $product->slug) }}" class="modern-btn modern-btn-primary">
                        Lihat Detail <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
            @empty
            <div style="grid-column: 1 / -1; text-center; padding: 4rem 2rem;">
                <i class='bx bx-package' style="font-size: 4rem; color: var(--border); margin-bottom: 1rem;"></i>
                <h3 style="color: var(--text); margin-bottom: 0.5rem;">Belum Ada Produk</h3>
                <p style="color: var(--text);">Produk akan segera ditampilkan</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
        <div style="margin-top: 3rem; display: flex; justify-content: center;">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</section>
@endsection
