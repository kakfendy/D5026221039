
@extends('master2')
@section('konten')
	<h3>Edit Laptop</h3>

	<a href="/laptop"> Kembali</a>

	<br/>
	<br/>

	@foreach($laptop as $p)
	<form action="/laptop/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="kodelaptop" value="{{ $p->kodelaptop }}">

    <div class="form-group">
        <label for="merklaptop" class="col-sm-2 control-label">Merk Laptop</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" required="required" name="merklaptop" value="{{ $p->merklaptop }}">
        </div>
    </div>

    <div class="form-group">
        <label for="stocklaptop" class="col-sm-2 control-label">Stock Laptop</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" required="required" name="stocklaptop" value="{{ $p->stocklaptop }}">
        </div>
    </div>

    <div class="form-group">
        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" required="required" name="tersedia" value="{{ $p->tersedia }}">
        </div>
    </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach


@endsection
