@extends('parent')

@section('contact')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg6">
        <div class="container">
            <div class="inner-title text-center">
                <h3>Hubungi Kami</h3>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Kontak</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container contact-width">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class='flaticon-call'></i>
                        <ul>
                            <li>
                                <a href="tel:+6282123460799">
                                    +62 821 2346 0799
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="contact-card">
                        <i class="flaticon-paper-plane"></i>
                        <ul>
                            <li>
                                <a href="mailto:ometeknologiindonesia@gmail.com">ometeknologiindonesia@gmail.com</a>
                            </li>
                            <li>
                                <a href="https://www.oticorp.co.id" target="_blank">www.oticorp.co.id</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="contact-card">
                        <i class='flaticon-pin'></i>
                        <ul>
                            <li>
                                Perumahan Kierana Indah Residence 1
                            </li>
                            <li>
                                Blok I No 10, Kab.Bogor, Indonesia
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Area End -->

    <!-- Contact Section -->
    <section class="contact-section pb-100">
        <div class="container">
            <div class="section-title text-center">
                <span>Hubungi Kami</span>
                <h2>Kirim Pesan Untuk Pertanyaan Anda</h2>
                <p>
                    Kami siap membantu Anda menemukan solusi teknologi terbaik untuk kebutuhan bisnis Anda. Silakan hubungi kami melalui form di bawah ini.
                </p>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><i class='bx bx-check-circle'></i></strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="contact-wrap pt-45">
                <div class="contact-wrap-form">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Nama Anda">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="Email Anda">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" cols="30" rows="8" required placeholder="Pesan Anda">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn page-btn text-center">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Area Section Start -->
    <div class="map-area">
        <div class="container-fluid p-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0!2d106.8!3d-6.6!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzYnMDAuMCJTIDEwNsKwNDgnMDAuMCJF!5e0!3m2!1sen!2sid!4v1234567890!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- Map Area Section End-->
@endsection
