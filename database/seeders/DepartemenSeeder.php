<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departemen = [
            ['kodedepartemen' => '115', 'nama_departemen' => 'HRD'],
            ['kodedepartemen' => '116', 'nama_departemen' => 'IT'],

        ];
        DB::table('departemen')->insert($departemen);
    }
}
