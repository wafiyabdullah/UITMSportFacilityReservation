<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class facility_courts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('facility_courts')->insert([
            ['facility_id' => '1', 'court_id' => '1'],
            ['facility_id' => '1', 'court_id' => '2'],
            ['facility_id' => '1', 'court_id' => '3'],
            ['facility_id' => '1', 'court_id' => '4'],
            ['facility_id' => '1', 'court_id' => '5'],
            ['facility_id' => '1', 'court_id' => '6'],
            ['facility_id' => '2', 'court_id' => '1'],
            ['facility_id' => '2', 'court_id' => '2'],
            ['facility_id' => '2', 'court_id' => '3'],
            ['facility_id' => '2', 'court_id' => '4'],
            ['facility_id' => '2', 'court_id' => '5'],
            ['facility_id' => '2', 'court_id' => '6'],
            ['facility_id' => '3', 'court_id' => '1'],
            ['facility_id' => '3', 'court_id' => '2'],
            ['facility_id' => '3', 'court_id' => '3'],
            ['facility_id' => '3', 'court_id' => '4'],
            ['facility_id' => '3', 'court_id' => '5'],
            ['facility_id' => '3', 'court_id' => '6'],
        ]);
    }
}
