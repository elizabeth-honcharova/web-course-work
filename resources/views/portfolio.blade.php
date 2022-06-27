@extends('layout')

@section('title')
Портфоліо
@endsection

@section('link-css')
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
@endsection

@section('navigation')
<li>
    <a href="index.php" class="header-link">
        Головна
    </a>
</li>
<li>
    <a href="about" class="header-link">
        Про себе
    </a>
</li>
<li>
    <div class="active-link">
        <img src="img/choose.svg" alt="current page" class="chose">
        <a href="portfolio" class="header-link">
            Портфоліо
        </a>
    </div>
</li>
@endsection

@section('main-content')
<section id="portfolio" class="portfolio">
    <div class="wrapper portfolio-wrapper">
        <h1 class="portfolio-title">
            Портфоліо
        </h1>
        <nav class="portfolio-nav">
            <li>
                <a href="#" class="portfolio-field">
                    Усе
                </a>
            </li>
            <li>
                <a href="#" class="portfolio-field">
                    3D моделі
                </a>
            </li>
            <li>
                <a href="#" class="portfolio-field">
                    Графічний дизайн
                </a>
            </li>
            <li>
                <a href="#" class="portfolio-field">
                    UI/UX
                </a>
            </li>
        </nav>
        <div class="portfolio-imgs">
            <figure class="portfolio-card portfolio-card-big">
                <img src="img/portfolio/image1.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Welcome home
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image2.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Robot feelings
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image3.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Big world, small creatures
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image4.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    The second before..
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image5.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Happy New Year, child
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-big">
                <img src="img/portfolio/image6.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Beauty of art
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-big">
                <img src="img/portfolio/image1.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Welcome home
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image2.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Robot feelings
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
            <figure class="portfolio-card portfolio-card-small">
                <img src="img/portfolio/image3.jpg" alt="" class="portfolio-img">
                <figcaption class="portfolio-img-title">
                    Big world, small creatures
                </figcaption>
                <a href="#" class="portfolio-card-link"></a>
            </figure>
        </div>
        <div class="portfolio-page-nav">
            <form action="portfolio.php">
                <button class="button">
                    Повернутися
                    <img src="img/arrow.svg" alt="" class="portfolio-button-arrow-back">
                </button>
            </form>
            <span class="portfolio-page-num">
                1
            </span>
            <form action="#">
                <button class="button">
                    Перейти далі
                    <img src="img/arrow.svg" alt="" class="portfolio-button-arrow">
                </button>
            </form>
        </div>
    </div>
</section>
@endsection