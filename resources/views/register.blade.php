<html lang="en">

<head>
    <title>Daftar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/main.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/util.css') }}>
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: assets/about-page-bg;">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form class="login100-form validate-form" method="POST">
                    @csrf
                    <span class="login100-form-title p-t-20 p-b-45">Register</span>
                    <div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10" data-validate="email is required">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100"><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="container-login100-form-btn p-t-10">
                        <button class="login100-form-btn" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
