<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = [
            'title'     => "Daftar User",
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
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->password = sha1($request->get('password'));
        $user->foto = $nama_file_baru;
        $user->save();

        if($user){
            return redirect()->route('user')->with(['success'=>'data anda tersimpan']);
        }else{
            return redirect()->route('example.data')->with(['error'=>'data gagal tersimpan']);
        }
    }
    public function show($id){

        $data = [
            'title'     => "Detail User",
            'user'      => User::find($id),
        ];
        return view('admin.user.detail', $data);
    }
    public function edit($id){

    $data = [
        'title'     => "Edit User",
        'user'      => User::find($id),
    ];
    return view('admin.user.edit', $data);
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
