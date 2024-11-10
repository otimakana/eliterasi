@extends('frontend.layouts.app')
@yield('title')
@section('content')
    <main>
        <article>
            <!-- #HERO-->
            <section class="hero" id="home" aria-label="hero"
                style="background-image: url('{{ asset('frontend/assets/images/hero-bg.jpg') }}')">
                <div class="container">

                    <div class="hero-content">

                        <p class="section-subtitle">Better Learning Future With Us</p>

                        <h2 class="h1 hero-title">Selamat Datang di E-Literasi SMA Yuppentek 1</h2>

                        <p class="hero-text">
                            Menjadi SMA Pilihan Utama Yang Unggul dalam IPTEK, Berkarakter dan Berwawasan Lingkungan
                        </p>

                        <a href="{{ route('frontend.literasi') }}" class="btn btn-primary">
                            <span class="span">Mulai Membaca</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                    <figure class="hero-banner">

                        <img src="{{ asset('frontend/assets/images/sekolah.png') }}" width="500" height="500"
                            loading="lazy" alt="hero image" class="w-100">

                        <img src="{{ asset('frontend/assets/images/siswa2.png') }}" width="318" height="352"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                        <img src="{{ asset('frontend/assets/images/eliterasi.png') }}" width="160" height="160"
                            loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

                    </figure>

                </div>
            </section>

            <!-- #CATEGORY-->
            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Topik Literasi</p>

                    <h2 class="h2 section-title">Topik Literasi SMA Yuppentek 1</h2>

                    <ul class="grid-list">

                        @foreach ($categories as $category )
                        <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <img src="{{ Storage::url($category->icon) }}"
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">{{ $category->name}}</a>
                                    </h3>

                                    <span class="card-meta">{{ $category->literasi->count() }} Literasi</span>
                                </div>

                            </div>
                        </li>
                        @endforeach

                    </ul>

                <a href="{{ route('frontend.categories') }}" class="btn btn-primary">
                        <span class="span">Lihat Semua Kategori</span>

                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                </a>

                </div>
            </section>

     <!-- #LITERASI-->
 <section class="section event" id="event" aria-label="event" style="margin-top: 10%">
    <div class="container">

        <p class="section-subtitle">Literasi Terkini</p>

        <h2 class="h2 section-title">Selamat Membaca Literasi Terkini</h2>

        <ul class="grid-list">

            @foreach ($literasis as $literasi)
                            <li>
                <div class="event-card">
                    <figure class="card-banner">
                        <img src="{{ Storage::url($literasi->thumbnail) }}" width="370"
                            height="250" loading="lazy"
                            alt="{{ $literasi->name }}" class="img-cover">
                    </figure>

                    <time class="badge" datetime="2022-12-04">{{ $literasi->tanggal }}</time>

                    <div class="card-content">

                        <address class="card-address">
                            <ion-icon name="book" aria-hidden="true"></ion-icon>

                            <span class="span">{{ $literasi->category->name }}</span>
                        </address>

                        <h3 class="h3">
                            <a href="#" class="card-title">{{ $literasi->judul }}</a>
                        </h3>

                        <a href="#" class="btn-link">
                            <span class="span">Baca Selengkapnya</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>
                </div>
            </li>
            @endforeach

        </ul>

        <a href="{{ route('frontend.literasi') }}" class="btn btn-primary">
            <span class="span">Lihat Semua Literasi</span>
            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

    </div>
</section>

<!--- #KARYA-->
    <section class="section course" id="courses" aria-label="course"
                style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')">
                <div class="container">

                    <p class="section-subtitle">Karya Literasi</p>

                    <h2 class="h2 section-title">Hasil Karya Literasi Siswa</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="course-card">
                                @foreach ($karya_literasis as $karya)
                                <figure class="card-banner">
                                    <img src="{{ Storage::url($karya->thumbnail) }}" width="370"
                                        height="270" loading="lazy" alt="Competitive law for all students"
                                        class="img-cover">
                                </figure>

                                <div class="card-actions">

                                    <span class="badge">{{ $karya->category->name }}</span>

                                    <button class="whishlist-btn" aria-label="Add to whishlist" data-whish-btn>
                                        <ion-icon name="heart"></ion-icon>
                                    </button>

                                </div>

                                <div class="card-content">

                                    <ul class="card-meta-list">

                                        <li class="card-meta-item">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">{{ $karya->tanggal }}</span>
                                        </li>

                                    </ul>

                                    <h3 class="h3">
                                        <a href="#" class="card-title">{{ $karya->name }}</a>
                                    </h3>

                                    <div class="card-footer">

                                        <div class="card-price">
                                            <span class="span">{{ $karya->nama_siswa }}</span>
                                        </div>

                                        <div class="card-meta-item">
                                            <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                                            <span class="card-meta-text">{{ $karya->kelas }}</span>
                                        </div>

                                    </div>

                                </div>
                                @endforeach



                            </div>
                        </li>
                    </ul>

                    <a href="{{ route('frontend.karya') }}" class="btn btn-primary">
                        <span class="span">Lihat Semua Karya</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>

        </article>
    </main>

    <!--- #BACK TO TOP-->
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="arrow-up"></ion-icon>
    </a>
@endsection
