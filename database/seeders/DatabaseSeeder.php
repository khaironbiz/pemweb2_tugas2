<?php

namespace Database\Seeders;

use App\Models\Education_level;
use App\Models\Education_type;
use App\Models\Education_user;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *php artisan db:seed

     * @return void
     */
    public function run()
    {

        $this->call([
            Education_type::class,
            Education_level::class,
            Education_user::class,
            User::class,
        ]);
    }
}
