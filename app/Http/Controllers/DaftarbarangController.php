<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarbarangController extends Controller
{
    public function index()
    {
        //ini ambil data dari tabel nya
        $daftarbarang = DB::table('daftarbarangs')->paginate(5);

        //mengirim data ke view nya nanti
        return view('daftarbarangs', ['daftarbarangs' => $daftarbarang]);
    }
}
