<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{

    public function indexnilai()
    {
        // mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();

        // mengirim data nilaikuliah ke view indexnilai
        return view('indexnilai', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambahnilai()
    {
        // memanggil view tambah
        return view('tambahnilai');
    }

    // method untuk insert data ke table nilaikuliah
    public function storenilai(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }
}
