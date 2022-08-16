@extends('admin.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{$class}}</a></li>
                        <li class="breadcrumb-item active">{{$sub_class}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">

                        <!-- /.card-header -->
                        <form action="{{route('event.store')}}" method="post">
                            @csrf
                            <div class="card-header text-center bg-primary">
                                <b>Create New Event</b>
                            </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! \Session::get('success') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Penyedia</label><br>
                                                <select class="form-control">
                                                    @foreach($partner as $data)
                                                        <option value="{{$data->id}}">{{$data->nama_partner}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Judul</label><br>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Isi</label><br>
                                                <textarea class="form-control konten" id="konten" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Tanggal Publish</label><br>
                                                <input type="date" class="form-control" name="">

                                            </div>
                                            <div class="col-md-3">
                                                <label>Status</label><br>
                                                <select class="form-control" name="status">
                                                    <option value="">---------</option>
                                                    <option value="0">Blokir</option>
                                                    <option value="1">Publish</option>
                                                </select>

                                            </div>
                                            <div class="col-md-3">
                                                <label>Tanggal Mulai</label><br>
                                                <input type="date" class="form-control" name="date_mulai">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Tanggal Selesai</label><br>
                                                <input type="date" class="form-control" name="date_selesai">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat</label><br>
                                            <input class="form-control" name="tempat">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Harga Dasar</label><br>
                                                <input type="number" class="form-control" name="harga">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Kuota</label><br>
                                                <input type="number" class="form-control" name="kuota">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Banner</label><br>
                                                <input type="file" class="form-control" accept="image/*" name="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- /.card-body -->
                         <div class="card-footer text-center">
                             <a href="{{route('admin.event')}}" class="btn btn-sm btn-info">Back</a>
                             <button type="submit" class="btn btn-sm btn-primary">Save</button>
                         </div>
                        </form>
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
<script>
    var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
        language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
</script>

<!-- /.content-wrapper -->
@endsection

