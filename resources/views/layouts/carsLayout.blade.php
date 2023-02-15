<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rental Car Kendari</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />



    <link rel="stylesheet" href="./css/owl.carousel.min.css" />

    <script src="https://kit.fontawesome.com/a46d74ff5b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Cars') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg d-flex justify-content-center container-fluid sticky-top"
            style="font-size: 14px; background-color: #f1f3ff">
            <div id="navbar-logo" class="container-fluid" style="width: 90%">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Cars') }} --}}
                    <img src="img/logo.png" alt="img-logo" />
                </a>

                <button id="navbar-button" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title fw-bold pt-4" id="offcanvasNavbarLabel">
                            BCR
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div id="sidebar" class="d-flex align-items-center justify-content-end">
                        <a class="nav-item nav-link px-3 py-2" href="#service">Our Services</a>
                        <a class="nav-item nav-link px-3 py-2" href="#whyus">Why Us</a>
                        <a class="nav-item nav-link px-3 py-2" href="#testimony">Testimonial</a>
                        <a class="nav-item nav-link px-3 py-2" href="#faq">FAQ</a>
                        <a class="nav-item nav-link px-3 py-2" href="#">
                        </a>

                        {{-- <button type="button" class="btn btn-success fw-bold border-0 px-3"
                    style="background: #5cb85f">
                    Register
                </button> --}}
                        @guest
                            @if (Route::has('login'))
                                <div class="nav-item">
                                    <a class="btn btn-success fw-bold border-0 px-3" style="background: #5cb85f"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            @endif
                            {{-- 
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif --}}
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <main class="">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="container-fluid d-flex justify-content-center position-absolute my-5 mx-4 ">
            <div id="footer" class="row justify-content-center " style="width: 90%; font-size: 14px">
                <div id="footer-alamat" class="col-4 pe-5">
                    <div class="nav flex-column fw-light">
                        <p class="nav-item mb-2">
                            Jalan Suroyo No. 161 Mayangan Kota Probolonggo 672000
                        </p>
                        <p class="nav-item mb-2">binarcarrental@gmail.com</p>
                        <p class="nav-item mb-2">081-233-334-808</p>
                    </div>
                </div>

                <div id="footer-nav" class="nav d-flex flex-column col-2 ps-5 pe-5">
                    <li class="nav-item mb-2">
                        <a href="#service" class="nav-link p-0 text-black">Our Service</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#whyus" class="nav-link p-0 text-black">Why Us</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#testimony" class="nav-link p-0 text-black">Testimonial</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#faq" class="nav-link p-0 text-black">FAQ</a>
                    </li>
                </div>

                <div id="footer-connect-with-us" class="col-4 justify-content-center align-items-center ps-5 pe-5">
                    <p class="fw-light">Connect with us</p>
                    <ul class="nav flex-row gap-3">
                        <div class="rounded-circle d-flex justify-content-center align-items-center gap-3"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-brands fa-facebook-f" style="color: white"></i>
                        </div>

                        <div class="rounded-circle d-flex justify-content-center align-items-center gap-3"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-brands fa-instagram" style="color: white"></i>
                        </div>
                        <div class="rounded-circle d-flex justify-content-center align-items-center gap-3"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-brands fa-twitter" style="color: white"></i>
                        </div>
                        <div class="rounded-circle d-flex justify-content-center align-items-center gap-3"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-regular fa-envelope" style="color: white"></i>
                        </div>
                        <div class="rounded-circle d-flex justify-content-center align-items-center gap-3"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-brands fa-twitch" style="color: white"></i>
                        </div>
                    </ul>
                </div>

                <div id="footer-logo" class="col-2 pe-5">
                    <p class="fw-light">Copyright Binar 2022</p>
                    <img src="/img/logo.png" />
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script> --}}
    <script src="../js/jquery.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>
