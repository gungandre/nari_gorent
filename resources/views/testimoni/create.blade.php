@extends('master.master')

@section('content')
    <h4>Tambah Data Testimoni</h4>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="post" action="{{ route('testimoni.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp"
                        required value="{{ old('keterangan') }}">
                    @error('keterangan')
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
