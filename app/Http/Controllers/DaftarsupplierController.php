<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarsupplierController extends Controller
{
    public function index()
    {
        //ini ambil data dari tabel nya
        $daftarsupplier = DB::table('daftarsuppliers')->paginate(5);

        //mengirim data ke view nya nanti
        return view('daftarsuppliers', ['daftarsuppliers' => $daftarsupplier]);
    }
}
