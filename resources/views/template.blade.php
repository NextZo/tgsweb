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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Shop</title>
</head>

<body>
    <nav>
        <a href="/" class="text-white font-bold text-xl">E-Shop</a>
        <div class="px-6 flex gap-6 text-white">
            <a href="/kategori">Kategori</a>
            {{-- <a href="/ulasan">Review</a> --}}
            <a href="/tentang">About Us</a>
            @if (Auth::check())
                @can('isAdmin', Auth::user())
                    <a href="/dashboard">Dashboard</a>
                @endcan
                <a href="/troli">Keranjang</a>
                <a href="/logout">Keluar</a>
            @else
                <a href="/masuk">Masuk</a>
            @endif
        </div>
    </nav>
    {{-- <header>
        <div class="header">
            <img class="header-icon" src="assets/header-icon.png" alt="" />
            <h3 class="title">
                <a href="/">E-Shop</a>
            </h3>
            <nav class="px-6 flex gap-6 text-white">
                <a href="/troli">
                    <img src="assets/cart.png" alt="" />
                </a>
                <a href="/kategori">Kategori</a>
                <a href="/ulasan">Review</a>
                <a href="/tentang">About Us</a>
                @if (Auth::check())
                    @can('isAdmin', Auth::user())
                        <a href="/dashboard">Dashboard</a>
                    @endcan
                    <a href="/logout">Keluar</a>
                @else
                    <a href="/masuk">Masuk</a>
                @endif
            </nav>
        </div>
    </header> --}}
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
