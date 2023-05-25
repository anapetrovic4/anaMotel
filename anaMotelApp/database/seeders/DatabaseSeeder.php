<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gost;
use App\Models\Iznajmljivanje;
use App\Models\Soba;


//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Gost::factory(20)->create();
        \App\Models\Soba::factory(10)->create();
        \App\Models\Iznajmljivanje::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
