<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        $umkm = DB::table('master_umkm')->count();
        $product = DB::table('master_product')->count();
        return view('dashboard.dashboard', compact('umkm', 'product'));
    }
}
