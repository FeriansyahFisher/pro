<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project Pro</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <style>
        .homepage_welcome{
            min-height: 500px;
            background-image: linear-gradient(to bottom right, #011161, #A243DF);
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    @include('layouts.navigation')
    <div class="content homepage_welcome text-white">
        <div class="text-center p-10 md:p-20 mx-auto max-w-7xl">
            <h1 class="text-3xl mb-2">Welcome</h1>
            <i>Selamat datang di project pro, explore apa aja disini</i>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 mt-12">
                <div>
                    <span class="text-5xl"><i class="fas fa-users"></i></span>
                    <h2 class="text-2xl font-bold mt-4">Tes Gan</h2>
                    <p>Gabung dengan komunitas dari seluruh Indonesia</p>
                </div>
                <div>
                    <span class="text-5xl"><i class="fas fa-book"></i></span>
                    <h2 class="text-2xl font-bold mt-4">Learn</h2>
                    <p>Pelajari Gan</p>
                </div>
                <div>
                    <span class="text-5xl"><i class="fas fa-star"></i></span>
                    <h2 class="text-2xl font-bold mt-4">Be Champion</h2>
                    <p>Lanjut Jadi generasi juara</p>
                </div>
            </div>
            <div class="text-xl text-center my-10">
                <a role="button" href="{{ URL::route('register') }}" class="text-white hover:text-blue px-4 py-2 border rounded-full">
                    Join Sekarang <i class="fas fa-chevron-right"></i>
                </a>
            </div>
            <div class="text-3xl text-center mt-10">
                <button type="button" class="motion-safe:animate-bounce">
                    <i class="fas fa-chevron-down"></i>
                </button><br>
                <span class="text-sm"><i>Pelajari lagi</i></span>
            </div>
        </div>
    </div>
</body>
</html>