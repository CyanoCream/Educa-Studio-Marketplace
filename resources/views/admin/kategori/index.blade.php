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
                    <a href="{{ route('createKategori') }}" class="btn btn-primary" role="button">Tambah Kategori</a>
                </div>
                <div class="card-body p-0">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nama_kategori</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoris as $kategori)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>
                                        <a href="{{route('editKategori', ['id' => $kategori->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="onDelete(this)" data-url="{{route('deleteKategori', ['id' => $kategori->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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

    onDelete = function(button) {
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