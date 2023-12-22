<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliahs')->insert([
            'kode_mk' => "232323",
            'nama_mk' => 'Matematika Diskrit',
            'sks' => '3',
            'semester' => 'ganjil',
        ]);
    }
}