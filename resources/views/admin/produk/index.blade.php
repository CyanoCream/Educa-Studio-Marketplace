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
                    <h1 class="text-left">Produk</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('daftarProduk')}}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Produk</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createProduk') }}" class="btn btn-primary" role="button">Tambah Produk</a>
                </div>
                <div class="card-body p-2">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama produk</th>
                                <th>kategori</th>
                                <th>harga produk</th>
                                <th>status pertemuan</th>
                                <th>stock</th>
                                <th>pertemuan</th>
                                <th>waktu temu</th>
                                <th>umur</th>
                                <th>keterangan</th>
                                <th>manfaat</th>
                                <th>bundling</th>
                                <th>nama penyelenggara</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td>{{ $produk->kategori }}</td>
                                <td>{{ $produk->harga_produk }}</td>
                                <td>{{ $produk->status_pertemuan }}</td>
                                <td>{{ $produk->stock }}</td>
                                <td>{{ $produk->pertemuan }}</td>
                                <td>{{ $produk->waktu_temu }}</td>
                                <td>{{ $produk->umur }}</td>
                                <td>{{ $produk->keterangan }}</td>
                                <td>{{ $produk->manfaat }}</td>
                                <td>{{ $produk->bundling }}</td>
                                <td>{{ $produk->nama_penyelenggara }}</td>
                                <td>
                                    <a onclick="edit(this)"
                                        data-url="{{route('editProduk', ['id' => $produk->id])}}"
                                        class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)"
                                        data-url="{{route('deleteProduk', ['id' => $produk->id])}}"
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