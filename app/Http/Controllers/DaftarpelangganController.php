<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarpelangganController extends Controller
{
    public function index()
    {
        //ini ambil data dari tabel nya
        $daftarpelanggan = DB::table('daftarpelanggans')->paginate(5);

        //mengirim data ke view nya nanti
        return view('daftarpelanggans', ['daftarpelanggans' => $daftarpelanggan]);
    }
}
