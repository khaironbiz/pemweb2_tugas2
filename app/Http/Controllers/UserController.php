<?php

namespace App\Http\Controllers;

use App\Models\Example;
use App\Models\Profesi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageServiceProvider;

class UserController extends Controller
{
    public function index(){
        $data = [
            'title'     => "Data Karyawan",
            'class'     => 'User',
            'sub_class' => 'Index',
            'user'      => User::all()
        ];
        return view('admin.user.index', $data);
    }
    public function store(Request $request){
        //
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|alpha_num',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            'file' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/upload/images/user/';
        // upload file
        $nama_file_baru = uniqid().$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file_baru);

        $user = new User();
        $user->name = $request->name;
        $user->username = Str::slug($request->username, '-');
        $user->email = $request->email;
        $user->password = hash::make($request->password);

        $user->foto = $nama_file_baru;
        $user->save();

        if($user){
            return redirect()->route('user')->with(['success'=>'data anda tersimpan']);
        }else{
            return redirect()->route('example.data')->with(['error'=>'data gagal tersimpan']);
        }
    }
    public function show($username){

        $data = [
            'title'     => "Detail User",
            'class'     => 'User',
            'sub_class' => 'Show',
            'user'      => User::firstWhere('username', $username),
        ];
        return view('admin.user.detail', $data);
    }
    public function edit($username){

    $data = [
        'title'     => "Edit User",
        'class'     => 'User',
        'sub_class' => 'Edit',
        'user'      => User::firstWhere('username', $username),
    ];
    return view('admin.user.edit', $data);
    }
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'nama'      => 'required',
            'username'  => 'required|alpha_num',
            'email'     => 'required|email:rfc,dns',
        ]);
        if ($validator->fails()) {
            return redirect()->route('profesi')
                ->withErrors($validator)
                ->withInput();
        }else {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $data = User::find($id);
            //ambil data dari form
            $data->name     = $request->nama;
            $data->username = Str::slug($request->username, '-');
            $data->email    = $request->email;
            //jika ada gambar yang diupload
            if($file !=''){
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'assets/upload/images/user/';
                $file_lama     = $tujuan_upload.$data->foto;
                unlink($file_lama);
                // upload file
                $nama_file_baru = uniqid().$file->getClientOriginalName();
                $file->move($tujuan_upload,$nama_file_baru);
                $data->foto = $nama_file_baru;
                $data->save();
            }else{
                //jika tidak ada gambar
                $data->save();
            }
            if ($data) {
                return redirect()->route('user')->with(['success' => 'data anda tersimpan']);
            } else {
                return redirect()->route('user')->with(['error' => 'data gagal tersimpan']);
            }
        }
    }
    public function delete($id){
        $user       = User::find($id);
        $file_path  = "assets/upload/images/user/";
        $file       = $file_path.$user->foto;
        unlink($file);
        User::destroy($id);
        return redirect('/admin/user')->with('success', 'User has been deleted');

    }
}
