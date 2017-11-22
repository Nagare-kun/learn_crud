<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index ()
    {
    	$user = UsersModel::all();
    	return view('welcome' , compact('user'));
    }

    public function tambah ()
    {
    	return view('tambah' , compact('user'));
    }

    public function post ()
    {

    	$user = new UsersModel;
    	$user->username = request()->username;
    	$user->password = request()->password;
    	$user->save();

    	return redirect('/');
    }

    public function ubah ($id)
    {
        $user = UsersModel::find($id);
        return view('edit' , compact('user'));
    }

    public function update ($id)
    {
        
        $user = UsersModel::find($id)->update([
                'username' => request()->username,
                'password' => request()->password
            ]);
        return redirect('/');
    }

    public function hapus ($id)
    {
        $user = UsersModel::find($id)->delete();
        return redirect('/');
    }
}
