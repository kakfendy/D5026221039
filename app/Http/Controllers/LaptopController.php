<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class laptopController extends Controller
{
    public function index()
    {
    	// mengambil data dari table laptop
    	//$laptop = DB::table('laptop')->get();
		$laptop= DB::table('laptop')->paginate(10);

    	// mengirim data laptop ke view index
    	return view('indexlaptop',['laptop' => $laptop]);


    }
// method untuk menampilkan view form tambah laptop
public function tambah()
{

	// memanggil view tambah
	return view('tambahlaptop');

}
// method untuk insert data ke table laptop
public function store(Request $request)
	{
		// insert data ke table laptop
		DB::table('laptop')->insert([
			'merklaptop' => $request->merklaptop,
			'stocklaptop' => $request->stocklaptop,
			'tersedia' => ($request->stocklaptop> 0) ? 'Y' : 'N'
		]);
		// alihkan halaman ke halaman laptop
		return redirect('/laptop');

	}
// method untuk edit data laptop
public function edit($id)
{
	// mengambil data laptop berdasarkan id yang dipilih
	$laptop = DB::table('laptop')->where('kodelaptop',$id)->get();
	// passing data laptop yang didapat ke view edit.blade.php
	return view('editlaptop',['laptop' => $laptop]);

}
// update data laptop
public function update(Request $request)
{
    // update data laptop
    DB::table('laptop')->where('kodelaptop',$request->id)->update([
        'merklaptop' => $request->merklaptop,
        'stocklaptop' => $request->stocklaptop,
        'tersedia' => ($request->stocklaptop> 0) ? 'Y' : 'N'
    ]);
    // alihkan halaman ke halaman laptop
    return redirect('/laptop');
}
// method untuk hapus data laptop
public function hapus($id)
{
	// menghapus data laptop berdasarkan id yang dipilih
	DB::table('laptop')->where('kodelaptop',$id)->delete();

	// alihkan halaman ke halaman laptop
	return redirect('/laptop');
}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table laptop sesuai pencarian data
		$laptop = DB::table('laptop')
		->where('merklaptop','like',"%".$cari."%")
		->paginate(10);

    		// mengirim data laptop ke view index
		return view('indexlaptop',['laptop' => $laptop]);

	}
	public function view($id){
        // mengambil data dari table laptop sesuai id
        $laptop = DB::table('laptop')
        ->where('kodelaptop', $id)
        ->get();

        return view('viewlaptop', ['laptop' => $laptop]);
    }
}
