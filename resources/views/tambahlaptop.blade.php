@extends('master2')
@section('konten')

	<h3>Data Laptop</h3>

	<a href="/laptop"> Kembali</a>

	<br/>
	<br/>

	<form action="/laptop/store" method="post">
		{{ csrf_field() }}
		<div class="form-horizontal">

    <div class="form-group">
        <label for="merklaptop" class="col-sm-2 control-label">Merk Laptop</label>
        <div class="col-sm-10">
            <input name="merklaptop" type="text" class="form-control" id="merklaptop" placeholder="merklaptop">
        </div>
    </div>

    <div class="form-group">
        <label for="stocklaptop" class="col-sm-2 control-label">Stock Laptop</label>
        <div class="col-sm-10">
            <input name="stocklaptop" type="number" class="form-control" id="stocklaptop" placeholder="stocklaptop">
        </div>
    </div>

    <div class="form-group">
        <label for="tersedia" class="col-sm-2 control-label">tersedia</label>
        <div class="col-sm-10">
            <textarea name="tersedia" class="form-control" id="tersedia" placeholder="tersedia"></textarea>
        </div>
    </div>
</div>

<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
