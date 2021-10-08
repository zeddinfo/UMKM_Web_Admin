<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = DB::select("select * from user a where a.is_active = 0 and a.username = '$request->username' ");
            if ($data && $data[0]->password == md5($request->password)) {
                Session::put('id_u', $data[0]->id_u);
                Session::put('username', $data[0]->username);
                Session::put('login', TRUE);
                return redirect('/dashboard');
            }
            return redirect('/')->with(['error' => 'Username / Password Salah']);
        }
    }

    public function logout()
    {
        Session::flush();
        // toastr()->success('Logout Berhasil');
        return redirect('/');
    }
}
