<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'title'     => 'Dashboard',
            'example'   => Example::all(),
        ];
        return view('admin.layout.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function dashboard (){
        $data   = [
            'title' => 'Home'
        ];
        //
        return view('admin.layout.dashboard', $data);
    }

    public function create()
    {
        //

        $data   = [
            'title'   => 'Tambah data',
        ];
        return view('admin.layout.add', $data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nik' => 'required|size:16',
            'tl' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'username' => 'required|max:50|unique:examples,username',
            'email' => 'required|max:150|unique:examples,email',
            'hp' => 'required|max:15|unique:examples,hp',
        ]);
        if ($validator->fails()) {
            return redirect()->route('example.data.add')
                ->withErrors($validator)
                ->withInput();
        }else {
            $example = new Example();
            $example->nama = $request->get('nama');
            $example->nik = $request->get('nik');
            $example->tl = $request->get('tl');
            $example->jk = $request->get('jk');
            $example->status = $request->get('status');
            $example->username = $request->get('username');
            $example->email = $request->get('email');
            $example->hp = $request->get('hp');
            $example->alamat = $request->get('alamat');

            $example->save();

            if ($example) {
                return redirect()->route('example.data')->with(['success' => 'data anda tersimpan']);
            } else {
                return redirect()->route('example.data')->with(['error' => 'data gagal tersimpan']);
            }
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $data   = [
            'title'   => 'Update data',
            'example' => Example::firstWhere('username', $username),
        ];
        return view('admin.layout.show-data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($username)
    {

        $data   = [
            'title'   => 'Update data',
            'example' => Example::firstWhere('username', $username),
        ];
        return view('admin.layout.edit-data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nik' => 'required|size:16',
            'tl' => 'required',
            'jk' => 'required',
            'status' => 'required',
            'username' => 'required|max:50',
            'email' => 'required|max:150',
            'hp' => 'required|max:15',
        ]);
        if ($validator->fails()) {
            return redirect()->route('example.data.add')
                ->withErrors($validator)
                ->withInput();
        }else {
            $example        = Example::find($id);
            $example->nama  = $request->get('nama');
            $example->nik   = $request->get('nik');
            $example->tl    = $request->get('tl');
            $example->jk    = $request->get('jk');
            $example->status = $request->get('status');
            $example->username = $request->get('username');
            $example->email = $request->get('email');
            $example->hp = $request->get('hp');
            $example->alamat = $request->get('alamat');
            $example->save();

            if ($example) {
                return redirect()->route('example.data')->with(['success' => 'Data sukses disimpan']);
            } else {
                return redirect()->route('example.data')->with(['error' => 'data gagal tersimpan']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $example        = Example::destroy($id);
        return redirect()->route('example.data')->with(['success' => 'Data sukses dihapus']);
    }
}
