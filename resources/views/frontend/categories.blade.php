@extends('frontend.layouts.app')
@section('title','Categories')
@section('content')
            <!-- #CATEGORY-->
            <section class="section category" aria-label="category">
                <div class="container">

                    <p class="section-subtitle">Topik Literasi</p>

                    <h2 class="h2 section-title">Topik Literasi SMA Yuppentek 1</h2>

                    <ul class="grid-list">

                        @foreach ($categories as $category)
                                                    <li>
                            <div class="category-card">

                                <div class="card-icon">
                                    <img src="{{ Storage::url($category->icon)}}">
                                </div>

                                <div>
                                    <h3 class="h3 card-title">
                                        <a href="#">{{ $category->name }}</a>
                                    </h3>

                                    <span class="card-meta">{{ $category->literasi->count() }} Literasi</span>
                                </div>

                            </div>
                        </li>
                        @endforeach

                    </ul>

                </div>
            </section>
