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
                    <h1 class="text-left">Penyelenggara</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('daftarPenyelenggara')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Penyelenggara</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createPenyelenggara') }}" class="btn btn-primary" role="button">Tambah
                        Penyelenggara</a>
                </div>
                <div class="card-body p-2">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>id produk</th>
                                <th>icon penyelenggara</th>
                                <th>nama penyelenggara</th>
                                <th>kota penyelenggara</th>
                                <th>deskripsi</th>
                                <th>jam operasional</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyelenggaras as $penyelenggara)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $penyelenggara->produk }}</td>
                                <td><img src="/images/{{ $penyelenggara->icon_penyelenggara}}" alt="" width="100px">
                                </td>
                                <td>{{ $penyelenggara->nama_penyelenggara }}</td>
                                <td>{{ $penyelenggara->kota_penyelenggara }}</td>
                                <td>{{ $penyelenggara->deskripsi }}</td>
                                <td>{{ $penyelenggara->jam_operasional }}</td>
                                <td>
                                    <a onclick="edit(this)"
                                        data-url="{{route('editPenyelenggara', ['id' => $penyelenggara->id])}}"
                                        class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)"
                                        data-url="{{route('deletePenyelenggara', ['id' => $penyelenggara->id])}}"
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
@section('addCss')
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