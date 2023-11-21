<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    //
    public function index(){
        $a = 3;
        $b = 7;
        $c = $b *$a;
        return "Hasil perkalian = " . (string)$c . "</h1>";
    }


    public function showBlog(){
        $nama = "Budi" ;
        $alamat = "Surabaya" ;
        $hoby = "Olahraga" ;
        $umur = 19 ;
        return view("validasi", ['nama' => $nama, 'alamat' => $alamat, 'umur' => umur])
    }
}
