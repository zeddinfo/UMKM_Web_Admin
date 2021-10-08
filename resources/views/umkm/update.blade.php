@extends('layout.app')
@section('title', 'Update Data UMKM')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/umkm') }}" class="btn btn-primary">Kembali</a>
                    </div>
                    <form class="form" action="{{ url('/umkm/update/' . $model->id_umkm) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Input Nama UMKM</label>
                                <input type="text" name="nama" class="form-control" placeholder="Inputkan Nama Toko"
                                    value="{{ $model->nama }}">
                            </div>

                            <div class="form-group">
                                <label>Input Alamat UMKM</label>
                                <input type="text" name="alamat" class="form-control" placeholder="Input Alamat Toko"
                                    value="{{ $model->alamat }}">
                            </div>

                            <div class="form-group">
                                <label>TELP UMKM</label>
                                <input type="text" name="telp" class="form-control" placeholder="Telp UMKM"
                                    value="{{ $model->telp }}">
                            </div>

                            <div class="form-group">
                                <label>Pemilik UMKM</label>
                                <input type="text" name="pemilik" class="form-control" placeholder="Pemilik UMKM"
                                    value="{{ $model->pemilik }}">
                            </div>

                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" name="website" class="form-control" placeholder="Website"
                                    value="{{ $model->website }}">
                            </div>

                            <div class="form-group">
                                <label>Jam Operasional</label>
                                <input type="text" name="jam_operasional" class="form-control"
                                    placeholder="08.00 WIB - 22.00 WIB" value="{{ $model->jam_operasional }}">
                            </div>

                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" name="laltiude" class="form-control" placeholder="Inputkan Latitude"
                                    value="{{ $model->laltiude }}">
                            </div>

                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" name="longitude" class="form-control" placeholder="Inputkan Longitude"
                                    value="{{ $model->longitude }}">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control"
                                    placeholder="Pemesanan dapat dilakukan bla bla bla" value="{{ $model->keterangan }}">
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
