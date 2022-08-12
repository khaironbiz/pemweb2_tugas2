<?php

namespace App\Http\Controllers;

use App\Models\Education_level;
use App\Models\Education_user;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEducation_userRequest;
use App\Http\Requests\UpdateEducation_userRequest;
//use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EducationUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //riwayat pendidikan user

        $pendidikan = Education_user::where('user_id', Auth::id());
        $data = [
            'title'     => "Profile Karyawan",
            'class'     => 'User',
            'sub_class' => 'profile',
            'navbar'    => 'profile',
            'pendidikan'=> $pendidikan,
        ];
        return view('landing.user.pendidikan', $data);
    }
    public function create()
    {
        $pendidikan = DB::table('education_levels')
            ->join('education_types', 'education_levels.education_type_id', '=', 'education_types.id')
            ->where('education_types.sifat', '!=', '2')
            ->select('education_levels.*')->get();
        $data = [
            'title'     => "Tambah Pendidikan",
            'class'     => 'User',
            'sub_class' => 'profile',
            'navbar'    => 'profile',
            'pendidikan'=> $pendidikan,
            'user'      => Auth::user()

        ];
        return view('landing.user.add-pendidikan', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEducation_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/upload/files/ijazah/';
        // upload file
        $nama_file_baru = uniqid().$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file_baru);
        $data = new Education_user();
        $data->user_id              = Auth::user()->id;
        $data->program_studi        = $request->program_studi;
        $data->education_level_id   = $request->id;
        $data->institusi            = $request->institusi;
        $data->tahun_lulus          = $request->tahun_lulus;
        $data->nomor_ijazah         = $request->nomor_ijazah;
        $data->ttd_ijazah           = $request->ttd_ijazah;
        $data->pendidikan_terahir   = $request->pendidikan_terahir;
        $data->file_ijazah          = $nama_file_baru;
        $data->slug                 = md5(uniqid());
        $tambah_data = $data->save();
        if($tambah_data){
            return redirect()->route('education.user.create')->with(['success'=>'Data berhasil disimpan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education_user  $education_user
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $education_user = Education_user::where('slug', $slug)->first();
        $pendidikan     = DB::table('education_levels')
            ->join('education_types', 'education_levels.education_type_id', '=', 'education_types.id')
            ->where('education_types.sifat', '!=', '2')
            ->select('education_levels.*')->get();
        $data = [
            'title'     => "Tambah Pendidikan",
            'class'     => 'User',
            'sub_class' => 'profile',
            'navbar'    => 'profile',
            'education' => $education_user,
            'pendidikan'=> $pendidikan,
            'user'      => Auth::user()

        ];
        return view('landing.user.show-pendidikan', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education_user  $education_user
     * @return \Illuminate\Http\Response
     */
    public function edit(Education_user $education_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEducation_userRequest  $request
     * @param  \App\Models\Education_user  $education_user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEducation_userRequest $request, Education_user $education_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education_user  $education_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education_user $education_user)
    {
        //
    }
}
