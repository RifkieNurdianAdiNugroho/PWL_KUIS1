<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarpegawaiController extends Controller
{
    public function index()
    {
        //ini ambil data dari tabel nya
        $daftarpegawai = DB::table('daftarpegawais')->paginate(5);

        //mengirim data ke view nya nanti
        return view('daftarpegawais', ['daftarpegawais' => $daftarpegawai]);
    }
}
