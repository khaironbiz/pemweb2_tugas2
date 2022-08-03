
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
                <div class="col-md-4  d-flex card">
                    <div class="card p-2 mt-2">
                        <div class="card-header">
                            Kelas
                        </div>
                        <ul class="list-group list-group-flush">
                            <a href="{{route('home.events.detail',['slug'=>'slug-baru-banget'])}}">
                                <li class="list-group-item active">An item</li>
                            </a>

                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>
                    <div class="card p-2 mt-2">
                        <div class="card-header">
                            Kelas
                        </div>
                        <ul class="list-group list-group-flush">
                            <a href="{{route('home.events.detail',['slug'=>'slug-baru-banget'])}}">
                                <li class="list-group-item active">An item</li>
                            </a>

                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-8 d-flex card">
                    <div class="card">
                        <img src="{{asset('assets/upload/images/demo/5.jpg')}}" class="w-100">
                        <div class="card-header">
                            <b>Judul Event</b>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section><!-- End Services Section -->
@endsection
