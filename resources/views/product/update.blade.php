@extends('layout.app')
@section('title', 'Update Data Product')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><a href="{{ url('/product') }}" class="btn btn-primary">Kembali</a>
                    </div>
                    <form class="form" action="{{ url('/product/update/' . $model->id_product) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label>Toko</label>
                                <div>
                                    <select class="form-control selectric" name="umkm_id">
                                        <option value="{{ isset($model) && $model->nama ? $model->umkm->id_umkm : 0 }}">
                                            {{ $model->umkm->nama }}</option>
                                        @foreach ($umkm as $r)
                                            <option value={{ $r->id_umkm }}>{{ $r->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Input Nama Barang</label>
                                <input type="text" name="nama_product" class="form-control"
                                    placeholder="Inputkan Nama Barang" value="{{ $model->nama_product }}">
                            </div>

                            <div class=" form-group">
                                <label>Input Ukuran</label>
                                <input type="text" name="ukuran" class="form-control" placeholder="L/XL/XXL"
                                    value="{{ $model->ukuran }}">
                            </div>

                            <div class="form-group">
                                <label>Stok</label>
                                <input type="text" name="stok" class="form-control" placeholder="55"
                                    value="{{ $model->stok }}">
                            </div>

                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control" placeholder="Merah"
                                    value="{{ $model->warna }}">
                            </div>

                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" name="model" class="form-control"
                                    placeholder="Pria, Wainta, Remaja Pria, Remaja Wanita, Anak Pria, Anak Wanita"
                                    value="{{ $model->model }}">
                            </div>

                            <div class="form-group">
                                <label>Bahan</label>
                                <input type="text" name="bahan" class="form-control"
                                    placeholder="Katun / Nilom / Sutra / Stenlis" value="{{ $model->bahan }}">
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" placeholder="50000"
                                    value="{{ $model->harga }}">
                            </div>

                            <div class="form-group">
                                <label>Motif</label>
                                <input type="text" name="motif" class="form-control" placeholder="Sekar Bubrah"
                                    value="{{ $model->motif }}">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="ket" class="form-control"
                                    placeholder="Untuk Ukuran Silahkan Konfirmasi Melalui Telp"
                                    value="{{ $model->ket }}">
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
