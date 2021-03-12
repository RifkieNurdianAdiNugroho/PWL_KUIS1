<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Daftarsupplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftarsuppliers')->insert([ //ini nama databse table
            [
                'nama' => 'Tejo',
                'no_telp' => '098856325',
                'alamat' => 'kranggan'
            ],
            [
                'nama' => 'tika',
                'no_telp' => '026635982',
                'alamat' => 'sladi'
            ],
            [
                'nama' => 'dika',
                'no_telp' => '023665982',
                'alamat' => 'karangrejo'
            ],
            [
                'nama' => 'sukar',
                'no_telp' => '02265829',
                'alamat' => 'kejayan'
            ],
            [
                'nama' => 'raka',
                'no_telp' => '023365982',
                'alamat' => 'porong'
            ],
            [
                'nama' => 'bilaa',
                'no_telp' => '0885632647',
                'alamat' => 'bangil'
            ],
            [
                'nama' => 'lia',
                'no_telp' => '0866597542',
                'alamat' => 'madura'
            ],
            [
                'nama' => 'Ilham',
                'no_telp' => '088468975',
                'alamat' => 'surabaya'
            ],
            [
                'nama' => 'farhan',
                'no_telp' => '089946725',
                'alamat' => 'malang'
            ],
            [
                'nama' => 'Zulfikar',
                'no_telp' => '088964725',
                'alamat' => 'Sidoarjo'
            ],


            //jadi kalo nambah disini sementara tak buat satu dulu nanti tak bikinin yang banyak
        ]);
    }
}
