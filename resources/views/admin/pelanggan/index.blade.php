@extends('admin.layout')

@section('content')

<style>
    .table-update {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  .table-update td, .table-update th {
    border: 1px solid #ddd;
    padding: 5px;
  }
  
  .table-update tr:nth-child(even){background-color: #f2f2f2;}
  
  .table-update tr:hover {background-color: #ddd;}
  
  .table-update th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createPelanggan') }}" class="btn btn-primary" role="button">Tambah Pelanggan</a>
                </div>
                <div class="card-body p-0">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>foto</th>
                                <th>waktu_daftar</th>
                                <th>nama_pelanggan</th>
                                <th>email_pelanggan</th>
                                <th>password</th>
                                <th>no_telp</th>
                                <th>alamat_pel</th>
                                <th>provinsi_pel</th>
                                <th>kota_pel</th>
                                <th>kecamatan_pel</th>
                                <th>level_user</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $pelanggan->foto }}</td>
                                    <td>{{ $pelanggan->waktu_daftar }}</td>
                                    <td>{{ $pelanggan->nama_pelanggan }}</td>
                                    <td>{{ $pelanggan->email_pelanggan }}</td>
                                    <td>{{ $pelanggan->password }}</td>
                                    <td>{{ $pelanggan->no_telp }}</td>
                                    <td>{{ $pelanggan->alamat_pel }}</td>
                                    <td>{{ $pelanggan->provinsi_pel }}</td>
                                    <td>{{ $pelanggan->kota_pel }}</td>
                                    <td>{{ $pelanggan->kecamatan_pel }}</td>
                                    <td>{{ $pelanggan->level_user }}</td>
                                    <td>
                                        <a href="{{route('editPelanggan', ['id' => $pelanggan->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)" data-url="{{route('deletePelanggan', ['id' => $pelanggan->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addCss')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@push('script')
<script src="{{ asset('js2/sweetalert.min.js') }}"></script>
<script>
    $(function() {
        $("#data-table").DataTable();
    })

    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function(value) {
            if (value) {
                window.location = url;
            }
        })
    }

    
</script>
@endpush