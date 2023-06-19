<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/style.css') }} />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://kit.fontawesome.com/f90068558c.js" crossorigin="anonymous"></script>

    <title>E-Shop</title>
</head>

<body style="background-image: url(assets/bg_bggenerator_com.png);background-size: cover;">
    {{-- <div class="splash">
        <h1 class="splash-text" data-aos="fade-right" data-aos-duration="200">
            Hello Guys! <br />
            Welcome to our shop!
        </h1>
    </div> --}}

    <header>
        <div class="header">
            <img class="header-icon" src="assets/header-icon.png" alt="" />
            <h3 class="title">
                <a href="/">E-Shop</a>
            </h3>
            <nav>
                <a href="/kategori">Kategori</a>
                <a href="/kontak">Review</a>
                <a href="/tentang">About Us</a>
                <a href="/masuk">Masuk</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="main-footer">
            <h3 class="info-top">E-shop</h3>
            <div class="social-media">
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fas fa-envelope"></i>
            </div>
            <p class="info-center">Build with ❤ by Kelompok 4</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src={{ asset('assets/js/script.js') }}></script>
</body>

</html>
