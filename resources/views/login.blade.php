<html lang="en">

<head>
    <title>Masuk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/main.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/util.css') }}>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

{{-- <body>
    <div class="limiter">
        <div class="container-login100" style="background-image: assets/about-page-bg;">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" method="POST">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">Login</span>
                    <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit">Masuk</button>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <a href="/daftar" class="login100-form-btn">Daftar</a>
                    </div>
                    <div class="text-center w-full p-t-25 p-b-230">
                        <a href="#" class="txt1">Lupa Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body> --}}

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="flex flex-col items-center">
            <a href="/">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12 stroke-blue-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </a>
            <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Masuk</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="" method="POST">
                @csrf
                <div>
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">
                        Username
                    </label>
                    <div class="mt-2">
                        <input type="text" id="username" name="username" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            tabindex="1">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                            <a href="/forgot-password" class="font-semibold text-blue-600 hover:text-blue-500">Forgot
                                password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="password" id="password" name="password" required
                            class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300"
                            tabindex="2">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                        Masuk
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Belum punya Akun?
                <a href="/daftar" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Daftar</a>
            </p>
        </div>
    </div>
</body>

</html>
