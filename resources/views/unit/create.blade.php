@extends('master.master')

@section('content')
    <h4>Tambah Data Unit</h4>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="post" action="{{ route('unit.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama_unit">Nama Unit</label>
                    <input type="text" value="{{ old('nama_unit') }}" class="form-control" id="nama_unit" name="nama_unit"
                        aria-describedby="emailHelp" required>
                    @error('nama_unit')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror

                </div>


                <div class="form-group">
                    <label for="harga_hari">Harga / hari</label>
                    <input type="text" class="form-control" id="harga_hari" value="{{ old('harga_hari') }}"
                        name="harga_hari" aria-describedby="emailHelp" required>
                    @error('harga_hari')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="harga_minggu">Harga / minggu</label>
                    <input type="text" class="form-control" id="harga_minggu" value="{{ old('harga_minggu') }}"
                        name="harga_minggu" aria-describedby="emailHelp" required>
                    @error('harga_minggu')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror

                </div>


                <div class="form-group">
                    <label for="harga_bulan">Harga / bulan</label>
                    <input type="text" class="form-control" id="harga_bulan" value="{{ old('harga_bulan') }}"
                        name="harga_bulan" aria-describedby="emailHelp" required>
                    @error('harga_bulan')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="gambar">Pilih Gambar</label>
                    <input type="file" class="form-control-file" id="gambar" name="gambar" required>
                    @error('gambar')
                        <small class="form-text text-danger"> {{ $message }}</small>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
