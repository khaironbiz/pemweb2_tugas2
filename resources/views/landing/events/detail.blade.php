
@extends('layouts.landing.home')

@section('content')
    <!-- ======= Services Section ======= -->
    <section id="events" class="services services mt-5">
        <div class="container mt-5" data-aos="fade-up">
            <div class="section-title">
                <h2>{{$title}}</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row">
                <div class="col-md-4  d-flex">
                    @include('layouts.landing.navbar.event')
                </div>
                <div class="col-md-8 d-flex">
                    <div class="card p-2">
                        <div class="card mb-2">
                            <div class="card-header">
                                <b>Judul Event</b>
                            </div>
                            <div class="card-body">
                                <h6>Deskripsi</h6>
                                <p>
                                    Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum
                                </p>

                                <h6 class="mt-3">Tanggal</h6>
                                <h6 class="mt-3">Tempat</h6>
                                <h6 class="mt-3">Akreditasi</h6>
                                <div class="row">
                                    <div class="col-4">
                                        <label>PPNI</label>
                                    </div>
                                    <div class="col-4">: 3 SKP
                                    </div>
                                </div>
                                <h6 class="mt-3">Fasilitas</h6>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
