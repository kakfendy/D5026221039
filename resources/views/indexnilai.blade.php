@extends ('master2')
@section('title', 'Database Pegawai')
@section ('judul_halaman')

	<h2>www.its.ac.id</h2>
	<h3>Data Nilai Mahasiswa</h3>

	<a href="/nilaikuliah/tambah"> + Tambah Nilai Kuliah Baru</a>

	<br/>
	<br/>
 @endsection
 @section('konten')
    <br/>
	<table class="table table-stripped table-hover">
		<tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
			<td>
                @if( $p->NilaiAngka <= 40) D
                @elseif ($p->NilaiAngka <= 60) C
                @elseif ($p->NilaiAngka <= 80) B
                @else A
                @endif
            </td>
            <td>
                {{ $p->NilaiAngka  * $p->SKS}}
            </td>
		</tr>
		@endforeach
	</table>
    @endsection


