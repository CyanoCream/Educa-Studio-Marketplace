@extends('admin.layout')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="content-fluit">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Hubungi Kami</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Hubungi Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createHubungi_Kami') }}" class="btn btn-primary" role="button">Tambah Hubungi Kami</a>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>id_pelanggan</th>
                                <th>nama</th>
                                <th>email</th>
                                <th>nomor_ponsel</th>
                                <th>topik</th>
                                <th>pesan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hubungi_kamis as $hubungi_kami)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $hubungi_kami->id_pelanggan }}</td>
                                    <td>{{ $hubungi_kami->nama }}</td>
                                    <td>{{ $hubungi_kami->email }}</td>
                                    <td>{{ $hubungi_kami->nomor_ponsel }}</td>
                                    <td>{{ $hubungi_kami->topik }}</td>
                                    <td>{{ $hubungi_kami->pesan }}</td>
                                    <td>
                                        <a href="{{route('editHubungi_Kami', ['id' => $hubungi_kami->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)" data-url="{{route('deleteHubungi_Kami', ['id' => $hubungi_kami->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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