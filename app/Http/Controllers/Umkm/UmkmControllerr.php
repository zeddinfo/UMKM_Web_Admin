<?php

namespace App\Http\Controllers\Umkm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UmkmModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Validator;

class UmkmControllerr extends Controller
{
    public function index()
    {
        $model = UmkmModel::all();
        return view('umkm.umkm', compact('model'));
    }

    public function create(Request $request)
    {
        $model = new UmkmModel();

        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model = new UmkmModel();
                $model->nama = $request->nama;
                if ($request->file) {
                    $path = $request->file;
                    $file = $path;
                    $fileName = str_replace(' ', '_', $file->getClientOriginalName());
                    $fileName = 'Document_' . date('YmdHis') . '_' . $fileName;
                    // $save = $file->storeAs('public/file/', $fileName);
                    $save = Storage::putFileAs('/gambar', $file, $fileName);
                    $pathGbr = URL::to('/') . '/public/uploads/gambar/' . $fileName;

                    $model->file = $fileName;
                } else {
                    $model->file = 'Tidak ada File';
                }
                $model->url_file = $request->file ? $pathGbr : $model->url_file;
                $model->alamat = $request->alamat;
                $model->telp = $request->telp;
                $model->pemilik = $request->pemilik;
                $model->website = $request->website;
                $model->jam_operasional = $request->jam_operasional;
                $model->keterangan = $request->keterangan;
                $model->longitude = $request->longitude;
                $model->laltiude = $request->laltiude;

                $model->save();
                DB::commit();

                return redirect('umkm');
            } catch (\Exception $e) {
                DB::rollback();
                return $e;
            }
        }

        return view('umkm.tambah');
    }

    public function update(Request $request, $id)
    {
        $model = UmkmModel::query()->where('id_umkm', $id)->first();
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model->nama = $request->nama;
                $model->alamat = $request->alamat;
                $model->telp = $request->telp;
                $model->pemilik = $request->pemilik;
                $model->website = $request->website;
                $model->jam_operasional = $request->jam_operasional;
                $model->keterangan = $request->keterangan;
                $model->longitude = $request->longitude;
                $model->laltiude = $request->laltiude;

                $model->save();

                DB::commit();

                return redirect('umkm/')->with(['success' => 'Data berhasil di update']);
            } catch (\Exception $e) {
                DB::rollBack();
                return $e;
            }
        }
        return view('umkm.update', compact('model'));
    }

    public function delete($id)
    {
        DB::table('master_umkm')->where('id_umkm', $id)->delete();
        return redirect('umkm');
    }
}
