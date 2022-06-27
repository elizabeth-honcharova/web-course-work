@extends('layout')

@section('title')
Про себе
@endsection

@section('link-css')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('navigation')
<li>
    <a href="index.php" class="header-link">
        Головна
    </a>
</li>
<li>
    <div class="active-link">
        <img src="img/choose.svg" alt="current page" class="chose">
        <a href="about" class="header-link">
            Про себе
        </a>
    </div>
</li>
<li>
    <a href="portfolio" class="header-link">
        Портфоліо
    </a>
</li>
@endsection

@section('main-content')
<main class="main">
    <section id="about" class="about">
        <div class="wrapper about-wrapper">
            <img src="img/about-photo.jpg" alt="Olia Razzoronova" class="about-img">
            <div class="about-inner-wrapper">
                <div class="about-text">
                    <h2 class="about-title">
                        Про мене
                    </h2>
                    <p class="about-p">
                        Привіт! Я – Оля Раззорьонова, графічний дизайнер та 3D художник. 4 роки тому я вперше
                        ступила на свій творчий шлях і з тих пір продовжую невтомно навчатися та покращувати свої
                        навички.
                    </p>
                    <p class="about-p">
                        4 роки тому я ступила на свій творчий шлях і з тих пір продовжую невтомно навчатися та
                        покращувати свої навички. Я дуже люблю створювати щось незвичайне і завжди відкрита до нових
                        ідей. Мої роботи ти можеш подивитися у моєму портфоліо.
                    </p>
                    <p class="about-p">
                        Впевнена ми з тобою спрацюємось!
                    </p>
                    <div class="about-button-wrapper">
                        <form action="portfolio">
                            <button class="button">
                                Подивитися портфоліо
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills">
        <div class="wrapper skills-wrapper">
            <h1 class="skills-title">
                Мої навички
            </h1>
            <div class="skills-cards">
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Autodesk Maya
                    </p>
                    <img src="img/skill1.svg" alt="Autodesk Maya" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Marmoset Toolbag
                    </p>
                    <img src="img/skill2.svg" alt="Marmoset Toolbag" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Adobe Photoshop
                    </p>
                    <img src="img/skill3.svg" alt="Adobe Photoshop" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        ZBrush
                    </p>
                    <img src="img/skill4.svg" alt="ZBrush" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Magica Voxel
                    </p>
                    <img src="img/skill5.svg" alt="Magica Voxel" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Adobe Illustrator
                    </p>
                    <img src="img/skill6.svg" alt="Adobe Illustrator" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Substance Painter
                    </p>
                    <img src="img/skill7.svg" alt="Substance Painter" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Figma
                    </p>
                    <img src="img/skill8.svg" alt="Figma" class="skill-range-ico">
                </div>
                <div class="skill-card">
                    <p class="skill-subtitle">
                        Adobe InDesign
                    </p>
                    <img src="img/skill9.svg" alt="Adobe InDesign" class="skill-range-ico">
                </div>
            </div>
        </div>
    </section>
    <div class="sections-wrapper">
        <section class="experience">
            <div class="wrapper experience-wrapper">
                <h1 class="experience-title">
                    Мій досвід
                </h1>
                <div class="experience-inner-wrapper">
                    <div class="experience-inner-inner-wrapper">
                        <p class="experience-p">
                            Графічний дизайнер
                        </p>
                        <p class="experience-p">
                            2021 - 2022
                        </p>
                    </div>
                    <p class="experience-p experience-work">
                        Типографія
                    </p>
                </div>
            </div>
        </section>
        <section class="education">
            <div class="wrapper education-wrapper">
                <h1 class="education-title">
                    Моя освіта
                </h1>
                <div class="education-inner-wrapper">
                    <div class="education-inner-inner-wrapper">
                        <p class="education-p">
                            Поліграфія
                        </p>
                        <p class="education-p">
                            2018 - 2022
                        </p>
                    </div>
                    <p class="education-p">
                        Диплом молодшого спеціаліста
                    </p>
                    <p class="education-p">
                        Київський фаховий коледж комп’ютерних технологій і економіки Національного авіаційного університету
                    </p>
                </div>
            </div>
        </section>
    </div>

</main>
@endsection