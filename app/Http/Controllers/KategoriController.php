<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kategori
    	//$kategori = DB::table('kategori')->get();
		$kategori= DB::table('kategori')->paginate(10);

    	// mengirim data kategori ke view index
    	return view('indexkategori',['kategori' => $kategori]);


    }

	public function view($id){
        // mengambil data dari table kategori sesuai id
        $kategori = DB::table('kategori')
        ->where('ID', $id)
        ->get();

        return view('viewkategori', ['kategori' => $kategori]);
    }
}
