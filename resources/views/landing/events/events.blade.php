
@extends('layouts.landing.home')

@section('content')
    <!-- ======= Services Section ======= -->
    <section id="events" class="services services mt-5">
        <div class="container mt-5" data-aos="fade-up">

            <div class="section-title">
                <h2>Events</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('medicio/assets/img/about.jpg')}}">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-6">02-AUG-2022</div>
                                <div class="col-6 text-end">3 SKP</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{route('home.event.detail', ['slug'=>'slug-bagus'])}}">
                                <b>Judul Berita</b><br>
                                <p class="text-justify">Head line berita head line berita head line beritahead line beritahead line beritahead line berita</p>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/1.jpg')}}">
                        <div class="card-header">
                            <b>Laser Hijau</b>
                        </div>
                        <div class="card-body">
                            Lorem
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/2.jpg')}}">
                        <div class="card-header">
                            <b>Laser Hijau</b>
                        </div>
                        <div class="card-body">
                            Lorem
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/3.jpg')}}">
                        <div class="card-header">
                            <b>Laser Hijau</b>
                        </div>
                        <div class="card-body">
                            Lorem
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/4.jpg')}}">
                        <div class="card-header">
                            <b>Laser Hijau</b>
                        </div>
                        <div class="card-body">
                            Lorem
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex mb-3">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/5.jpg')}}">
                        <div class="card-header">
                            <b>Laser Hijau</b>
                        </div>
                        <div class="card-body">
                            Lorem
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
