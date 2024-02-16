@extends('master.master')

@section('content')
    <h4>Data Units</h4>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('unit.create') }}" class="btn btn-primary mb-3">Tambah DATA</a>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Unit</th>
                    <th>Harga / hari</th>
                    <th>Harga / minggu</th>
                    <th>Harga / bulan</th>
                    <th>Gambar</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $data->nama_unit }}</td>
                        <td>{{ $data->harga_hari }}</td>
                        <td>{{ $data->harga_minggu }}</td>
                        <td>{{ $data->harga_bulan }}</td>
                        <td><img src="{{ asset('storage/' . $data->image) }}" alt="" width="50px"></td>

                        <td><a href="{{ route('unit.edit', ['unit' => $data->id]) }}"
                                class="btn btn-warning mr-1">Edit</a><button type="button"
                                onclick="hapus({{ $data->id }})" class="btn btn-danger">
                                Hapus
                            </button></td>
                        @php
                            $no++;
                        @endphp
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection

@push('javascript')
    <script>
        function hapus(id) {

            console.log(id)
            Swal.fire({
                title: 'Apakah anda yakin?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yakin',
                cancelButtonText: 'Batal',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.showLoading();
                    $.ajax({
                        type: "delete",
                        data: {
                            "_token": $('meta[name="csrf-token"]')[0].content
                        },
                        url: "/data-unit/destroy/" + id,
                        success: function(response) {
                            console.log(response.message)
                            Swal.fire(
                                'Pemberitahuan',
                                response.message,
                                'success'
                            ).then((result) => {

                                if (result.isConfirmed) {
                                    window.location.href = '{{ route('unit') }}';
                                }

                            });


                        },
                        error: function(err) {
                            Swal.close();
                            console.log(err.responseText)
                            Swal.fire(
                                'Pemberitahuan',
                                'Gagal hapus data!',
                                'error'
                            );

                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            })
        }
    </script>
@endpush
