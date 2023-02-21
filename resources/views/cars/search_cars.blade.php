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
        </div>
        <img src="/img/img_car.png" class="w-50" alt="..." />
    </section>
    <!-- End Hero -->

    <!-- cari mobil -->
    <section class="container-fluid p-0" id="cari-mobil" style="width: 80%; margin-top: -4%; position: sticky">
        <div class="container-fluid d-flex flex-row justify-content-between rounded-2" id="menu-cari-mobil"
            style="
          background: #ffffff;
          border-radius: 8px;
          box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
        ">
            {{-- <div class="select-driver mx-2 my-3" style="width: 21%">
                <label for="type-driver" style="font-size: 14px">Tipe Driver</label>
                <select class="container-fluid " id="type-driver" style="height: 50% !important">
                    <option>Pilih Tipe Driver</option>
                    <option>Dengan Sopir</option>
                    <option>Tanpa Sopir(Lepas Kunci)</option>
                </select>
            </div> --}}

            {{-- <div class="select-date mx-2 my-3" style="width: 21%">
                <label for="inpudate" style="font-size: 14px">Tanggal</label>
                <input class="form-date container-fluid" name="InputDate" id="dateFilter" placeholder="Pilih Tanggal"
                    type="date" onfocus="(this.type='date')" />
            </div> --}}

            {{-- <div class="select-date mx-2 my-3" style="width: 21%">
                <label for="inpudate" style="font-size: 14px">Waktu</label>
                <input class="form-time container-fluid" type="text" name="InputTime" id="timeFilter"
                    placeholder="Pilih Waktu" type="text" onfocus="(this.type='time')" />
            </div> --}}

            <!-- <div class="select-waktu mx-2 my-3" style="width: 21%">
                                                                              <label for="pilih-waktu" style="font-size: 14px">Waktu Jemput/Ambil</label>
                                                                              <select class="container-fluid" id="pilih-waktu" style="height: 50%">
                                                                                <option>Pilih Waktu</option>
                                                                                <option class="isi-option">
                                                                                  <p>08:00</p>
                                                                                  <p>WIB</p>
                                                                                </option>
                                                                                <option>
                                                                                  <p>09:00</p>
                                                                                  <p>WIB</p>
                                                                                </option>
                                                                                <option>
                                                                                  <p>10:00</p>
                                                                                  <p>WIB</p>
                                                                                </option>
                                                                                <option>
                                                                                  <p>11:00</p>
                                                                                  <p>WIB</p>
                                                                                </option>
                                                                                <option>
                                                                                  <p>12:00</p>
                                                                                  <p>WIB</p>
                                                                                </option>
                                                                              </select>
                                                                            </div> -->

            {{-- <div class="select-penumpang mx-2 my-3 " style="width: 21%">
                <label for="Jumlah-penumpang" style="font-size: 14px">Jumlah Penumpang (Optional)</label>
                <input id="jumlah-penumpang" type="text" class="form-control mx-0 my-0" placeholder="Jumlah Penumpang"
                    aria-label="Username" aria-describedby="basic-addon1" style="height: 60% ;" />

            </div> --}}


            <div class="my-3 mx-2 d-flex align-items-center justify-content-center"
                style="width: 16%;height: 50% !important; " id="submit-cari-mobil">
                <button id="load-btn" type="button"
                    class="btn-cari-mobil btn btn-success fw-bold border-0 me-2 mt-4 rounded-1 "
                    style="background: #5cb85f; height: 50%; width: 55%;">
                    Cari
                </button>
                <button id="clear-btn" type="button"
                    class="btn-reset-mobil btn btn-outline-primary fw-bold border-0 me-0 mt-4"
                    style="background: #FFFFFF;; height: 50%; width: 45%;">
                    Reset
                </button>
            </div>

        </div>








    </section>
    <!-- end cari mobil -->

    <section class="container-fluid p-0" id="cari-mobil" style="width: 80%; ">

        @foreach ($cars as $car)
            <div class="card " id="card-tampil-mobil" style="height: 100%">
                <div class="justify-content-center align-items-center d-flex ">
                    <img id="card-image"src="storage/{{ $car->car_image }}" class="img-fluid rounded-2  shadow-sm"
                        alt="{{ $car->name }}" style="width: 270px; height: 160px" />
                </div>
                <div class="card-body">
                    <p id="card-name">Tipe Mobil {{ $car->car_name }} </p>
                    <h5 class="fw-semibold" id="card-rent">RP {{ $car->rent_cost }} /hari</h5>
                    <div class="flex-row d-flex">
                        <p> Tersedia :</p>
                        <p class="ps-1" id="card-transmision">

                            {{ \Carbon\Carbon::parse($car->availableAt)->formatLocalized('%d %B %Y') }}</p>
                        </p>
                    </div>

                    <div>
                        <div class="flex-row d-flex">
                            <i class="fa-solid fa-users pe-3"> </i>
                            <p id="card-capacity">{{ $car->sizeCar_id }}</p>
                        </div>

                    </div>
                    <div class="align-self-end">
                        <button type="button" class="btn btn-success fw-bold border-0 px-3 container-fluid"
                            style="background: #5cb85f">
                            Pilih Mobil
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="  ">
                {{-- {{ $cars->links() }} --}}
            </div>
        </section>
@endsection
