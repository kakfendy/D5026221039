@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.Kategori.com</a></h2>
    <br />
    <h3>Anda telah memilih Kategori</h3>

    <div>
        @foreach($kategori as $p)
            <h3>dengan Kode: {{$p->ID}}
        @endforeach
    </div>

    </h3>

    <br />
    <a href="/kategori">Kembali</a>

    <br />
    <br />
@endsection

