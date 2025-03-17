@extends('layouts.app')

@section('content')

<!-- Trending Area Start -->
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Последнее</strong>
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{ asset('img/trending/trending_top.jpg') }}" alt="">
                            <div class="trend-top-cap">
                                <span>Appetizers</span>
                                <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ asset('img/trending/trending_bottom1.jpg') }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyle</span>
                                        <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Остальной контент остается без изменений -->
                        </div>
                    </div>
                </div>
                <!-- Right content -->
                <div class="col-lg-4">
                    <!-- Остальной контент остается без изменений -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Trending Area End -->
@endsection