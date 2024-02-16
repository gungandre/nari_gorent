@extends('master.master')

@section('content')
    <h4>Edit data testimoni</h4>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <form method="post" action="{{ route('testimoni.update', ['testimoni' => $data->id]) }}"
                enctype="multipart/form-data">

                @method('put')
                @csrf

                <div class="form-group">
                    <label for="nama_unit">Keterangan</label>
                    <input type="text" class="form-control" id="nama_unit" name="keterangan" value="{{ $data->keterangan }}"
                        aria-describedby="emailHelp" required>
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

                <input type="hidden" name="id" value="{{ $data->id }}">


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
