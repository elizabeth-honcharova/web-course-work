<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500;700&family=Neucha&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @yield('link-css')
</head>

<body>
    <header id="header" class="header">
        <div class="header-wrapper">
            <div class="menu">
                <a href="index.php" class="logo">
                    <img src="img\logo.svg" alt="olia.rzz">
                </a>
                <nav class="header-nav">
                @yield('navigation')
                </nav>
                <div class="header-close">
                            <img src="img\close.svg'" alt="" class="close">
                        </div>
                <div class="lang">
                    UA
                </div>
                <div class="hamburger-menu">
                    <img src="img/hamburger.svg" alt="" class="hamburger">
                </div>
            </div>
        </div>
    </header>
    @yield('main-content')
    <footer id="footer" class="footer">
        <div class="footer-wrapper">
            <div class="footer-contact-wrapper">
                <h3 class="footer-contact-title">
                    Контактна інформація
                </h3>
                <div class="footer-contact-info">
                    <div class="footer-contact-field">
                        <img src="img/phone-icon.svg" alt="phone" class="footer-contact-ico">
                        +(380)66-455-58-69
                    </div>
                    <div class="footer-contact-field">
                        <img src="img/instagram-icon.svg" alt="instagram" class="footer-contact-ico">
                        @portfolio.byolia
                    </div>
                    <div class="footer-contact-field">
                        <img src="img/email-icon.svg" alt="email" class="footer-contact-ico">
                        olga.razzoronova@gmail.com
                    </div>

                    <div class="footer-contact-field">
                        <img src="img/linkedin-icon.svg" alt="linkedin" class="footer-contact-ico">
                        @olia-razzoronova-700003238
                    </div>
                </div>
            </div>
            <div class="footer-nav-wrapper">
                <h3 class="footer-contact-title">
                    Навігація по сайту
                </h3>
                <nav class="header-nav">
                    @yield('navigation')
                </nav>
            </div>
            <a href="index.php" class="footer-logo">
                <img src="img/logo.svg" alt="olia.rzz" class="footer-logo-img">
            </a>
        </div>
    </footer>

</body>

</html>