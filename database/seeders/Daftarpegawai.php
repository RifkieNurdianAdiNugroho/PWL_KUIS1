<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Daftarpegawai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftarpegawais')->insert([ //ini nama databse table
            [
                'nama' => 'dea',
                'alamat' => 'Sukerjo',
                'no_telp' => '023644859'
            ],
            [
                'nama' => 'bisma',
                'alamat' => 'tembok',
                'no_telp' => '085633264'
            ],
            [
                'nama' => 'sela',
                'alamat' => 'panggung',
                'no_telp' => '086652349'
            ],
            [
                'nama' => 'dimas',
                'alamat' => 'tembok',
                'no_telp' => '09665236'
            ],
            [
                'nama' => 'Renda',
                'alamat' => 'pleret',
                'no_telp' => '09665326'
            ],
            [
                'nama' => 'bagus',
                'alamat' => 'purut',
                'no_telp' => '0236652175'
            ],
            [
                'nama' => 'ryan',
                'alamat' => 'antara',
                'no_telp' => '023665982'
            ],
            [
                'nama' => 'dinda',
                'alamat' => 'bangilan',
                'no_telp' => '023665982'
            ],
            [
                'nama' => 'Nadya',
                'alamat' => 'aspol',
                'no_telp' => '036998521'
            ],


            //jadi kalo nambah disini sementara tak buat satu dulu nanti tak bikinin yang banyak
        ]);
    }
}
