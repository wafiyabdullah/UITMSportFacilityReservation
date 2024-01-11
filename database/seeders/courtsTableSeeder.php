<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class courtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courts')->insert([
            ['court_no' => 'Court 1'],
            ['court_no' => 'Court 2'],
            ['court_no' => 'Court 3'],
            ['court_no' => 'Court 4'],
            ['court_no' => 'Court 5'],
            ['court_no' => 'Court 6'],
        ]);
    }
}
