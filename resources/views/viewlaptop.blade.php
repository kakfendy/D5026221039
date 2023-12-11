@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Laptop</h3>

    <a href="/laptop">Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            @foreach ($laptop as $p)
            <div class="card" style="width:200px">
    <div style="width:200px; height:300px; border:1px solid black; display:flex; align-items:center; justify-content:center;background-color:blue;">
    <p style="color:white; font-weight:bold;"> Gambar laptop</p>
    </div>
    <div class="card-body">
        <h4 class="card-title">{{ $p->kodelaptop }}</h4>
    </div>
</div>

            @endforeach
        </div>
        <div class="col-8">
            @foreach ($laptop as $p)
                <fieldset disabled>
                    <form action="/laptop/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="kodelaptop" value="{{ $p->kodelaptop }}">
                        <div class = "form-group">
                            <label for = "kode" class = "col-sm-2 control-label">Kode</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="kode" value="{{ $p->kodelaptop }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "merklaptop" class = "col-sm-2 control-label">Merk Laptop</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="merklaptop" value="{{ $p->merklaptop }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "stocklaptop" class = "col-sm-2 control-label">Stock Laptop</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="stocklaptop" value="{{ $p->stocklaptop }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
                            <div class = "col-sm-10">
                                <textarea required="required" name="tersedia" class="form-control">{{ $p->tersedia }}</textarea>
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/laptop" class="btn btn-primary w-25 p-2">OK</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
