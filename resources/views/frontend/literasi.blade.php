@extends('frontend.layouts.app')
@section('title','Event')
@section('content')
     <!-- #EVENT-->
 <section class="section event" id="event" aria-label="event" style="margin-top: 5%">
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
                            alt="Innovation & Technological Entrepreneurship Team" class="img-cover">
                    </figure>

                    <time class="badge" datetime="2022-12-04">{{ $literasi->tanggal }}</time>

                    <div class="card-content">

                        <address class="card-address">
                            <ion-icon name="location-book" aria-hidden="true"></ion-icon>

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

    </div>
</section>

@endsection
