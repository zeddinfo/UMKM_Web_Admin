<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $model = UserModel::all();
        return view('user.user', compact('model'));
    }

    public function create(Request $request)
    {
        $model = new UserModel();

        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model = new UserModel();
                $model->username = $request->username;
                $model->password = md5($request->password);
                $model->role_id = 1;
                $model->is_active = 0;

                $model->save();
                DB::commit();

                return redirect('user');
            } catch (\Exception $e) {
                DB::rollback();
                return $e;
            }
        }

        return view('user.tambah');
    }

    public function update(Request $request, $id)
    {
        $model = UserModel::query()->where('id_u', $id)->first();
        if ($request->isMethod('post')) {
            DB::beginTransaction();
            try {
                $model->username = $request->username;

                $model->save();

                DB::commit();

                return redirect('user/')->with(['success' => 'Data berhasil di update']);
            } catch (\Exception $e) {
                DB::rollBack();
                return $e;
            }
        }
        return view('user.update', compact('model'));
    }

    public function delete($id)
    {
        DB::table('user')->where('id_u', $id)->delete();
        return redirect('user');
    }
}
