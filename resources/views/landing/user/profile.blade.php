
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
                <div class="col-md-4 d-flex mb-2">
                    @include('layouts.landing.navbar.user')
                </div>
                <div class="col-md-8 d-flex">
                    <div class="card p-2 w-100">
                        <div class="card mb-2">
                            <div class="card-header">
                                <b>Data Diri</b>
                            </div>
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-4">
                                        <label>Nama</label>
                                    </div>
                                    <div class="col-md-9 col-8">:{{$user->name}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-9 col-8">:{{$user->email}}</div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-4">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-9 col-8">:{{$user->phone_cell}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header">
                                <b>Riwayat Pendidikan</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="example1">

                                </table>
                            </div>

                        </div>
                        <div class="card mb-2">
                            <div class="card-header">
                                <b>Riwayat Pekerjaan</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="example1">

                                </table>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header">
                                <b>Riwayat Organisasi</b>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="example1">

                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Doctors Section -->
@endsection
