<?php

namespace Database\Seeders;

use App\Models\Education_level;
use App\Models\Education_type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            Education_type::class,
            Education_level::class,
            User::class,
        ]);
    }
}
