@extends('layout.app')
@section('title', 'Update Data User')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/user') }}" class="btn btn-primary">Kembali</a>
                    </div>
                    <form class="form" action="{{ url('/user/update/' . $model->id_u) }}" method="POST">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Input Nama</label>
                                <input type="text" name="username" class="form-control" placeholder="Inputkan Nama"
                                    value="{{ $model->username }}">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>
@endsection
