@extends ('master2')
@section('title', 'Database Pegawai')
@section ('judul_halaman')

	<h2>www.Kategori.com</h2>
	<h3>Data Kategori</h3>


	<br/>
	<br/>
@endsection
@section('konten')

@foreach ($kategori as $p)
<div>

    <form action="/kategori/view/{{ $p->ID }}">
        <p>Pilih Kategori:</p>

        <div>
            <select class="form-control" name="combo1" id="combo1">
            <option value="$p->ID"> {{$p->Nama}} </option>
        </div>

        <br/>
        <br/>

        <input type="submit" value="Kirim" class="btn btn-primary">

        </select>
    </form>
</div>

@endforeach
@endsection
