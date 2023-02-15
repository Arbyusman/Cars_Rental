@extends('layouts.carsLayout')

@section('content')
    <!-- Hero -->
    <section class="container-fluid g-0 d-flex align-items-center hero" style="background-color: #f1f3ff">
        <div class="w-50" style="padding-right: 4%; padding-left: 5.7%">
            <h1 class="fw-bold mb-3" style="font-size: 36px">
                Sewa & Rental Mobil Terbaik di kawasan Kendari
            </h1>
            <p class="fw-light mb-3">
                Selamat datang di Binar Car Rental. kami menyediakan mobil kualitas
                terbaik dengan harga terjangkau. Selalu siap melayani kebutuhanmu
                untuk sewa mobil selama 24 jam.
            </p>
            <a href="/search" class="px-3 py-2 btn btn-success fw-bold border-0" style="background: #5cb85f">
                Mulai Sewa Mobil
            </a>
        </div>
        <img src="/img/img_car.png" class="w-50" alt="..." />
    </section>
    <!-- End Hero -->

    <!-- Our Service -->
    <section id="service" class="d-flex justify-content-center my-5 container-fluid">
        <div id="service-container" class="w-90 d-flex align-items-center">
            <img src="/img/img_service.png" alt="..." class="w-50 me-5" />
            <div id="our-service" class="w-50 ms-5">
                <div class="">
                    <h4 class="fw-bold">
                        Best Car Rental for any kind of trip in Kendari!
                    </h4>
                    <p>
                        Sewa mobil di Kendari bersama Binar Car Rental jaminan harga lebih
                        murah dibandingkan yang lain, kondisi mobil baru, serta kualitas
                        pelayanan terbaik untuk perjalanan wisata, bisnis, wedding,
                        meeting, dll.
                    </p>
                </div>

                <div class="container p-0">
                    <div class="d-flex align-items-center mb-2">
                        <div class="our-service-list-icon rounded-circle d-flex justify-content-center align-items-center"
                            style="background: #cfd4ed; height: 32px; width: 32px">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p class="m-2">Sewa Mobil Dengan Supir di Bali 12 Jam</p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="our-service-list-icon rounded-circle d-flex justify-content-center align-items-center"
                            style="background: #cfd4ed; height: 32px; width: 32px">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p class="m-2">Sewa Mobil Lepas Kunci di Bali 24 Jam</p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="our-service-list-icon rounded-circle d-flex justify-content-center align-items-center"
                            style="background: #cfd4ed; height: 32px; width: 32px">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p class="m-2">Sewa Mobil Jangka Panjang Bulanan</p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="our-service-list-icon rounded-circle d-flex justify-content-center align-items-center"
                            style="background: #cfd4ed; height: 32px; width: 32px">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p class="m-2">Gratis Antar - Jemput Mobil di Bandara</p>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="our-service-list-icon rounded-circle d-flex justify-content-center align-items-center"
                            style="background: #cfd4ed; height: 32px; width: 32px">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <p class="m-2">Layanan Airport Transfer / Drop In Out</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our Service -->

    <!-- Why Us -->
    <section id="whyus" class="container-fluid d-flex justify-content-center mb-5">
        <div class="d-flex flex-column" style="width: 90%">
            <div id="whyus-title">
                <h1 class="fw-bold mb-3" style="font-size: 24px">Why Us?</h1>
                <p class="mb-4" style="font-size: 14px">
                    Mengapa harus pilih Binar Car Rental?
                </p>
            </div>
            <div id="whyus-card" class="d-flex justify-content-between">
                <div class="card" style="width: 24%">
                    <div class="card-body">
                        <div class="rounded-circle d-flex justify-content-center mb-3 align-items-center"
                            style="height: 32px; width: 32px; background-color: #f9cc00">
                            <i class="fa-solid fa-thumbs-up" style="color: white" ;></i>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Mobil Lengkap</h6>
                        <p class="card-text">
                            Tersedia banyak pilihan mobil, kondisi masih baru, bersih dan
                            terawat
                        </p>
                    </div>
                </div>

                <div class="card" style="width: 24%">
                    <div class="card-body">
                        <div class="rounded-circle d-flex justify-content-center mb-3 align-items-center"
                            style="height: 32px; width: 32px; background-color: #fa2c5a">
                            <i class="fa-solid fa-tag" style="color: white"></i>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Harga Murah</h6>
                        <p class="card-text">
                            Harga murah dan bersaing, bisa bandingkan harga kami dengan
                            rental mobil lain
                        </p>
                    </div>
                </div>

                <div class="card" style="width: 24%">
                    <div class="card-body">
                        <div class="rounded-circle d-flex justify-content-center mb-3 align-items-center"
                            style="height: 32px; width: 32px; background-color: #0d28a6">
                            <i class="fa-solid fa-clock" style="color: white"></i>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Layanan 24 Jam</h6>
                        <p class="card-text">
                            Siap melayani kebutuhan Anda selama 24 jam nonstop. Kami juga
                            tersedia di akhir minggu
                        </p>
                    </div>
                </div>

                <div class="card" style="width: 24%">
                    <div class="card-body">
                        <div class="rounded-circle d-flex justify-content-center mb-3 align-items-center"
                            style="height: 32px; width: 32px; background-color: #5cb85f">
                            <i class="fa-solid fa-award" style="color: white"></i>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Layanan 24 Jam</h6>
                        <p class="card-text">
                            Sopir yang profesional, berpengalaman, jujur, ramah dan selalu
                            tepat waktu
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Us -->

    <!-- Testimony -->
    <section id="testimony" class="d-flex justify-content-center align-items-center">
        <div id="container-testimonial" class="d-flex flex-column justify-content-center align-items-center">
            <h1>Testimonial</h1>
            <p>Berbagai review positif dari para pelanggan kami</p>
            <div class="row justify-content-center" style="width: 100%">
                <div class="col p-0">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <div class="testimonial-item p-4 rounded-2 d-flex justify-content-center align-items-center"
                                style="background: #f1f3ff">
                                <div class="w-25 d-flex justify-content-center">
                                    <figure class="figure-img overflow-hidden">
                                        <img src="/img/img_photo.png" class="rounded-circle" height="80px"
                                            width="80px" />
                                    </figure>
                                </div>
                                <div class="w-75 testi-item-width">
                                    <div class="testimonial-star d-flex mb-2" style="color: #f9cc00">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="mb-2 fw-light">
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod”
                                    </p>
                                    <p class="fw-semibold">John Dee 32, Bromo</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item p-4 rounded-2 d-flex justify-content-center align-items-center"
                                style="background: #f1f3ff">
                                <div class="w-25 d-flex justify-content-center">
                                    <figure class="figure-img overflow-hidden">
                                        <img src="/img/img_photo_1.png" class="rounded-circle" height="80px"
                                            width="80px" />
                                    </figure>
                                </div>
                                <div class="w-75">
                                    <div class="testimonial-star d-flex mb-2" style="color: #f9cc00">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="mb-2 fw-light">
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod”
                                    </p>
                                    <p class="fw-semibold">John Dee 32, Bromo</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item p-4 rounded-2 d-flex justify-content-center align-items-center"
                                style="background: #f1f3ff">
                                <div class="w-25 d-flex justify-content-center">
                                    <figure class="figure-img overflow-hidden">
                                        <img src="/img/img_photo_2.png" class="rounded-circle" height="80px"
                                            width="80px" />
                                    </figure>
                                </div>
                                <div class="w-75">
                                    <div class="testimonial-star d-flex mb-2" style="color: #f9cc00">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p class="mb-2 fw-light">
                                        “Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit, sed do eiusmod”
                                    </p>
                                    <p class="fw-semibold">John Dee 32, Bromo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owl-nav">
                    <button class="owl-prev rounded-circle me-2 p-0" id="customPrevBtn" type="button"
                        role="presentation" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="owl-next rounded-circle ms-2 p-0" id="customNextBtn" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimony -->

    <!-- Banner -->
    <section class="container-fluid d-flex flex-column mt-5 justify-content-center align-items-center">
        <div id="banner" class="border rounded-2 d-flex flex-column justify-content-center align-items-center"
            style="background-color: #0d28a6; color: #ffffff; width: 90%">
            <h1 id="banner-title" class="d-flex mb-2 mt-5 text-white" style="font-size: 36px">
                Sewa Mobil di Kendari Sekarang
            </h1>
            <p id="banner-item" class="mb-2 mt-2 text-center fw-light" style="width: 50%">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="/search" id="banner-button" class="btn btn-success fw-bold mt-4 mb-5 border-0"
                style="background: #5cb85f">
                Mulai Sewa Mobil
            </a>
        </div>
    </section>
    <!--End Banner -->

    <!-- FAQ -->
    <section id="faq" class="container-fluid justify-content-center d-flex mt-5">
        <div id="container-faq" class="d-flex justify-content-center col-2" style="width: 90%">
            <div id="accordion-title" style="width: 40%">
                <h1 class="fw-bold mb-3" style="font-size: 24px">
                    Frequently Asked Question
                </h1>
                <p class="fw-light" style="font-size: 14px">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </p>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample" style="width: 60%">
                <div class="accordion-item mb-3 bg-light" style="border: 1px solid #d4d4d4; border-radius: 4px">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                            style="font-size: 14px">
                            Apa saja syarat yang dibutuhkan?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="font-size: 14px">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            first item's accordion body.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 bg-light" style="border: 1px solid #d4d4d4; border-radius: 4px">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                            style="font-size: 14px">
                            Berapa hari minimal sewa mobil lepas kunci?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="font-size: 14px">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            second item's accordion body. Let's imagine this being filled
                            with some actual content.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-3 bg-light" style="border: 1px solid #d4d4d4; border-radius: 4px">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree" style="font-size: 14px">
                            Berapa hari sebelumnya sabaiknya booking sewa mobil?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="font-size: 14px">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            third item's accordion body. Nothing more exciting happening
                            here in terms of content, but just filling up the space to make
                            it look, at least at first glance, a bit more representative of
                            how this would look in a real-world application.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 bg-light" style="border: 1px solid #d4d4d4; border-radius: 4px">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour"
                            style="font-size: 14px">
                            Apakah Ada biaya antar-jemput?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="font-size: 14px">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            third item's accordion body. Nothing more exciting happening
                            here in terms of content, but just filling up the space to make
                            it look, at least at first glance, a bit more representative of
                            how this would look in a real-world application.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 bg-light" style="border: 1px solid #d4d4d4; border-radius: 4px">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive"
                            style="font-size: 14px">
                            Bagaimana jika terjadi kecelakaan
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" style="font-size: 14px">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            third item's accordion body. Nothing more exciting happening
                            here in terms of content, but just filling up the space to make
                            it look, at least at first glance, a bit more representative of
                            how this would look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->
@endsection
