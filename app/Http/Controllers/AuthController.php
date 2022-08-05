<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Example;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{

    public function index()
    {


        $data = [
            'title'     => 'Login',
        ];
        return view('auth.login', $data);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email:dns'],
            'password'  => ['required', 'min:6'],
        ]);
        if(Auth::attempt($credentials)){
            if(Auth::user()->id == 1){
                return redirect()->route('root')->with(['success' => 'Selamat anda berhasil login']);
            }else{
                return redirect()->route('profile')->with(['success' => 'Selamat anda berhasil login']);
            }

        }else{
            return redirect()->route('login')->with('status', 'Login failed!! please check again')->withInput();
        }

    }

    public function registration(){

    $data = [
        'title'     => "Profile Karyawan",
        'class'     => 'User',
        'sub_class' => 'Show',

    ];
    return view('auth.registration', $data);
}
    public function register(Request $request){
        //
        $validated = $request->validate([
            'name'          => 'required',
            'username'      => 'required|alpha_num|unique:users,username',
            'email'         => 'required|email:rfc,dns|unique:users,email',
            'phone_cell'    => 'required|unique:users,phone_cell',
            'password'      => ['required', 'confirmed', Password::min(8)],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->username = Str::slug($request->username, '-');
        $user->email = $request->email;
        $user->phone_cell = $request->phone_cell;
        $user->password = hash::make($request->password);
        $user->save();

        if($user){
            return redirect()->route('login')->with(['success'=>'Data pendaftaran anda tersimpan']);
        }else{
            return redirect()->route('registration')->with(['error'=>'data gagal tersimpan']);
        }
    }


    public function destroy(Request $request, $id)
    {
        $example        = Example::destroy($id);
        return redirect()->route('example.data')->with(['success' => 'Data sukses dihapus']);
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('root')->with(['success' => 'Silahkan login kembali']);
    }
}
