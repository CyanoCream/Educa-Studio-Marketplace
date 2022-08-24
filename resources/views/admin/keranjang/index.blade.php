@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="content-fluit">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Keranjang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Keranjang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createKeranjang') }}" class="btn btn-primary" role="button">Tambah Keranjang</a>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>id_produk</th>
                                <th>qty_ker</th>
                                <th>waktu</th>
                                <th>harga_produk</th>
                                <th>packing</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keranjangs as $keranjang)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $keranjang->id_produk }}</td>
                                    <td>{{ $keranjang->qty_ker }}</td>
                                    <td>{{ $keranjang->waktu }}</td>
                                    <td>{{ $keranjang->harga_produk }}</td>
                                    <td>{{ $keranjang->packing }}</td>
                                    <td>
                                        <a href="{{route('editKeranjang', ['id' => $keranjang->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)" data-url="{{route('deleteKeranjang', ['id' => $keranjang->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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

@section('addJavascript')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
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
@endsection