@extends('parent')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Our Products</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Products Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Our Products & Projects</span>
                <h2>Solusi Teknologi Inovatif</h2>
                <p>Kami menyediakan berbagai produk dan layanan teknologi untuk mendukung kebutuhan bisnis Anda</p>
            </div>

            <div class="row pt-45">
                @forelse($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            @if($product->image_path)
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="width: 100%; height: 250px; object-fit: cover;">
                                </a>
                            @else
                                <a href="{{ route('products.show', $product->slug) }}">
                                    <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="{{ $product->title }}">
                                </a>
                            @endif
                        </div>

                        <div class="blog-content">
                            <span>{{ $product->status }}</span>
                            <h3>
                                <a href="{{ route('products.show', $product->slug) }}">
                                    {{ $product->title }}
                                </a>
                            </h3>
                            <p>{{ Str::limit($product->summary, 120) }}</p>

                            @if($product->tech_stack)
                            <div class="blog-meta" style="margin-bottom: 15px;">
                                <small><strong>Tech Stack:</strong> {{ Str::limit($product->tech_stack, 50) }}</small>
                            </div>
                            @endif

                            <a class="blog-btn" href="{{ route('products.show', $product->slug) }}">
                                View Details
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p>No products available yet.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    <div class="pagination-area">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area End -->
@endsection
