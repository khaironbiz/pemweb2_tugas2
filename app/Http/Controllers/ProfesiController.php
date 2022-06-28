<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Support\Str;
use App\Models\Profesi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
            'title'     => 'Daftar Profesi',
            'profesi'   => Profesi::all()->sortBy('nama_profesi'),
        ];
        return view('admin.profesi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama_profesi' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('profesi')
                ->withErrors($validator)
                ->withInput();
        }else {
            $profesi = new Profesi();
            $profesi->nama_profesi = $request->get('nama_profesi');
            $profesi->slug = Str::slug($request->get('nama_profesi'), '-');
            $profesi->created_by = '0';
            $profesi->save();

            if ($profesi) {
                return redirect()->route('profesi')->with(['success' => 'data anda tersimpan']);
            } else {
                return redirect()->route('profesi')->with(['error' => 'data gagal tersimpan']);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        //
        $data = [
            'title'     => 'Daftar Profesi',

            'profesi'   => Profesi::firstWhere('slug', $slug),
        ];
        return view('admin.profesi.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
