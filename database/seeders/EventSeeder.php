<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'id_penyelenggara'  => 1,
                'judul'             => 'Pelatihan BNLS',
                'ringkasan'         => 'Kegawat daruratan neurologi merupakan masalah akut yang dapat mengancam jiwa manusia',
                'isi'               => 'Kegawat daruratan neurologi merupakan masalah akut yang dapat mengancam jiwa manusia',
                'date_publish'      => '2022-08-01',
                'headline'          => 'Kegawat daruratan neurologi merupakan masalah akut yang dapat mengancam jiwa manusia, tatalaksana pada fase akut ini merupakan tolak ukur keberhasilan tatalaksana selanjurnya',
                'banner'            => 'banner1.jpg',
                'created_by'        => 1,
                'status'            => 0,
                'slug'              => md5(uniqid()),
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ],
        ];
        \DB::table('events')->insert($data);
    }
}
