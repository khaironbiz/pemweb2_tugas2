
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
                    @include('layouts.landing.navbar.user')
                </div>
                <div class="col-md-8 d-flex">
                    <div class="card w-100">
                        <form action="{{route('education.user.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <b>Pendidikan User</b>
                                    </div>
                                    <div class="col-6 text-end">
                                        <a href="{{route('education.user.store')}}" class="btn btn-sm btn-success">Edit</a>
                                        <form action="{{route('education.user.store')}}">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="id" readonly>

                                                @foreach($pendidikan as $p)
                                                <option value="{{$p->id}}" @if($education->education_level_id === $p->id) selected @endif>{{$p->education_level}}</option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Level Pendidikan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" value="{{$education->program_studi}}" name="program_studi" readonly>
                                            <label for="floatingInput">Jurusan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" value="{{$education->institusi}}"  name="institusi" readonly>
                                            <label for="floatingInput">Intitusi Pendidikan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="floatingInput" value="{{$education->tahun_lulus}}" name="tahun_lulus" readonly>
                                            <label for="floatingInput">Tahun Lulus</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" value="{{$education->nomor_ijazah}}" name="nomor_ijazah" readonly>
                                            <label for="floatingInput">Nomor Ijazah</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" value="{{$education->ttd_ijazah}}" name="ttd_ijazah" readonly>
                                            <label for="floatingInput">Penanda Tangan Ijazah</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="pendidikan_terahir" readonly>
                                                <option value="">----pilih----</option>
                                                <option value="0" @if($education->pendidikan_terahir === 0) selected @endif>Tidak</option>
                                                <option value="1">Ya</option>
                                            </select>
                                            <label for="floatingSelect">Apakah Pendidikan Terahir?</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="floatingInput" name="file">
                                            <label for="floatingInput">File Ijazah</label>
                                        </div>
                                    </div>
                                    <embed type="application/pdf" src="{{asset('assets/upload/files/ijazah/'.$education->file_ijazah)}}" width="600" height="1400"></embed>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Doctors Section -->

@endsection
