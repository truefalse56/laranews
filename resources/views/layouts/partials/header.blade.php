<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Новости' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">

    <!-- Tailwind CSS -->
    <style>
        /* Tailwind CSS стили (оставляем как есть) */
    </style>
</head>
<header>
    <div class="header-area">
        <div class="main-header">
            <!-- Header Top -->
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li><img src="{{ asset('resources/img/icon/header_icon1.png') }}" alt="">34ºc, солнечно</li>
                                    <li><img src="{{ asset('resources/img/icon/header_icon1.png') }}" alt="">{{ date("F j, Y, g:i a")}}</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Mid -->
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href=""><img src="{{ asset('resources/img/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right">
                                <img src="{{ asset('resources/img/hero/header_card.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                            <div class="sticky-logo">
                                <a href=""><img src="{{ asset('resources/img/logo/logo.png') }}" alt=""></a>
                            </div>
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Главная</a></li>
                                        <li><a href="">Категории</a></li>
                                        <li><a href="/about">О нас</a></li>
                                        <li><a href="">Последние</a></li>
                                        <li><a href="">Контакты</a></li>
                                        <li><a href="">Страницы</a>
                                            <ul class="submenu">
                                                <li><a href="">Element</a></li>
                                                <li><a href="">Blog</a></li>
                                                <li><a href="">Blog Details</a></li>
                                                <li><a href="">Category Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4">
                            <div class="header-right-btn f-right d-none d-lg-block">
                                <i class="fas fa-search special-tag"></i>
                                <div class="search-box">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>