@extends('layout.app')
@section('title', 'Data UMKM')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/umkm/tambah') }}" class="btn btn-primary">Tambah</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama UMKM</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Pemilik</th>
                                    <th>Website</th>
                                    <th>Jam Operasional</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($model as $r)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $r->nama }}</td>
                                        <td>{{ $r->alamat }}</td>
                                        <td>{{ $r->telp }}</td>
                                        <td>{{ $r->pemilik }}</td>
                                        <td>{{ $r->website }}</td>
                                        <td>{{ $r->jam_operasional }}</td>
                                        <td><img src="{{ $r->url_file }}" height="50px" width="50px;"></td>
                                        <td>
                                            <a href="{{ url('umkm/update/' . $r->id_umkm) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('umkm/delete/' . $r->id_umkm) }}"
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
