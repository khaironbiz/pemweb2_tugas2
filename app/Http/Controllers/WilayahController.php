<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class WilayahController extends Controller
{

    public function index()
    {
        //
    }


    public function provinsi()
    {
        $provinsi = Provinsi::all();
        $data = [
            'title'     => "Data Provinsi",
            'class'     => 'wilayah',
            'sub_class' => 'provinsi',
            'navbar'    => 'education',
            'provinsi'  => $provinsi,
        ];
        return view('landing.wilayah.provinsi', $data);
    }
    public function kota($code)
    {
        $kota = Kota::where('province_code', $code)->get();;
        $data = [
            'title'     => "Data Provinsi",
            'class'     => 'wilayah',
            'sub_class' => 'provinsi',
            'navbar'    => 'education',
            'kota'      => $kota,
        ];
        return view('landing.wilayah.kota', $data);
    }
    public function kecamatan($kode_kota)
    {
        $kecamatan = Kecamatan::where('city_code', $kode_kota)->get();;
        $data = [
            'title'     => "Education Type",
            'class'     => 'Education',
            'sub_class' => 'level',
            'navbar'    => 'education',
            'kecamatan' => $kecamatan,
        ];
        return view('landing.wilayah.kecamatan', $data);
    }
    public function kelurahan($kode_kecamatan)
    {
        $kelurahan = Kelurahan::where('city_code', $kode_kecamatan)->get();;
        $data = [
            'title'     => "Education Type",
            'class'     => 'Education',
            'sub_class' => 'level',
            'navbar'    => 'education',
            'kelurahan' => $kelurahan,
        ];
        return view('landing.wilayah.kelurahan', $data);
    }


}
