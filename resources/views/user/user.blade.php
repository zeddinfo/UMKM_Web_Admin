@extends('layout.app')
@section('title', 'Data User')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/user/tambah') }}" class="btn btn-primary">Tambah</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($model as $r)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $r->username }}</td>
                                        <td>
                                            <a href="{{ url('user/update/' . $r->id_u) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('user/delete/' . $r->id_u) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
@endsection
