<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Daftarbarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftarbarangs')->insert([ //ini nama databse table
            [
                'nama_barang' => 'Pensil',
                'jumlah_barang' => 20
            ],
            [
                'nama_barang' => 'Pulpen',
                'jumlah_barang' => 19
            ],
            [
                'nama_barang' => 'Penggaris',
                'jumlah_barang' => 12
            ],
            [
                'nama_barang' => 'Buku',
                'jumlah_barang' => 15
            ],
            [
                'nama_barang' => 'Rautan',
                'jumlah_barang' => 13
            ],
            [
                'nama_barang' => 'Lem',
                'jumlah_barang' => 12
            ],
            [
                'nama_barang' => 'Penghapus',
                'jumlah_barang' => 14
            ],
            [
                'nama_barang' => 'Spidol',
                'jumlah_barang' => 16
            ],
            [
                'nama_barang' => 'Krayon',
                'jumlah_barang' => 12
            ],
            [
                'nama_barang' => 'Nota',
                'jumlah_barang' => 14
            ],
            [
                'nama_barang' => 'Plastik Buku',
                'jumlah_barang' => 16
            ],
            [
                'nama_barang' => 'Buku Gambar',
                'jumlah_barang' => 18
            ],

            //jadi kalo nambah disini sementara tak buat satu dulu nanti tak bikinin yang banyak
        ]);
    }
}
