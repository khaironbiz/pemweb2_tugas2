<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Example;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index()
    {

        $data = [
            'title'     => 'Login',
        ];
        return view('layouts.login', $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email:dns'],
            'password'  => ['required', 'min:6'],
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('example.data')->with(['success' => 'Selamat anda berhasil login']);
        }else{
            return redirect()->route('login')->with('status', 'Login Failed please check again');
        }

    }
    public function settings(){
        $username = Auth::user()->username;
        $data = [
            'title'     => "Profile Karyawan",
            'class'     => 'User',
            'sub_class' => 'Show',
            'user'      => User::firstWhere('username', $username),
        ];
        return view('admin.user.profile', $data);
    }

    public function destroy(Request $request, $id)
    {
        $example        = Example::destroy($id);
        return redirect()->route('example.data')->with(['success' => 'Data sukses dihapus']);
    }
}
