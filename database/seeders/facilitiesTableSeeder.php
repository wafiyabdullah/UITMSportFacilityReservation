<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class facilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facilities = [
            ['name' => 'Futsal'],
            ['name' => 'Badminton'],
            ['name' => 'Basketball'],
            
        ];

        // Insert data into the facilities table
        DB::table('facilities')->insert($facilities);
    }
    
}
