<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Example;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
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
