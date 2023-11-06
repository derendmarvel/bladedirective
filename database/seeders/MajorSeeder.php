<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            'major_name' => "IMT",
            'faculty' => "SIFT"
        ]);
        DB::table('majors')->insert([
            'major_name' => "VCD",
            'faculty' => "SCI"
        ]);
        DB::table('majors')->insert([
            'major_name' => "IBM-RC",
            'faculty' => "SBM"
        ]);
    }
}
