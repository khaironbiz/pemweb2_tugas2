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
            'title'     => "Login",
            'class'     => 'Auth',
            'sub_class' => 'login',
            'navbar'    => 'login',
        ];
//        return view('auth.login', $data);
        return view('landing.auth.login', $data);
    }
    public function forgot()
    {
        $data = [
            'title'     => "Forgot Password",
            'class'     => 'Auth',
            'sub_class' => 'forgot',
            'navbar'    => 'login',
        ];
        return view('landing.auth.forgot', $data);
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
            return redirect()->route('login')->with('error', 'Login failed!! please check again')->withInput();
        }

    }

    public function registration(){

        $data = [
            'title'     => "Registrasi Anggota",
            'class'     => 'User',
            'sub_class' => 'registration',
            'navbar'    => 'login',

        ];
//        return view('auth.registration', $data);
        return view('landing.auth.registration', $data);
    }
    public function register(Request $request){
        //
        $validator = Validator::make($request->all(), [
            'nama_depan'    => 'required',
            'nama_belakang' => 'required',
            'email'         => 'required|email:rfc,dns|unique:users,email',
            'phone_cell'    => 'required|unique:users,phone_cell',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }
        try{
            $user = new User();
            $user->nama_depan       = $request->nama_depan;
            $user->nama_belakang    = $request->nama_belakang;
            $user->gelar_depan      = $request->gelar_depan;
            $user->gelar_belakang   = $request->gelar_belakang;
            $user->nama_lengkap     = $request->gelar_depan." ".$request->nama_depan." ".$request->nama_belakang." ".$request->gelar_belakang;
            $user->username         = uniqid();
            $user->tgl_lahir        = $request->tgl_lahir;
            $user->jk               = $request->jk;
            $user->email            = $request->email;
            $user->phone_cell       = $request->phone_cell;
            $user->password         = hash::make('password');
            $user->save();
            return redirect()->back()
                ->with('success', 'Created successfully!');

        }catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!')->withInput();
        }


//        if($user){
//            return redirect()->route('login')->with(['success'=>'Data pendaftaran anda tersimpan']);
//        }else{
//            return redirect()->route('registration')->with(['error'=>'data gagal tersimpan']);
//        }
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
