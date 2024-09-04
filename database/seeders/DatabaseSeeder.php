<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\userPractica;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // User::factory(10)->create();
        userPractica::factory(20)->create();
        
    }
}
