<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UmkmModel;
use Illuminate\Http\Request;

class UmkmController extends Controller
{

    ///helper hitung jarak
    function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2, $unit = 'Km')
    {
        $theta = $longitude1 - $longitude2;
        $distance = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2)))  + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $distance = acos($distance);
        $distance = rad2deg($distance);
        $distance = $distance * 60 * 1.1515;
        switch ($unit) {
            case 'Mi':
                break;
            case 'Km':
                $distance = $distance * 1.609344;
        }
        return (round($distance, 2));
    }

    public function umkm()
    {
        $data = UmkmModel::get();

        $response = array(
            'status' => 'S',
            'message' => 'Berhasil mendapatkan data',
            'data' => $data
        );

        return response()->json(
            $response
        );
    }

    public function umkm_products($id)
    {
        $data = UmkmModel::with('products')->where('id_umkm', $id)->get();

        $response = array(
            'status' => 'S',
            'message' => 'Berhasil mendapatkan data',
            'data' => $data
        );

        return response()->json(
            $response
        );
    }

    public function detail_umkm($id)
    {
        $data = UmkmModel::where('id_umkm', $id)->first();

        $response = array(
            'status' => 'S',
            'message' => 'Berhasil mendapatkan data',
            'data' => $data
        );

        return response()->json(
            $response
        );
    }

    public function umkm_terdekat(Request $request)
    {
        $data = UmkmModel::get();
        // dd($data);
        $response = [];
        foreach ($data as $r) {

            $jarak = $this->getDistanceBetweenPointsNew(floatval($r->latitude), floatval($r->longitude), floatval($request->lat), floatval($request->long));

            if ($jarak <= 5) {
                $response[] = array(
                    'nama' => $r->nama,
                    'jarak' => $jarak,
                    'gambar' => $r->url_file,
                    'alamat' => $r->alamat,
                );
            }
        }

        $result = array(
            'status' => 'S',
            'message' => 'Berhasil mendapatkan data',
            'data' => $response,
        );

        return response()->json(
            $result
        );
    }
}
