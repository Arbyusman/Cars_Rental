@extends('layouts.adminLayout')
@section('admin')
    <section id="breadcumb" class="container-fluid" style="margin-top:4.5% ;">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li id="breadcrumb-cars" class="breadcrumb-item"><a href="/admin">Cars</a></li>
                <li id="breadcrumb-list-cars" class="breadcrumb-item active" aria-current="page"><a href="/admin">List
                        Cars</a>
                </li>
            </ol>
        </nav>
    </section>
    <!-- END breadcumb -->

    <main id="main" class="mt-1 container-fluid">
        <section class="mb-4">
            <div class="d-flex flex-row justify-content-between gap-3 mb-3 align-content-center align-items-center">
                <div class="d-flex fw-bolder d-flex ">


                    List Cars

                </div>
                <div class="">
                    <a href="/admin/create">
                        <button action="/admin/create" id="tambah_kendaraan" type="button" class="btn btn-primary">
                            <i class="fa-solid fa-plus"></i>
                            Add New Car </button>
                    </a>
                </div>
            </div>

            <div>
                <button class="filter-button btn btn-primary" data-value="category1" id="button_all"
                    type="button">ALL</button>
                <button class="filter-button btn btn-primary" data-value="small" id="button_small"
                    type="button">Small</button>
                <button class="filter-button btn btn-primary" data-value="medium" id="button_medium"
                    type="button">Medium</button>
                <button class="filter-button btn btn-primary" data-value="large" id="button_large"
                    type="button">Large</button>
            </div>
        </section>

        <!-- card -->


        @foreach ($cars as $car)
            <section id="tampil_mobil">
                <div class="card  mt-2 container-fluid">
                    <div class="align-items-center justify-content-center d-flex mt-3">
                        <img src="storage/{{ $car->car_image }}" class=" img-fluid rounded-2" alt="..."
                            style="max-width: 97%; max-height: 200px; ">
                    </div>
                    <div class="card-body ms-0 me-0">
                        <div class=" d-flex">
                            <p class="p-0 my-1">{{ $car->car_name }}/</p>
                            <p class="p-0 my-1"> {{ $car->sizeCar_id }}</p>
                        </div>
                        <p class="fw-bolder p-0 my-1"> RP {{ $car->rent_cost }} /hari</p>
                        <p class="p-0 my-2">Updated at
                            {{ \Carbon\Carbon::parse($car->updated_at)->formatLocalized('%d %B %Y') }}</p>

                        <div id="button_card" class=" d-flex  flex-row justify-content-between align-items-baseline mt-2">

                            <button id="button_delete" type="button" class="btn btn-primary " data-bs-toggle="modal"
                                style="width:45% ;" data-bs-target="#exampleModal{{ $car->id }}">
                                <i class="fa-regular fa-trash-can pe-1"></i>
                                Delete
                            </button>

                            <a class="p-0" href="/admin/update/{{ $car->id }}" style="width:45% ;">
                                <button id="button_edit" type="button"
                                    class="btn  align-items-center justify-content-center" style="width:90% ;">
                                    <i class="fa-regular fa-pen-to-square pe-1"></i>
                                    Edit</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal{{ $car->id }}" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex flex-column gap-3 text-center">
                                    <image class="mx-auto" src="/img/img_delete.png" height="121px" />
                                    <div class="fw-bolder">Menghapus Data Mobil</div>
                                    <div class="fw-light">
                                        Setelah dihapus, data mobil tidak dapat dikembalikan. Yakin ingin menghapus?
                                    </div>
                                </div>
                            </div>
                            <div class="m-2 d-flex justify-content-center align-content-center pb-3">
                                <form class="d-flex" action="admin/delete/{{ $car->id }}" method="POST">
                                    @csrf
                                    {{-- @method('delete') --}}

                                    <button type="submit" class="btn btn-danger " style="width:100% ;">YA</button>

                                    <button type="button" class="btn btn-primary mx-2" style="width: 100%;"
                                        data-bs-dismiss="modal">Tidak</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        @endforeach






    </main>
@endsection
