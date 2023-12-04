@extends ('master2')
@section('title', 'Database Pegawai')
@section ('judul_halaman')

<!DOCTYPE html>
<html>
<head>
    <title>Nilai Kuliah DSI</title>
</head>
<body>

    <h2>www.its.ac.id</h2> <!-- Corrected closing tag -->
    <h3>Data Nilai Mahasiswa</h3>

    <a href="/nilaikuliah/tambah"> + Tambah Nilai Kuliah Baru</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
        </tr>
        @foreach($nilaikuliah as $nk)
        <tr>
            <td>{{ $nk->NRP }}</td>
            <td>{{ $nk->NilaiAngka }}</td>
            <td>{{ $nk->SKS }}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
