@extends('parent')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3>{{ $product->title }}</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>{{ Str::limit($product->title, 30) }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Product Details -->
    <div class="service-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-article">
                        @if($product->image_path)
                        <div class="service-article-img">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->title }}" style="width: 100%; max-height: 500px; object-fit: cover; border-radius: 8px;">
                        </div>
                        @endif

                        <div class="service-article-content">
                            <h2>{{ $product->title }}</h2>
                            
                            @if($product->summary)
                            <div class="article-quote">
                                <i class='bx bxs-quote-alt-left'></i>
                                <p>{{ $product->summary }}</p>
                            </div>
                            @endif

                            @if($product->description)
                            <p>{!! nl2br(e($product->description)) !!}</p>
                            @endif

                            @if($product->tech_stack || $product->client || $product->project_url)
                            <div class="article-share" style="margin-top: 30px; padding: 20px; background: #f9f9f9; border-radius: 8px;">
                                <div class="row">
                                    @if($product->tech_stack)
                                    <div class="col-lg-6 col-sm-6">
                                        <h3 style="font-size: 18px; margin-bottom: 10px;">Tech Stack</h3>
                                        <p>{{ $product->tech_stack }}</p>
                                    </div>
                                    @endif

                                    @if($product->client)
                                    <div class="col-lg-6 col-sm-6">
                                        <h3 style="font-size: 18px; margin-bottom: 10px;">Client</h3>
                                        <p>{{ $product->client }}</p>
                                    </div>
                                    @endif

                                    @if($product->project_url)
                                    <div class="col-12" style="margin-top: 15px;">
                                        <h3 style="font-size: 18px; margin-bottom: 10px;">Project URL</h3>
                                        <p><a href="{{ $product->project_url }}" target="_blank" rel="noopener">{{ $product->project_url }}</a></p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-details-item">
                        <div class="service-details-list">
                            <h3>Project Information</h3>
                            <ul>
                                <li>
                                    <strong>Status:</strong> 
                                    <span class="badge" style="background-color: {{ $product->status === 'completed' ? '#28a745' : ($product->status === 'in_progress' ? '#007bff' : '#ffc107') }}; color: white; padding: 5px 10px; border-radius: 4px;">
                                        {{ ucfirst(str_replace('_', ' ', $product->status)) }}
                                    </span>
                                </li>
                                @if($product->started_at)
                                <li><strong>Started:</strong> {{ $product->started_at->format('F Y') }}</li>
                                @endif
                                @if($product->ended_at)
                                <li><strong>Completed:</strong> {{ $product->ended_at->format('F Y') }}</li>
                                @endif
                            </ul>
                        </div>

                        <div class="service-details-list">
                            <h3>Interested in this solution?</h3>
                            <p>Contact us to learn more about how we can help your business with similar technology solutions.</p>
                            <a href="/contact" class="default-btn">
                                Get In Touch
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>

                        <div class="service-details-list">
                            <h3>Other Products</h3>
                            <p>Explore our other innovative technology solutions</p>
                            <a href="{{ route('products.index') }}" class="default-btn">
                                View All Products
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details End -->
@endsection
