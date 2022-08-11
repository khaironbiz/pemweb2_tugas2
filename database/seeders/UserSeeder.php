<?php

namespace Database\Seeders;

use Faker\Core\Number;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()
//            ->count(50)
//            ->hasPosts(1)
//            ->create();
        DB::table('users')->insert([
            'nama_depan'        => Str::random(10),
            'nama_belakang'     => Str::random(10).'@gmail.com',
            'gelar_depan'       => Str::random(10),
            'gelar_belakang'    => Str::random(10),
            'password'          => Hash::make('password'),
        ]);

    }
}
