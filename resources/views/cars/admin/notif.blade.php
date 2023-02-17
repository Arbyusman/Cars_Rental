@extends('layouts.adminLayout')
@section('admin')
    <main id="main" class="mt-1 container-fluid">
        <section class="mb-4">


            <!-- card -->


           

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






    </main>
@endsection
