<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rental Car Kendari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">



    <script src="https://kit.fontawesome.com/a46d74ff5b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/admin_style.css" />
    <link rel="stylesheet" href="/css/side_nav.css" />

</head>

<body style="background: #CFD4ED;">
    <!-- header -->
    <header class="container-fluid pt-2  d-grid fixed-top"
        style="background: #FFFFFF;box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.05);height: 8%; ">


        <div id="header" class="d-flex flex-wrap align-items-center justify-content-between  ">

            <div class="d-flex flex-row align-items-center">
                <div class=" ms-1 ">
                    <img src="/img/Rectangle_62.png" alt="">
                </div>
                <div class="ms-3">
                    <button id="menu_Button" class="openbtn">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </div>

            <div class="d-flex me-3 align-items-center ">



                {{-- <div class="modal-dialog modal-dialog-scrollable" id="exampleModal" 
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                </div> --}}


                <form id="form-input" class=" me-3" role="search" style="width: 244px;
                height: 36px;">
                    <div class="input-group justify-content-center align-items-center ">

                        <input id="input-search" type="text" class="form-control" placeholder="Search"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button id="btn-search" class="btn btn-outline-primary" type="button" id="button-addon2">
                            Search
                        </button>
                    </div>
                </form>


                <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-regular fa-bell"></i>
                    <span class="position-absolute  badge rounded-pill bg-danger">
                        {{ $unreadNotifications }}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>


                <div class="modal " id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    @foreach (auth()->user()->notifications as $notification)
                        <section id="tampil_mobil">
                            <div class="card  mt-2 container-fluid">

                                <div class="card-body ms-0 me-0">
                                    <div class=" d-flex">
                                        <p class="p-0 my-1">{{ $notification->data['name'] }}</p>
                                    </div>
                                    <div class=" d-flex">
                                        <p class="p-0 my-1"> {{ $notification->data['email'] }}</p>
                                    </div>
                                    <div class=" d-flex">
                                        <p class="p-0 my-1"> {{ $notification->data['message'] }}</p>
                                    </div>

                                </div>
                            </div>



                        </section>
                    @endforeach
                </div>

                <button id="navbar-button" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>


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
                {{-- <div id="profil" class="dropdown text-end me-1">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <label class="me-2" for="profil-image"> @Arbyusman</label>
                        <img src="https://github.com/mdo.png" id="profil-image" alt="mdo" width="32"
                            height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small m-0 p-0">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> --}}

            </div>


        </div>


        <nav>
            <!-- Sidebar -->
            <div id="mySidenav" class="sidenav">
                <div id="logo" class="d-flex justify-content-center align-items-center  mb-4"
                    style="margin-top: 20%;">
                    <a style="background: #CFD4ED;width: 34px;height: 34px;"></a>
                </div>
                <div id="dasboard"
                    class="container-fluid  d-flex justify-content-center  align-items-center flex-column ">
                    <button id="button_dasboard" type="button" data-bs-target="#collapseWidthExample">
                        <img class="img-fluid" src="/img/icons/fi_home.png">
                        <p class="py-1" style="font-size: 12px;color: #FFFFFF; "> Dasboard</p>
                    </button>
                </div>

                <div id="cars"
                    class="container-fluid  d-flex justify-content-center  align-items-center flex-column">
                    <button id="button_cars" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidthExample" onclick="openNavItem()">
                        <span>
                            <img class="img-fluid" src="/img/icons/fi_truck.png">
                            <p class="py-1" style="font-size: 12px;color: #FFFFFF; "> Cars</p>
                        </span>
                    </button>
                </div>
            </div>
            <div id="mySidebar" class="sidebar">
                <!-- Scrollable modal -->
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button> --}}

                <!-- Modal -->





                <div id="" class="">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div id="sidebar" class="card card-body  " style="width: 300px;">

                            <div id="close_sidebar " class=" justify-content-end d-flex">
                                <button id="button_cars_close" type="button"
                                    class="btn-close align-content-end justify-content-end " aria-label="Close"
                                    onclick="closeNavItem()"></button>
                            </div>

                            <div class="fw-bolder align-items-start"
                                style="color: #8A8A8A;font-style: normal;
              font-weight: 700;
              font-size: 14px;
              ">
                                CARS
                            </div>

                            <div id="list-car" class="container-fluid mt-3 p-0 align-items-start">
                                <button id="list-car-button" class="btn p-0 m-0" type="button" ;
                                    onclick="openlistcar()">
                                    <a id="list-car-a" class=" text-decoration-none">
                                        List Car

                                </button>
                            </div>

                        </div>
                    </div>
                </div>

        </nav>

    </header>
    <!-- navbar -->

    <!-- End NAvbar -->


    <div>
        @yield('admin')
    </div>





</body>

<script>
    function openNavItem() {
        document.getElementById("collapseWidthExample").style.display = "block";
        document.getElementById("main").style.marginLeft = "16%";
        document.getElementById("main").style.width = "80%";
        document.getElementById("breadcumb").style.marginLeft = "16%";
        document.getElementById("breadcumb").style.display = "flex";
    }

    function closeNavItem() {
        document.getElementById("collapseWidthExample").style.display = "none";
        document.getElementById("main").style.marginLeft = "4%";
        document.getElementById("main").style.display = "none";


    }



    document.getElementById("menu_Button").addEventListener("click", toggleNav);

    function toggleNav() {
        navSize = document.getElementById("mySidenav").style.width;
        if (navSize == "4%") {
            return close();
        }
        return open();
    }

    function open() {
        document.getElementById("mySidenav").style.width = "4%";
        document.getElementById("breadcumb").style.marginLeft = "4%";
        document.getElementById("breadcumb").style.display = "blok";
        document.getElementById("header").style.display = "grid";
        document.getElementById("header").style.marginLeft = "4%";
        document.getElementById("main").style.marginLeft = "4%";
        // document.getElementById("breadcrumb-add-cars").style.display = "none";
        // document.getElementById("breadcrumb-add-update").style.display = "none";
        // document.getElementById("breadcumb").style.marginLeft = "4%";
        // document.getElementById("breadcrumb-list-cars").style.display = "none";
    }

    function close() {
        document.getElementById("breadcumb").style.display = "none";
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("main").style.display = "none";
        document.getElementById("header").style.marginLeft = "0";
        document.getElementById("collapseWidthExample").style.display = "none";

    }

    function openlistcar() {
        // document.getElementById("list-car-a").href="/list-cars";
        document.getElementById("main").style.display = "grid";
        document.getElementById("mySidenav").width = "4%";

    }

    function addCar() {
        document.getElementById("tambah_kendaraan").href = "add-car";

    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>

{{-- <script src="/sidebar.js"></script> --}}
</body>

</html>
