<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'id'=> "131313",
            'npm'=>'2201170036',
            'nama'=>'Vino Jultriadi Putra',
            'alamat'=>'Pessel',
            'no_hp'=> '0857598098',
            ]);  //
    }
}