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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/f90068558c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Shop</title>
</head>

<body class="flex flex-col min-h-screen">
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
    <div class="mt-20">
        @yield('main')
    </div>
    <footer class="mt-auto bg-blue-600 py-4">
        <div class="flex items-center flex-col">
            <h3 class="text-2xl text-white">E-shop</h3>
            <div class="my-2">
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fas fa-envelope"></i>
            </div>
            <p class="text-white">Build with ❤ by Kelompok 4</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src={{ asset('assets/js/script.js') }}></script>

    <script>
        let sizes = [];
        let keranjangs = [];

        function size(s) {
            sizes.push(s);
        }

        function addToKeranjang(id) {
            let keranjang = [];
            sizes.filter(data => {
                if (data.split('-')[1] == id) {
                    keranjang.push(data.split('-')[0])
                }
            })

            localStorage.setItem(id, keranjang);
        }
    </script>
</body>

</html>
