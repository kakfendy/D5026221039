@extends ('master2')
@section('title', 'Database laptop')
@section ('judul_halaman')

	<h2>www.laptop.com</h2>
	<h3>Data Laptop</h3>

	<a href="/laptop/tambah"> + Tambah laptop Baru</a>

	<br/>
	<br/>
 @endsection
 @section('konten')
 <p>Cari Data laptop :</p>
	<form action="/laptop/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari nama " value="{{ old('cari') }}">
		<br/>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br/>
	<table class="table table-stripped table-hover">
		<tr>
			<th>Kode laptop</th>
			<th>Merk laptop</th>
			<th>Stok</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($laptop as $p)
		<tr>
            <td>{{ $p->kodelaptop }}</td>
			<td>{{ $p->merklaptop }}</td>
			<td>{{ $p->stocklaptop }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a class="btn btn-success" href="/laptop/view/{{ $p->kodelaptop }}">Lihat</a> |
				<a class="btn btn-warning" href="/laptop/edit/{{ $p->kodelaptop }}">Edit</a> |
				<a class="btn btn-danger" href="/laptop/hapus/{{ $p->kodelaptop }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $laptop->links()}}
	@endsection


