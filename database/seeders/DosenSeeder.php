<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Dosenseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('dosens')->insert([
        'nidn'=> "131313",
        'nama'=>'Alwi',
        'alamat'=>'Balsel',
        'no_hp'=> '082388271218',
       ]);
    }
}