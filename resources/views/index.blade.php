@extends('layout')

@section('title')
Головна
@endsection

@section('link-css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('navigation')
<li>
    <div class="active-link">
        <img src="img/choose.svg" alt="current page" class="chose">
        <a href="index.php" class="header-link">
            Головна
        </a>
    </div>
</li>
<li>
    <a href="about" class="header-link">
        Про себе
    </a>
</li>
<li>
    <a href="portfolio" class="header-link">
        Портфоліо
    </a>
</li>
@endsection

@section('main-content')
<main class="main">
    <section id="intro" class="intro">
        <div class="intro-wrapper">
            <div class="intro-inner-wrapper">
                <div class="intro-text">
                    <h1 class="intro-title">Світ твоєї уяви</h1>
                    <p class="intro-sent">
                        Що мені подобається у дизайні та 3D моделюванні - це те, що вони не мають обмежень.
                    </p>
                    <p class="intro-sent">
                        Є лише ти та неосяжний простір твоєї уяви - один на один. Це чарівне поєднання реальності та
                        загадкового світу підсвідомості, можливість вилити фантазію у щось справжнє, вдихнути в неї
                        життя. Дизайн – то моя пристрасть, 3D моделювання – то моя віддушина.
                    </p>
                    <p class="intro-offer">
                        Хочеш творити разом зі мною?
                    </p>
                </div>
                <div class="buttons">
                    <button class="main-button">
                        Створити щось прекрасне
                    </button>
                    <button class="second-button">
                        Так
                    </button>
                </div>
            </div>
            <img src="img/main-picture.svg" alt="world of dreams" class="intro-pic">
        </div>
    </section>
    <section id="work" class="work">
        <div class="work-wrapper">
            <h2 class="work-title">
                Що я можу для тебе зробити?
            </h2>
            <div class="work-cards">
                <img src="img/3d-icon.svg" alt="3D" class="work-icon">
                <img src="img/design-icon.svg" alt="Design" class="work-icon">
                <img src="img/ui-icon.svg" alt="UI" class="work-ui-icon">
            </div>
            <div class="work-subtitles">
                <p class="work-subtitle">3D модель</p>
                <p class="work-design-subtitle">Графічний дизайн</p>
                <p class="work-subtitle">UI/UX дизайн</p>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="about-wrapper">
            <img src="img/main-photo.png" alt="Olia Razzoronova" class="about-img">
            <div class="about-inner-wrapper">
                <div class="about-text">
                    <h2 class="about-title">
                        Про мене
                    </h2>
                    <p class="about-par">
                        Привіт! Я – Оля Раззорьонова, графічний дизайнер та 3D художник. 4 роки тому я вперше
                        ступила на свій творчий шлях і з тих пір продовжую невтомно навчатися та покращувати свої
                        навички.
                    </p>
                    <p class="about-par">
                        Як дизайнер я маю досвід роботи з такими інструментами як Photoshop, Illustrator, Figma,
                        InDesign, а в якості 3D художника я працювала з такими програмами як Autodesk Maya, ZBrush,
                        Marmoset Toolbag, MagicaVoxel. Моє улюблене направлення це створення графіки для ігор, а моя
                        команда навіть посіла 3 місце за стилістику гри на конкурсі Global Game Jam Ukraine.
                    </p>
                    <p class="about-par">
                        Я дуже люблю створювати щось незвичайне і завжди відкрита до нових ідей. Мої роботи ти можеш
                        подивитися у моєму портфоліо. Впевнена, ми з тобою спрацюємось!
                    </p>
                </div>
                <div class="about-button-wrapper">
                    <form action="portfolio">
                        <button class="main-button">
                            Подивитися портфоліо
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="portfolio-wrapper">
            <h2 class="portfolio-title">
                Прев’ю робіт
            </h2>
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
            </div>
            <form action="portfolio">
                <button class="portfolio-button">
                    Побачити більше
                    <img src="img/arrow.svg" alt="" class="portfolio-button-arrow">
                </button>
            </form>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="contact-wrapper">
            <h2 class="contact-title">
                Сконтактуйся зі мною!
            </h2>
            <p class="contact-offer">
                Залишились питання чи вже не терпиться почати працювати? Залиш мені повідомлення тут або подзвони за
                номером вказаним нижче. Не вагайся, я завжди відкрита до діалогу та буду рада вислухати всі твої
                питання.
            </p>
            <form method="post" action="{{route('send-msg')}}" class="contact-form">
                @csrf
                <fieldset>
                    <p class="contact-form-fields">
                        <input type="text" name="name" id="name" class="contact-form-field contact-form-name" placeholder="Твоє ім’я">
                        <input type="email" name="email" id="email" class="contact-form-field contact-form-email" placeholder="Твій емейл">
                    </p>
                    <div class="contact-form-fields">
                        <textarea name="msg" id="msg" class="contact-form-field contact-form-msg" placeholder="Повідомлення"></textarea>
                        <button type="submit" class="contact-form-button">
                            <img src="img/arrow.svg" alt="" class="contact-button-arrow">
                        </button>
                    </div>
                </fieldset>
            </form>
            @if($errors->any())
            <div class="contact-error">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="contact-error">
                <p class="success">Повідомлення відправлено!</p>
            </div>
            @endif
        </div>
    </section>
</main>
@endsection