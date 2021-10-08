<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\UmkmModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    public function index()
    {
        $model = DB::select('select * from master_product a join master_umkm b on a.umkm_id = b.id_umkm ');
        return view('product.product', compact('model'));
    }

    public function create(Request $request)
    {
        $umkm = UmkmModel::all();
        $model = new ProductModel();

        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model = new ProductModel();
                $model->umkm_id = $request->umkm_id;
                if ($request->file) {
                    $path = $request->file;
                    $file = $path;
                    $fileName = str_replace(' ', '_', $file->getClientOriginalName());
                    $fileName = 'Document_' . date('YmdHis') . '_' . $fileName;
                    $save = $file->storeAs('public/file/', $fileName);
                    $pathGbr = URL::to('/') . '/storage/file/' . $fileName;

                    $model->file = $fileName;
                } else {
                    $model->file = 'Tidak ada File';
                }
                $model->url_file = $request->file ? $pathGbr : $model->url_file;
                $model->ukuran = $request->ukuran;
                $model->nama_product = $request->nama_product;
                $model->stok = $request->stok;
                $model->warna = $request->warna;
                $model->model = $request->model;
                $model->bahan = $request->bahan;
                $model->harga = $request->harga;
                $model->motif = $request->motif;
                $model->ket = $request->ket;

                $model->save();
                DB::commit();

                return redirect('product');
            } catch (\Exception $e) {
                DB::rollback();
                return $e;
            }
        }

        return view('product.tambah', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $model = ProductModel::with('umkm')->where('id_product', $id)->first();
        // dd($model);
        $umkm = UmkmModel::get();


        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model->umkm_id = $request->umkm_id;
                $model->ukuran = $request->ukuran;
                $model->nama_product = $request->nama_product;
                $model->stok = $request->stok;
                $model->warna = $request->warna;
                $model->model = $request->model;
                $model->bahan = $request->bahan;
                $model->harga = $request->harga;
                $model->motif = $request->motif;
                $model->ket = $request->ket;

                $model->save();

                DB::commit();

                return redirect('product/')->with(['success' => 'Data berhasil di update']);
            } catch (\Exception $e) {
                DB::rollBack();
                return $e;
            }
        }
        return view('product.update', compact('model', 'umkm'));
    }

    public function delete($id)
    {
        DB::table('master_product')->where('id_product', $id)->delete();
        return redirect('product');
    }
}
