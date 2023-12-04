@extends('master2')
@section('konten')

<!DOCTYPE html>
<html>
<head>
    <title>Nilai Kuliah DSI</title>
</head>
<body>

    <h2>www.its.ac.id</h2> <!-- Corrected closing tag -->
    <h3>Data Nilai Mahasiswa</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br/>
    <br/>

    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        NRP <input type="text" name="NRP"> <br/>
        Nilai Angka <input type="text" name="NilaiAngka"> <br/>
        SKS <input type="number" name="SKS"> <br/>
        <input type="submit" value="Simpan Data">
    </form>

</body>
</html>
@endsection
