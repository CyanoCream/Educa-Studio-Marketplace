@extends('admin.master')

@section('content')
<div class="content-header">
    <div class="content-fluit">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('daftarDetail_Order')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Detail Orders</li>
				</ol>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header text-right">
                <a href="{{ route('createDetail_Order') }}" class="btn btn-primary" role="button">Tambah Detail Orders</a>
            </div>
            <div class="card-body p-0">
                <table class="table table-hover mb-0" id="data-table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>id_order</th>
                            <th>id_produk</th>
                            <th>id_varian_order</th>
                            <th>qty_order</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail_orders as $detail_order)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $detail_order->id_order }}</td>
                                <td>{{ $detail_order->id_produk }}</td>
                                <td>{{ $detail_order->id_varian_order }}</td>
                                <td>{{ $detail_order->qty_order }}</td>
                                <td>
                                    <a href="{{route('editDetail_Order', ['id' => $detail_order->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                    <a onclick="confirmDelete(this)" data-url="{{route('deleteDetail_Order', ['id' => $detail_order->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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