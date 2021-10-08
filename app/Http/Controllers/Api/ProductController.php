<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function detail_produk($id)
    {
        $data = ProductModel::where('id_product', $id)->first();

        $response = array(
            'status' => 'S',
            'message' => 'Berhasil mendapatkan data',
            'data' => $data,
        );

        return response()->json(
            $response
        );
    }
}
