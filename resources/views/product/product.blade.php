@extends('layout.app')
@section('title', 'Data Product')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/product/tambah') }}" class="btn btn-primary">Tambah</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama UMKM</th>
                                    <th>Nama Item</th>
                                    <th>Ukuran</th>
                                    <th>Stok</th>
                                    <th>Warna</th>
                                    <th>Sex</th>
                                    <th>Bahan</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($model as $r)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $r->nama }}</td>
                                        <td>{{ $r->nama_product }}</td>
                                        <td>{{ $r->ukuran }}</td>
                                        <td>{{ $r->stok }}</td>
                                        <td>{{ $r->warna }}</td>
                                        <td>{{ $r->model }}</td>
                                        <td>{{ $r->bahan }}</td>
                                        <td>{{ $r->harga }}</td>
                                        <td>
                                            <a href="{{ url('product/update/' . $r->id_product) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ url('product/delete/' . $r->id_product) }}"
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
