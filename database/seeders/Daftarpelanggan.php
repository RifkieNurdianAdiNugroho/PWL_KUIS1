<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Daftarpelanggan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftarpelanggans')->insert([ //ini nama databse table
            [
                'nama' => 'Sutejo',
                'no_telp' => '081322658'
            ],
            [
                'nama' => 'Sukarni',
                'no_telp' => '081365597'
            ],
            [
                'nama' => 'Dea',
                'no_telp' => '095631458'
            ],
            [
                'nama' => 'Barca',
                'no_telp' => '03168555'
            ],
            [
                'nama' => 'Soleh',
                'no_telp' => '0896645'
            ],
            [
                'nama' => 'Siska',
                'no_telp' => '0956332'
            ],
            [
                'nama' => 'Bulan',
                'no_telp' => '0896654'
            ],
            [
                'nama' => 'Mei',
                'no_telp' => '08136554'
            ],
            [
                'nama' => 'Tika',
                'no_telp' => '021369985'
            ],
            [
                'nama' => 'Rika',
                'no_telp' => '023645558'
            ],
            [
                'nama' => 'Rara',
                'no_telp' => '08566452'
            ],
            [
                'nama' => 'Putri',
                'no_telp' => '02366458'
            ],
            [
                'nama' => 'Cika',
                'no_telp' => '03266982'
            ],
            [
                'nama' => 'Daus',
                'no_telp' => '036445982'
            ],
            [
                'nama' => 'Surya',
                'no_telp' => '023669821'
            ],
            [
                'nama' => 'Dika',
                'no_telp' => '03166982'
            ],
            [
                'nama' => 'Faris',
                'no_telp' => '036998513'
            ],


            //jadi kalo nambah disini sementara tak buat satu dulu nanti tak bikinin yang banyak
        ]);
    }
}
