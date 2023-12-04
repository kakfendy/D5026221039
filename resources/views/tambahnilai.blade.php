@extends('master2')
@section('konten')

    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br/>
    <br/>

    <div>
        <form action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="NRP" class="col-sm-2 control-label">NRP</label>
                    <div class="col-sm-10">
                        <input name="NRP" type="number" class="form-control" id="NRP" placeholder="NRP Pegawai">
                    </div>
                </div>

                <div class="form-group">
                    <label for="NilaiAngka" class="col-sm-2 control-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input name="NilaiAngka" type="number" class="form-control" id="NilaiAngka" placeholder="Nilai Angka">
                    </div>
                </div>

                <div class="form-group">
                    <label for="SKS" class="col-sm-2 control-label">SKS</label>
                    <div class="col-sm-10">
                        <input name="SKS" type="number" class="form-control" id="SKS" placeholder="SKS Pegawai">
                    </div>
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    </div>

@endsection
