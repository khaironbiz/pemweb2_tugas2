
@extends('layouts.landing.home')

@section('content')
    <!-- ======= Doctors Section ======= -->
    <section id="video" class="doctors section-bg mt-5">
        <div class="container mt-5" data-aos="fade-up">

            <div class="section-title">
                <h2>{{$title}}</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex">
                    @include('layouts.landing.navbar.auth')
                </div>
                <div class="col-md-8 d-flex">
                    <div class="card p-2 w-100">
                        <div class="row justify-content-center p-3">
                            <div class="col-8 text-center">
                                <img src="{{asset('assets/upload/images/landing/ppni.png')}}" class="w-25">
                            </div>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Depan">
                                        <label for="floatingInput">Nama Depan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Belakang">
                                        <label for="floatingInput">Nama Belakang</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Gelar Depan">
                                        <label for="floatingInput">Gelar Depan</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Gelar Belakang">
                                        <label for="floatingInput">Gelar Belakang</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                            <option selected>---Pilih---</option>
                                            <option value="1">Laki-laki</option>
                                            <option value="2">Perempuan</option>
                                            <option value="3">Lainnya</option>
                                        </select>
                                        <label for="floatingSelect">Jenis Kelamin</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">HP</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center mt-5">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctors Section -->
@endsection
