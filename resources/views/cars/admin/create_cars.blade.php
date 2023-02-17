@extends('layouts.adminLayout')

@section('admin')
    <div id="main" style="margin-top: 3%;width: 80%;">

        <section class="mb-3">

            <div class="d-flex flex-row justify-content-between align-items-center  mt-2  ">
                <h4 class="d-flex fw-bolder d-flex align-content-center align-items-cente p-0 mb-0">
                    Add New Car
                </h4>
            </div>

        </section>

        <section class="container-fluid ">

            <form action="/admin/create" method="POST" enctype="multipart/form-data"
                class="container-fluid d-flex flex-column ">
                @csrf

                <div class="ps-4 rounded-2" style="background: #FFFFFF;">
                    <div class="d-flex align-items-center flex-row mb-2 mt-5">
                        <label for="car_name" class="input_kendaraan" style="width: 13%;">Nama</label>
                        <input type="text"
                            class="input_data_car @error('car_name') is-invalid                         
                        @enderror"
                            name="car_name" id="nama_kendaraan" placeholder="Merek Kendaraan"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px;">

                        @error('car_name')
                            <span class="invalid-feedback ms-1" role="alert" style="width:20%">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>



                    <div id="" class="d-flex align-items-center flex-row my-2">
                        <label for="rent_cost" class="input_kendaraan" style="width: 13%;">Sewa Per Hari</label>
                        <input type="text" name="rent_cost"
                            class="input_data_car @error('rent_cost') is-invalid                         
                        @enderror"
                            id="sewa_perhari" placeholder="RP 0,-"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px;">
                        @error('rent_cost')
                            <span class="invalid-feedback ms-1" role="alert" style="width:20%">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div id="" class="d-flex align-items-center flex-row my-2">
                        <label for="availableAt" class="input_kendaraan" style="width: 13%;">Tersedia</label>
                        <input type="datetime-local" name="availableAt"
                            class="input_data_car @error('availableAt') is-invalid                         
                        @enderror"
                            id="availableAt" placeholder="RP 0,-"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px;">
                        @error('availableAt')
                            <span class="invalid-feedback ms-1" role="alert" style="width:20%">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="d-flex align-items-center flex-row my-2">
                        <label for="sizeCar_id" class="input_kendaraan" style="width: 13%;">Ukuran</label>
                        <select
                            class="capacity input_data_car @error('sizeCar_id') is-invalid                         
                        @enderror"
                            name="sizeCar_id" id="sizeCar_id"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px; color: #595858; ">

                            <option hidden>Ukuran Kendaraan</option>

                            @foreach ($capacity as $c)
                                <option value={{ $c->capacity }}> {{ $c->capacity }}</option>
                            @endforeach
                            @error('sizeCar_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </select>
                    </div>



                    <div class="align-items-center flex-row mt-2 mb-4 ">
                        <div class="d-flex">

                            <div class="" style="width: 13%; ">
                                <label for="foto_kendaran" class="input_kendaraan">Foto Kendaraan</label>
                            </div>

                            <div class="border d-flex " style=" width:35%; ">

                                <input type="file" id="car_image" name="car_image"
                                    class=" @error('car_image') is-invalid
                                    
                                @enderror " />

                                @error('car_image')
                                    <span class="invalid-feedback" role="alert" style="width: 100%">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end" style="width: 35%">

                            <img class="img-fluid flex" id="preview" src="#" alt="" style="max-width: 75%">
                        </div>
                    </div>

                </div>

                <div class="mt-5 justify-content-between" style="width:100% ;">
                    <button type="button" class="btn btn-outline-primary me-3"
                        onclick="window.location.replace('/list-cars')"
                        style="width: auto; background-color:#0D28A6; border:1px solid #0D28A6 ; width: 10%; color: #FFFFFF;">Cancel</button>
                    <button id="save_button" type="submit" class="btn btn-primary  " style="width:10% ;">
                        Add</button>
                </div>
            </form>

        </section>


    </div>
    <script>
        const image = document.getElementById("car_image");
        const preview = document.getElementById("preview");

        image.addEventListener("change", function() {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
