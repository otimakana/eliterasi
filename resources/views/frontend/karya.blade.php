@extends('frontend.layouts.app')
@section('title','Course')
@section('content')
<!--- #KARYA-->
    <section class="section course" id="courses" aria-label="course"
                style="background-image: url('{{ asset('frontend/assets/images/course-bg.jpg') }}')" >
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
                </div>
            </section>
