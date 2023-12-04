@extends("master2")
@section('judulhalaman','Nilai Kuliah')

@section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Nilai Kuliah</h3>

	<a class="btn btn-info" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>
    <p></p>

	<table class="table table-striped table-hover">
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
			<td>
                <a class="btn btn-success" href="/pegawai/view/{{ $p->ID }}">Lihat</a> |
				{{-- <a class="btn btn-warning" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a> |
				<a class="btn btn-danger" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a> --}}
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
