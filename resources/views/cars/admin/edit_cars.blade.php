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

            <form action="/admin/update/{{ $car->id }}" method="POST" enctype="multipart/form-data"
                class="container-fluid d-flex flex-column ">
                @csrf
                @method('post')

                <div class="ps-4 rounded-2" style="background: #FFFFFF;">
                    <div class="d-flex align-items-center flex-row mb-2 mt-5">
                        <label for="car_name" class="input_kendaraan" style="width: 13%;">Nama</label>
                        <input type="text" value="{{ $car->car_name }}"
                            class="input_data_car @error('car_name')
                            
                        @enderror"
                            name="car_name" id="nama_kendaraan" placeholder="Merek Kendaraan"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px;">
                    </div>

                    <div id="" class="d-flex align-items-center flex-row my-2">
                        <label for="rent_cost" class="input_kendaraan" style="width: 13%;">Sewa Per Hari</label>
                        <input type="text" value="{{ $car->rent_cost }}" name="rent_cost" class="input_data_car"
                            id="sewa_perhari" placeholder="RP 0,-"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px;">
                    </div>

                    <div id="" class="d-flex align-items-center flex-row my-2">
                        <label for="availableAt" class="input_kendaraan" style="width: 13%;">Tersedia</label>
                        <input type="datetime-local" name="availableAt"
                        value="{{ $car->availableAt }}"
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
                        <label for="size_car" class="input_kendaraan" style="width: 13%;">Ukuran</label>
                        <select class="capacity input_data_car" name="size_car" id="size_car"
                            style="width:35% ; border: 1px solid #D0D0D0;
          border-radius: 2px; color: #595858; "
                            value="{{ $car->sizeCar_id }}">

                            @if (!$car->sizeCar_id)
                                <option hidden>Ukuran Kendaraan</option>
                            @else
                                <option selected value="{{ $car->sizeCar_id }}">{{ $car->sizeCar_id }}</option>
                            @endif
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select>
                    </div>



                    <div class="align-items-center flex-row mt-2 mb-4 ">
                        <div class="d-flex">

                            <div class="" style="width: 13%; ">
                                <label for="foto_kendaran" class="input_kendaraan">Foto Kendaraan</label>
                            </div>

                            <div class="border" style=" width:35%; ">

                                <input type="hidden" id="old_image" name="old_image" value="{{ $car->car_image }}" />

                                <input type="file" id="car_image" name="car_image" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end" style="width: 35%">

                            @if (!$car->car_image)
                                <img class="img-fluid flex" id="preview" src="#" alt=""
                                    style="max-width: 75%">
                            @else
                                <img class="img-fluid flex" src="{{ asset('storage/' . $car->car_image) }}" alt="car image"
                                    style="max-width: 75%">
                            @endif
                        </div>
                    </div>

                </div>

                <div class="mt-5 justify-content-between" style="width:100% ;">
                    <button type="button" class="btn btn-outline-primary me-3" onclick="window.location.replace('/admin')"
                        style="width: auto; background-color:#0D28A6; border:1px solid #0D28A6 ; width: 10%; color: #FFFFFF;">Cancel</button>
                    <button id="save_button" type="submit" class="btn btn-primary  " style="width:10% ;">
                        Update</button>
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
