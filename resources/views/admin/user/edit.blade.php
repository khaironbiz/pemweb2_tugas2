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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
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
                            <div class="card-header">
                                <h3 class="card-title">{{$title}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(\Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {!! \Session::get('success') !!}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <div class="row mb-1">
                                    <label class="col-sm-2">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" value="{{$user->name}}">
                                    </div>
                                </div><div class="row mb-1">
                                    <label class="col-sm-2">UserName</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <label class="col-sm-2">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                                    <div class="row">
                                        <label class="col-sm-2">Foto</label>
                                        <div class="col-sm-5"> <img src="{{url('assets/upload/images/user/'.$user->foto)}}" class="w-75"></div>
                                        <div class="col-sm-5"><input class="form-control" type="file"></div>
                                    </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="/admin/user/show/{{$user->id}}" class="btn btn-info btn-sm">Back</a>
                                <a href="/admin/user/edit/{{$user->id}}" class="btn btn-success btn-sm">Update</a>
                            </div>
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
    <!-- /.content-wrapper -->
@endsection
