@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')
    <!-- #ABOUT-->
    <section class="section about" id="about" aria-label="about" style="margin-top: 20%;">
        <div class="container">

            <figure class="about-banner">

                <img src="{{ asset('frontend/assets/images/about-banner.jpg') }}" width="450" height="590" loading="lazy"
                    alt="about banner" class="w-100 about-img">

                <img src="{{ asset('frontend/assets/images/about-abs-1.jpg') }}" width="188" height="242"
                    loading="lazy" aria-hidden="true" class="abs-img abs-img-1">

                <img src="{{ asset('frontend/assets/images/about-abs-2.jpg') }}" width="150" height="200"
                    loading="lazy" aria-hidden="true" class="abs-img abs-img-2">

            </figure>

                    <div class="about-content">

                        <p class="section-subtitle">Tujuan Literasi SMA Yuppentek 1</p>

                        <h2 class="h2 section-title">Pentingnya Kemampuan Literasi</h2>

                        <ul class="about-list">

                            <li class="about-item">

                                <div class="item-icon item-icon-1">
                                    <img src="{{ asset('frontend/assets/images/about-icon-1.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Meningkatkan Kemampuan Memahami Informasi</h3>

                                    <p class="item-text">
                                        Peningkatan memahami informasi sangat penting di era ini. Agar siswa mampu
                                        menemukan informasi penting dan dapat membedakan fakta atau hoaks
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-2">
                                    <img src="{{ asset('frontend/assets/images/about-icon-2.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Meningkatkan Kemampuan Bacaan Sastra</h3>

                                    <p class="item-text">
                                        Meningkatkan pemahaman peserta didik  terhadap bacaan sastra.
                                    </p>
                                </div>

                            </li>

                            <li class="about-item">

                                <div class="item-icon item-icon-3">
                                    <img src="{{ asset('frontend/assets/images/about-icon-3.png') }}" width="30"
                                        height="30" loading="lazy" aria-hidden="true">
                                </div>

                                <div>
                                    <h3 class="h3 item-title">Meningkatkan Nilai Litersi Pada Rapor Pendidikan</h3>

                                    <p class="item-text">
                                        Pembiasaan literasi pagi diharapkan dapat membiasakan peserta didik dalam
                                        memahami bacaan pada soal Asesmen Kompetensi Minimun.
                                    </p>
                                </div>

                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary">
                            <span class="span">Know About Us</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </a>

                    </div>


        </div>
    </section>
@endsection
