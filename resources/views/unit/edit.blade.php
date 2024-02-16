@extends('master.master')

@section('content')
    <h4>Tambah Data Unit</h4>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="post" action="{{ route('unit.update', ['unit' => $data->id]) }}" enctype="multipart/form-data">

                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama_unit">Nama Unit</label>
                    <input type="text" class="form-control" id="nama_unit" name="nama_unit" value="{{ $data->nama_unit }}"
                        aria-describedby="emailHelp" required>

                </div>


                <div class="form-group">
                    <label for="harga_hari">Harga / hari</label>
                    <input type="text" class="form-control" id="harga_hari" name="harga_hari"
                        value="{{ $data->harga_hari }}" aria-describedby="emailHelp" required>

                </div>

                <div class="form-group">
                    <label for="harga_minggu">Harga / minggu</label>
                    <input type="text" class="form-control" id="harga_minggu" name="harga_minggu"
                        value="{{ $data->harga_minggu }}" aria-describedby="emailHelp" required>

                </div>


                <div class="form-group">
                    <label for="harga_bulan">Harga / bulan</label>
                    <input type="text" class="form-control" id="harga_bulan" name="harga_bulan"
                        value="{{ $data->harga_bulan }}" aria-describedby="emailHelp" required>

                </div>

                <div class="form-group">
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                </div>

                <input type="hidden" name="id" value="{{ $data->id }}">


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
