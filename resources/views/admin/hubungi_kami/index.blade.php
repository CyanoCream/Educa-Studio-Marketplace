@extends('admin.master')

@section('content')

<style>
    .table-update {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .table-update td,
    .table-update th {
        border: 1px solid #ddd;
        padding: 5px;
    }

    .table-update tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .table-update tr:hover {
        background-color: #ddd;
    }

    .table-update th {
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-left">Hubungi Kami</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('daftarHubungi_Kami')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Hubungi Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createHubungi_Kami') }}" class="btn btn-primary" role="button">Tambah Hubungi
                        Kami</a>
                </div>
                <div class="card-body p-2">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama</th>
                                <th>email</th>
                                <th>nomor ponsel</th>
                                <th>topik</th>
                                <th>pesan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hubungikamis as $hubungikami)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $hubungikami->nama }}</td>
                                <td>{{ $hubungikami->email }}</td>
                                <td>{{ $hubungikami->nomorponsel }}</td>
                                <td>{{ $hubungikami->topik }}</td>
                                <td>{{ $hubungikami->pesan }}</td>
                                <td>
                                    <a onclick="edit(this)"
                                        data-url="{{route('editHubungi_Kami', ['id' => $hubungikami->id])}}"
                                        class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)"
                                        data-url="{{route('deleteHubungi_Kami', ['id' => $hubungikami->id])}}"
                                        class="btn btn-danger btn-sm" role="button">Hapus</a>
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
@section('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@push('script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js2/sweetalert.min.js') }}"></script>
<script>
    $(function () {
        $("#data-table").DataTable();
    })

    confirmDelete = function (button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function (value) {
            if (value) {
                window.location = url;
            }
        })
    }

    edit = function (button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Edit',
            'text': 'Apakah kamu yakin ingin mengedit data ini?',
            'primaryMode': true,
            'buttons': true
        }).then(function (value) {
            if (value) {
                window.location = url;
            }
        })
    }
</script>
@endpush